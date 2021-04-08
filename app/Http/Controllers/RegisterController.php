<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate(request(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ]);

        $emailValidation = User::where('email', '=', $request->input('email'))->first();
        if ($emailValidation !== null) {
            return back()->withErrors('Whoops! This user already exists!');
        }

        $newUser = new User();
        $newUser->name = $request->input('name');
        $newUser->email = $request->input('email');
        $newUser->password = Hash::make($request->input('password'));
        $newUser->save();

        Auth::login($newUser);

        return redirect('/dashboard');
    }
}
