<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class AuthController extends Controller
{
public function register()
  {
    return view('auth.register');
  }

public function create(Request $request){
$form = $request->all();
user::create($form);
return redirect('/');
}

public function index()
{
$users = user::all();
return view('index', ['users' => $users]);
}
}
