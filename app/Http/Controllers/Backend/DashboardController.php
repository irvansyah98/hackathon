<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * MainController
 *
 *  *
 */

class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

	public function index() {
	   return view('backend.pages.dashboard.index');
	}
}
