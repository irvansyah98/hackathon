<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Image;
use File;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index() {
	   $data['data'] = User::orderBy('id', 'DESC')->get();

      return view('backend.pages.users.index', $data);
	}

	public function create()
    {
      return view('backend.pages.users.create');
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

        $req['password'] = \Hash::make($req['password']);

        $result = User::create($req);

        return redirect('backend/users')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function edit($id)
    {
      $data['data'] = User::find($id);

      return view('backend.pages.users.edit', $data);
    }

    public function update($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit','licenses_id');

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

          $result = User::find($id);
          if (!empty($result->photo)) {
            File::delete('img/'.$result->photo);
          }
        }else {
          unset($req['photo']);
        }
      }else {
        unset($req['photo']);
      }

        $req['password'] = \Hash::make($req['password']);

        $result = User::where('id', $id)->update($req);

        return redirect('backend/users')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = User::find($id);
      $result->forceDelete();

      return redirect('backend/users')->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
