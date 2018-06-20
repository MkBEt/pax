<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function userDashboard(){
    	$userInfo=Auth::user();
    	return view('frontend.userinfo.dashboard')->withInfo($userInfo);
    	// dd($user_info);

    }
}
