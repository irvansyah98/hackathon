<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index() {
	   $data['data'] = Kategori::orderBy('id', 'DESC')->get();

      return view('backend.pages.kategori.index', $data);
	}

	public function create()
    {
      return view('backend.pages.kategori.create');
    }

    public function store(Request $request)
    {
      	$req = $request->all();

        $result = Kategori::create($req);

        return redirect('backend/kategori')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function edit($id)
    {
      $data['data'] = Kategori::find($id);

      return view('backend.pages.kategori.edit', $data);
    }

    public function update($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');

        $result = Kategori::where('id', $id)->update($req);

        return redirect('backend/kategori')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = Kategori::find($id);
      $result->forceDelete();

      return redirect('backend/kategori')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
