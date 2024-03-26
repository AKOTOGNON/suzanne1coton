<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
     public function index()
    {

        return view('auth.login');
    }



    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

         // Vérifier si l'utilisateur existe déjà
    if (User::where('email', $request->email)->exists()) {
        return back()->withErrors(['email' => 'ce utilisateur existe déjà.']);
    }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'numero' => $request->numero,
            'sexe' => $request->sexe,
            'commune' => $request->commune,
            'departement' => $request->departement,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        //Auth::login($user);

        return view('auth.login');

        //return redirect(RouteServiceProvider::HOME);
    }


}
