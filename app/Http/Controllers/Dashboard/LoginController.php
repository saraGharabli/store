<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function getLogin(){
        return view('dashboard.auth.login');
    }

    public function login(LoginRequest $request){
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password],  $remember_me)){
            return redirect()-> route('admin.dashboard');
        };
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }
}
