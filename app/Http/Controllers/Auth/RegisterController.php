<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Session;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Jobs\SendVerificationEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'first_name' => 'required|string|max:50',
            'middle_name' => 'nullable|string|max:50',
            'last_name' => 'required|string|max:50',
            'username' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:50|confirmed|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'is_agreed' => 'required_with:1'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
  /*      dd([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'username'=>$data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_agreed' => 1,
            'is_validated' => 0
        ]);*/
        return User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'username'=>$data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_agreed' => 1,
            'is_verified' => 0,
            'email_token' => base64_encode($data['email'])
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        dispatch(new SendVerificationEmail($user));

        // $this->guard()->login($user);
        Session::flash('success_msg', 'You have successfully registered. An email is sent to you for verification.');

        return $this->registered($request, $user)
                        ?response()->json(['redirect_path'=>'/login'],200): response()->json(['redirect_path'=>'/login'],200);
    }

    public function verify($token)
    {
        $user = User::where('email_token',$token)->first();
        if ($user->is_verified == 0) {
            $user->is_verified = 1;
            Session::flash('success_msg', 'You email is successfully verified. Please login here.');
            if($user->save()){
                return redirect()->route('login');
            }
        }else{
            Session::flash('info_msg', 'Your email is already verified. Please login here.');
            return redirect()->route('login');
        }
    }

}
