<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Tenant;
use App\Models\Transactional;

class UserController extends Controller
{
    public function index()
    {
        return view('user.loginregister.page');
    }

    public function profile()
    {
        $user = Auth::user();
        $tenant = Tenant::where('user_id', $user->id)->first();
        $transaction = Transactional::where('tenant_id', $tenant->id)->get();

        return view('user.profile.page', [
            'user' => Auth::user(),
            'transaction' => $transaction ?? null,
        ]);
    }

    public function register(StoreUserRequest $request) 
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);
        $tenant = Tenant::create(["user_id"=> $user->id]);

        Auth::login($user);

        return redirect()->route('login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('product');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
