<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use App\Models\GeneralSetting;
use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;

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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        // $this->middleware('regStatus')->except('registrationNotAllowed');

        $this->activeTemplate = activeTemplate();
    }

    public function showRegistrationForm()
    {
        $pageTitle = "Sign Up";
        return view($this->activeTemplate . 'user.auth.register', compact('pageTitle'));
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $general = GeneralSetting::first();
        $password_validation = Password::min(6);
        if ($general->secure_password) {
            $password_validation = $password_validation->mixedCase()->numbers()->symbols()->uncompromised();
        }
        $agree = 'nullable';
        if ($general->agree) {
            $agree = 'required';
        }
        $validate = Validator::make($data, [
            'firstname' => 'sometimes|required|string|max:50',
            'lastname' => 'sometimes|required|string|max:50',
            'email' => 'required|string|email|max:90|unique:users',
            'username' => 'required|string|max:50|unique:users',
            'password' => ['required','string','min:4'],
            'terms' => $agree
        ]);
        return $validate;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $exist = User::where('email',$request->email)->first();

        $username = User::where('username',$request->username)->first();
        if ($exist) {
            $notify[] = ['error', 'The email  already exists'];
            return back()->withNotify($notify)->withInput();
        }
        if ($username) {
            $notify[] = ['error', 'This username  already exists'];
            return back()->withNotify($notify)->withInput();
        }
        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);


        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //User Create
        $user = new User();
        $user->firstname = isset($data['firstname']) ? $data['firstname'] : null;
        $user->lastname = isset($data['lastname']) ? $data['lastname'] : null;
        $user->email = strtolower(trim($data['email']));
        $user->password = Hash::make($data['password']);
        $user->username = isset($data['username']) ? $data['username'] : null;
        $user->image = 'defult.png';
        $user->status = 1;
        $user->save();

        return $user;
    }

    public function checkUser(Request $request){
        $exist['data'] = null;
        $exist['type'] = null;
        if ($request->email) {
            $exist['data'] = User::where('email',$request->email)->first();
            $exist['type'] = 'email';
        }
        if ($request->mobile) {
            $exist['data'] = User::where('mobile',$request->mobile)->first();
            $exist['type'] = 'mobile';
        }
        if ($request->username) {
            $exist['data'] = User::where('username',$request->username)->first();
            $exist['type'] = 'username';
        }
        return response($exist);

    }

    public function registered()
    {
        $notify[]=['success','Registration Successfull'];
        return redirect()->route('home')->withNotify($notify);

    }

    public function makeUsername($string) {
        $username = preg_replace('/ /i','',$string);
        $username = preg_replace('/[^A-Za-z0-9\-]/', '', $username);
        $username = strtolower($username);
        return $username;
    }

}
