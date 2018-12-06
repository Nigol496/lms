<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
        return Validator::make($data, [
            'first_name'        => 'required|string|max:50',
            'middle_name'       => 'nullable|string|max:50|',
            'last_name'         => 'required|string|max:50',
            'birth'             => 'required|date',
            'gender'            => 'required|integer',
            'email'             => 'required|string|email|max:255|unique:users',
            'phone'             => 'required|regex:/[0-9]{10,15}/',
            'primary_address'   => 'required|string|max:255',
            'city'              => 'required|string|max:50',
            'state'             => 'required|string|max:50',
            'zip'               => 'required|regex:/[0-9]{1,6}/',
            'alt_address'       => 'nullable|string|max:255',
            'alt_city'          => 'nullable|string|max:50',
            'alt_state'         => 'nullable|string|max:50',
            'alt_zip'           => 'nullable|regex:/[0-9]{1,6}/',
            'password'          => 'required|string|min:6|confirmed',

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
        return User::create([
            'first_name'        => $data['first_name'],
            'middle_name'       => $data['middle_name'],
            'last_name'         => $data['last_name'],
            'birth'             => $data['birth'],
            'gender'            => $data['gender'],
            'email'             => $data['email'],
            'phone'             => $data['phone'],
            'primary_address'   => $data['primary_address'],
            'city'              => $data['city'],
            'state'             => $data['state'],
            'zip'               => $data['zip'],
            'alt_address'       => $data['alt_address'],
            'alt_city'          => $data['alt_city'],
            'alt_state'         => $data['alt_state'],
            'alt_zip'           => $data['alt_zip'],
            'password'          => bcrypt($data['password']),
        ]);
    }
}
