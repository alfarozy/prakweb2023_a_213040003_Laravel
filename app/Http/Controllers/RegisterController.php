<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => "Register",
        ]);
    }
    public function store(Request $request)
    {
        $attr = $request->validate(
            [
                'name' => 'required|max:255',
                'username' => ['required', 'min:3', 'max:255', 'unique:users'],
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:5|max:255'
            ],
            [
                'name.required' => 'Kolom nama harus diisi.',
                'name.max' => 'Panjang maksimal kolom nama adalah 255 karakter.',

                'username.required' => 'Kolom username harus diisi.',
                'username.min' => 'Panjang minimal kolom username adalah 3 karakter.',
                'username.max' => 'Panjang maksimal kolom username adalah 255 karakter.',
                'username.unique' => 'Username sudah digunakan. Pilih username lain.',

                'email.required' => 'Kolom email harus diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.unique' => 'Email sudah digunakan. Pilih email lain.',

                'password.required' => 'Kolom password harus diisi.',
                'password.min' => 'Panjang minimal kolom password adalah 5 karakter.',
                'password.max' => 'Panjang maksimal kolom password adalah 255 karakter.',
            ]
        );

        $attr['password'] = Hash::make($attr['password']);

        User::create($attr);

        return redirect('/login')->with('success', 'Pendaftaran berhasil, silahkan login.');
    }
}
