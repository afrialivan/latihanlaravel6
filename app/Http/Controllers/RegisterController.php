<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:1'
        ]);
        $validasi['password'] = bcrypt($validasi['password']);

        User::create($validasi);

        $request->session()->flash('success', 'Register Berhasil');

        return redirect('/login');
    }
}
