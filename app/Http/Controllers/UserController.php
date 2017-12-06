<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

    	// Handle the user upload of avatar
    	if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = "img/avatar-1/" . time() . '.' . $avatar->getClientOriginalExtension();
        $path = public_path("img/avatar-1/" . $filename);
        request()->avatar->move(public_path("img/avatar-1"), $filename);
    		//$avatar->send(public_path('/img/avatar-1/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}

    	return view('profile', array('user' => Auth::user()) );

    }
}
