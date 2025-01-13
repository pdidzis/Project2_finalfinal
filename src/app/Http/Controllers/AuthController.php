<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Display login form
    public function login(): View
    {
        return view(
            'auth.login',
            [
                'title' => 'Log in',
            ]
        );
    }

    // Authenticate user
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect to the authors page after successful login
            return redirect('/authors');
        }

        return back()->withErrors([
            'name' => 'Failed to authenticate',
        ]);
    }
}
