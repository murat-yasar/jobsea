<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // @desc Show login form
    // @route GET /login
    public function login(): View {
        return View('auth.login');
    }

    // @desc Authenticate user
    // @route POST /login
    public function authenticate(Request $request): RedirectResponse {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate user
        if(Auth::attempt($credentials)){
            // Regenerate the session to prevent fixation attacs
            $request->session()->regenerate();

            return redirect()->intended(route('home'))->with('success', 'You are now logged in!');
        }

        // If auth fails, redirect back with error
        return back()->withErrors(['email'=>'The entered credentials are not matching!'])->onlyInput('email');
    }
}
