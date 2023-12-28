<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * @throws \Illuminate\Validation\ValidationException
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => 'string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'same:password'
        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $user = new User;
        $user -> name = $data['name'];
        $user -> email = $data['email'];
        $user -> password = Hash::make($data['password']);

        $role = Role::find($data['role']);
        $role -> users()->save($user);
        $user->save();

        if($data['role'] == '2'){
            $brand = new Company;
            $brand -> user_id = $user -> id;
            $brand -> name = $data['name'];
            $brand -> surname = $data['surname'];
            $brand -> email = $data['email'];
            $brand -> phone = $data['phone'];
            $brand -> job_title = $data['jobTitle'];
            $brand -> job_level = $data['jobLevel'];
            $brand -> company_name = $data['companyName'];
            $brand -> business_type = $data['busType'];
            $brand -> country = $data['country'];
            $brand -> region = $data['region'];
            $brand -> budget = $data['budget'];
            $brand -> where_hear_about = $data['whereHear'];
            $brand->save();
        }

        return $user;

//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
    }

    public function showRegistrationForm()
    {
        $roles = Role::all();
        $roleOptions = array();
        if(count($roles) >= 1){
            foreach ($roles as $role) {
                $roleOptions[$role->id] = $role->name;
             }
        } else {
            $roleOptions[0] = 'no Roles found;';
        }

        return view('auth.register')->with('roleOptions', $roleOptions);
    }
}
