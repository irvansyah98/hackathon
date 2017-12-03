<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Toko;
use App\User;

class TokoController extends Controller
{
    public function index() {
	   $data['data'] = Toko::with('users')->orderBy('id', 'DESC')->get();

      return view('backend.pages.toko.index', $data);
	}

	public function create()
    {
      $data['users'] = User::get();
      return view('backend.pages.toko.create',$data);
    }

    public function store(Request $request)
    {
      	$req = $request->all();

        $result = Toko::create($req);

        return redirect('backend/toko')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function edit($id)
    {
      $data['data'] = Toko::find($id);

      return view('backend.pages.toko.edit', $data);
    }

    public function update($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');

        $result = Toko::where('id', $id)->update($req);

        return redirect('backend/toko')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = Toko::find($id);
      $result->forceDelete();

      return redirect('backend/toko')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
