<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;


class LoginController extends Controller
{
    public function adminlogin () {
        return view('login-regis.login');
    }

    public function adminloginproses (Request $request){
        $check = $request->all();
        if (Auth::guard('adminpetugas')->attempt(['username' => $check['username'], 'password' => $check['password']])) { 
            session()->regenerate();
            // dd('Berhasil Login');
            return redirect()->route('admin.dashboard');
        } 
        else { 
            return back()->with('loginError', 'Login Failed');
        } 
    } 

    public function adminlogout (Request $request) {
        Auth::guard('adminpetugas')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }

    public function regis () {
        return view('login-regis.regis');
    }

    public function regisproses (Request $request) {
        User::insert([
            'username' => $request -> username,
            'password' => Hash::make ($request->password),
            'email' => $request -> email,
            'namalengkap' => $request -> namalengkap,
            'alamat' => $request -> alamat,
            'created_at' => Carbon::now() 
        ]);
        return redirect()->route('user.login');
    }

    public function userlogin () {
        return view('login-regis.loginuser');
    }

    public function userloginproses (Request $request) {
        $check = $request->all();
        if (Auth::attempt(['username'=>$check['username'], 'password'=>$check['password']])) {
            session()->regenerate();
            // dd('Login Success');
            return redirect()->route('user.buku.blog')->with('success', 'SELAMAT DATANG ^,^');
        } 
        else {
            return back()->with('LoginError', 'Login Failed');
        }
    }

    public function userlogout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login');
    } 

}
