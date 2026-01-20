<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showFormLogin()
    {
        //
        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        // Validação
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Insira um email',
                'password.required' => 'Insira uma senha',
            ]
        );
        //
        $crendentials = $request->only('email', 'password');

        //
        if (Auth::attempt($crendentials)) {
            $request->session()->regenerate();

            return redirect('/home');
        }

        return redirect()->back()->withErrors('Crendiciais Inválidas');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        //
    }
}
