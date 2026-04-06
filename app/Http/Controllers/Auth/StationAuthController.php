<?php

namespace App\Http\Controllers\Auth;

use App\Enums\Enums\StatusEnum;
use App\Enums\Enums\VerifiedEnum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class StationAuthController extends Controller
{
    public function index()
    {
        return Inertia::render('Station/Login');
    }

    public function login(Request $request)
    {
        $validatedCredentials = $request->validate([
            'phone' => ['required', 'regex:/^01[3-9][0-9]{8}$/'],
            'password' => 'required|min:4',
        ]);

        // merge the validated credentials with the additional conditions for status and verification
        $validatedCredentials = array_merge($validatedCredentials, [
            'status' => StatusEnum::ACTIVE->value,
            'is_verified' => VerifiedEnum::VERIFIED->value,
        ]);

        // Use your custom guard
        if (Auth::guard('station')->attempt($validatedCredentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/station/dashboard');
        }

        return back()->withErrors([
            'error' => 'Invalid credentials',
        ])->withInput();
    }
}
