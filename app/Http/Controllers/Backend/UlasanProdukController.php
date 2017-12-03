<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UlasanProduk;
use App\Produk;
use App\User;

class UlasanProdukController extends Controller
{
  public function index() {
	   $data['data'] = UlasanProduk::with('users','produk')->orderBy('id', 'DESC')->get();

      return view('backend.pages.ulasan_produk.index', $data);
	}

	 public function create()
    {
      $data['users'] = User::get();
      $data['produk'] = Produk::get();
      return view('backend.pages.ulasan_produk.create',$data);
    }

    public function store(Request $request)
    {
      	$req = $request->all();

        date_default_timezone_set('Asia/Jakarta');
        $req['date_time'] = date('d F Y  H:i:s');

        $result = UlasanProduk::create($req);

        return redirect('backend/ulasan_produk')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function edit($id)
    {
      $data['users'] = User::get();
      $data['produk'] = Produk::get();
      $data['data'] = UlasanProduk::find($id);

      return view('backend.pages.ulasan_produk.edit', $data);
    }

    public function update($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');
        
        date_default_timezone_set('Asia/Jakarta');
        $req['date_time'] = date('d F Y  H:i:s');

        $result = UlasanProduk::where('id', $id)->update($req);

        return redirect('backend/ulasan_produk')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = UlasanProduk::find($id);
      $result->forceDelete();

      return redirect('backend/ulasan_produk')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
