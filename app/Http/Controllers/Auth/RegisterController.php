<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Rol;
use App\Campu;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
     *?? null
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create(array $data)
    {

        return User::create([
            
            'name' => $data['name'],
            'surname' => $data['surname'],
            'code' => $data['code'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'nationality' => $data['nationality'],
            'city' => $data['city'],
            'direction' => $data['direction'],
            'phone' => $data['phone'],
            'rol_id' => $data['rol_id']?? null,
            'campu_id' => $data['campu_id']?? null,
            'faculie_id' => $data['faculie_id']?? null,
            
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
             recaptchaFieldName() => recaptchaRuleName()
        ]);
    }

    //'nationality' => $data['nationality'],
            //'city' => $data['city'],
            //'direction' => $data['direction'],
            //'phone' => $data['phone'],
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    
}

