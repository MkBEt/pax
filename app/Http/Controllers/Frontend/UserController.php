<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Carbon\Carbon;
use App\Transaction;
use App\User;
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

    public function wallet(){
    	return view('frontend.userinfo.wallet');
    }

    public function fetchRedeems(){
    	$data = Transaction::where('memo',Auth::user()->memo)->get();
    	return response()->json($data,200);
    }

    public function redeem(Request $request){
    	$inputs = $request->all();
    	// dd(Transaction::where('trx_id',$inputs['trx_id'])->exists());
    	if (Transaction::where('trx_id',$inputs['trx_id'])->exists()) {
    		$response = [
    			'msg' => 'Already redeemed.',

    		];
    		return response()->json($response,409);
    	}
    	$inputs['trx_timestamp'] = $inputs['timestamp'];
    	$inputs['created_at'] = Carbon::now();
    	$trx_type = explode(' ', $inputs['amount']);
    	$inputs['amount']=trim($trx_type[0]);
    	$inputs['type']=trim(strtolower($trx_type[1]));


    	$trx = Transaction::create($inputs);
    	if ($trx) {
			$user = User::where('memo',$trx->memo)->first();

    		if ($trx->type=='sbd') {
    			$user->blc_sbd = (isset($user->blc_sbd)?$user->blc_sbd:0 ) +  $trx->amount;
    			$user->save();
    			// User::update(['blc_sbd',$user->blc_sbd+$trx->amount]);
    		}else{
    			$amount = explode(' ', $trx->amount)[0];
    			$user->blc_steem = (isset($user->blc_steem)?$user->blc_steem:0 ) + $amount;
    			// dd($user->blc_steem);
    			$user->save();
    			// User::update(['blc_steem',$user->blc_sbd+$trx->amount]);
    		}
    	}

    	$response = [
    			'msg' => 'Successfully redeemed.',

    		];
    	return response()->json($response,200);

    }
}
