<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $apartments = Apartment::all();


        return view('dashboard', [
            'user' => $user,
            'apartments' => $apartments
        ]);
    }
}
