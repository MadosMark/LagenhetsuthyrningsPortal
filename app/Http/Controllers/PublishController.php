<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PublishController extends Controller
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


        $this->validate(request(), [
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'rent' => ['required', 'integer'],
            'rooms' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);


        $address = $request->input('address');
        $city = $request->input('city');
        $rent = $request->input('rent');
        $rooms = $request->input('rooms');
        $description = $request->input('description');

        $data = array('user_id' => $user->id, 'address' => $address, "city" => $city, "rent" => $rent, "rooms" => $rooms, "description" => $description, 'image' => $imageName);
        Apartment::insert($data);



        return redirect('/dashboard');
    }
}
