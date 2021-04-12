<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function __invoke(Request $request)
    {

        $this->validate(request(), [
            'apartment_id' => ['required', 'string'],
        ]);
        $user = Auth::user();
        $apartment = Apartment::where('id', $request->apartment_id)->first();


        return view('apply', [
            'user' => $user,
            'apartment' => $apartment
        ]);
    }
}
