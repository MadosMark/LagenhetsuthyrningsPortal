<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function __invoke(Request $request)
    {
        $user = Auth::user();
        // $apartments = User::find(1)->apartments;

        return view('profile', [
            'user' => $user,
            'apartments' => $user->apartments
        ]);
    }
}
