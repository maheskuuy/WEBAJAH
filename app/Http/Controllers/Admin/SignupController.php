<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    /**
     * Show the signup form.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('signup/signup');
    }

    /**
     * Register a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required|in:Warga,Admin',
        ]);

        // Create a new user
        $user = new User();
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->role = $validatedData['role'];
        $user->save();

        // Redirect the user to the detail_kedudukan/detail_kedudukan form
        return redirect()->route('detail_kedudukan/detail_kedudukan')->with('success', 'Registration Berhasil.Silahkan Isi Identitas Diri');
    }
}