<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
    	return view('login');
    }

    public function login(Request $request) {
    	if ( Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    		// dd(Auth::user());
    		return redirect('/category/index');
    	} else return "Gagal";
    }

    public function logout() {
    	Auth::logout();
    	return redirect('/login');
    }
}
