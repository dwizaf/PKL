<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
            return redirect('/login')->with('status', 'Login gagal, email / password tidak sesuai');
    }

    /**
     * 
     * @return Illuminate\Contracts\Support\Renderable
     * 
     */

    public function changepassword(){
        return view('/changepassword');
    }

    public function updatepassword(Request $request){
        
        # Validation
        $request->validate([
            'passwordlama' => 'required',
            'passwordbaru' => 'required|confirmed',
        ]);

        
        # Match the old password
        if(!Hash::check($request->passwordlama, auth()->user()->password)){
            return back()->with("error", "Password lama tidak sesuai!");
        }

        # Update the new password
        User::whereId(auth()->user()->id)->update([
            'password'=>Hash::make($request->passwordbaru)
        ]);

        return back()->with("status", "Password berhasil diubah!");
    }

    public function edit ($id){
        $profile = User::find($id);
        return view('editprofile', compact('profile'));
    }

    public function update ($id, Request $request){
        
        $profile = User::find($id);
        $profile->update($request->except(['_token','submit']));
        return redirect ('/profile')->with('status', 'Data Anda berhasil diupdate');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
