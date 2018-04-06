<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
      $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
      return view('admin.login', ['except' => ['logout']]);
    }

    public function login(Request $request)
    {
      $this->validate($request, [
        'username' => 'required',
        'password' => 'required|min:6'
      ]);

      if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
      {
        return redirect()->intended(route('admin.dashboard'));
      }
      return redirect()->back()->withInput($request->only('username', 'remember'));

    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
