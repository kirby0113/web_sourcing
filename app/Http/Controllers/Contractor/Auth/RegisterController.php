<?php

namespace App\Http\Controllers\Contractor\Auth;

use App\Http\Controllers\Controller;
use App\Contractor;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    protected $redirectTo = 'contractor/toppage';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:contractor');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:contractors'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo_url' => ['file','image','mimes:png,jpeg'],
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
        if(isset($data['photo_url'])){
        $date = date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
        $date_hash = hash( "sha256", $date);
        $name = $data['photo_url']->getClientOriginalName();
        Storage::putFileAs('public/facephoto_data/',$data['photo_url'],$date_hash.$name);
        }
        

        if(isset($data['photo_url'])){
        return Contractor::create([
            'Name' => $data["name"],
            'Nickname' => $data['Nickname'],
            'Birthday' => $data['Birthday'],
            'photo_url' => 'storage/facephoto_data/'.$date_hash.$name,
            'category_id' => $data['category'],
            'Appealpoint' => $data['appeal'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
        }else{
            return Contractor::create([
            'Name' => $data["name"],
            'Nickname' => $data['Nickname'],
            'Birthday' => $data['Birthday'],
            'category_id' => $data['category'],
            'Appealpoint' => $data['appeal'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            ]);
        }
    }

    protected function guard(){
        return Auth::guard('contractor');
    }

    public function showRegistrationForm(){
        return view('contractor.auth.register');
    }
}
