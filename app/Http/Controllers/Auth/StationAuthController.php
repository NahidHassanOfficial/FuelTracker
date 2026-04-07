<?php

namespace App\Http\Controllers\Auth;

use App\Enums\StatusEnum;
use App\Enums\VerifiedEnum;
use App\Events\StationRegistered;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\FuelStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class StationAuthController extends Controller
{
    public function index()
    {
        return Inertia::render('Station/Login');
    }

    public function registerView()
    {
        return Inertia::render('Station/Register');
    }

    public function login(Request $request)
    {
        $validatedCredentials = $request->validate([
            'phone'    => ['required', 'regex:/^01[3-9][0-9]{8}$/'],
            'password' => 'required|min:4',
        ]);

        // merge the validated credentials with the additional conditions for status and verification
        $validatedCredentials = array_merge($validatedCredentials, [
            'status'      => StatusEnum::ACTIVE->value,
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

    public function register(RegistrationRequest $request)
    {
        $validatedData = $request->validated();

        try {
            $station = FuelStation::create($validatedData);
            event(new StationRegistered($station));

            return back()->with('registered', true);
        } catch (\Throwable $th) {
            Log::error('Station registration failed: '.$th->getMessage());

            return back()->withErrors(['failed' => 'Failed to register station. Please try again.'])->withInput();
        }
    }

    public function verifyStation(Request $request, FuelStation $station)
    {
        if (! $request->hasValidSignature()) {
            return redirect()->route('station.login.view')->withErrors(['invalid' => 'Invalid or expired verification link.']);
        }

        $station->update(['is_verified' => VerifiedEnum::VERIFIED->value]);

        return redirect()->route('station.login.view')->with('success', 'Station verified successfully. You can now log in.');
    }
}