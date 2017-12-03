<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produk;
use App\User;
use App\Kategori;
use App\Toko;
use Image;
use File;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index() {
	   $data['data'] = Produk::with('users','kategori','toko')->orderBy('id', 'DESC')->get();

      return view('backend.pages.produk.index', $data);
	}

	public function create()
    {
      $data['users'] = User::get();
      $data['kategori'] = Kategori::get();
      $data['toko'] = Toko::get();
      return view('backend.pages.produk.create',$data);
    }

    public function store(Request $request)
    {
      	$req = $request->all();

        if ($request->hasFile('image')) {
          if ($request->file('image')->isValid()) {
              $destinationPath = 'img/'; // upload path
              $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
              $fileName = rand(11111,99999).'.'.$extension; // renaming image
              $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
              Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
              })->save($destinationPath.$fileName);
              $req['photo'] = $fileName;
              unset($req['image']);
          }
        }

        $result = Produk::create($req);

        return redirect('backend/produk')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function edit($id)
    {
      $data['data'] = Produk::find($id);
      $data['users'] = User::get();
      $data['kategori'] = Kategori::get();
      $data['toko'] = Toko::get();
      return view('backend.pages.produk.edit', $data);
    }

    public function update($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');

        if ($request->hasFile('image')) {
        if ($request->file('image')->isValid()) {
          $destinationPath = 'img/'; // upload path
          $extension = $request->file('image')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renaming image
          $request->file('image')->move($destinationPath, $fileName); // uploading file to given path
          Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
          })->save($destinationPath.$fileName);
          $req['photo'] = $fileName;
          unset($req['image']);

          $result = Produk::find($id);
          if (!empty($result->photo)) {
            File::delete('img/'.$result->photo);
          }
        }else {
          unset($req['photo']);
        }
      }else {
        unset($req['photo']);
      }

        $result = Produk::where('id', $id)->update($req);

        return redirect('backend/produk')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = Produk::find($id);
      $result->forceDelete();

      return redirect('backend/produk')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
