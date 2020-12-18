<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function logout(){
        Auth::logout();
        return view('auth.login')
        ->with('logout',true);
    }
}
