<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $request->authenticate();

            $request->session()->regenerate();
            flash()->option('position', 'top-right')
                ->option('timeout', '5000')->success('Vous êtes connecté avec succés', 'Connexion etablie');
            return redirect("/");
        } catch (\Illuminate\Validation\ValidationException $e) {
            flash()->error('veuillez remplir toutes les conditions', 'erreur de connexion');

            return back()->withErrors($e->validator)->withInput();
        }



        // $role = Auth::user()->role;
        // return match($role){
        //     1 => redirect()->intended('/dashboard-admin'),
        //     2 => redirect()->intended('/dashboard-prestataire'),
        //     3 => redirect()->intended('/dashboard-employeur'),
        // };

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
