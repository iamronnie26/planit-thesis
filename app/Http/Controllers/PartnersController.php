<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
use App\Partner;
use App\Address;
use App\City;
use App\Province;
use App\Region;

use Auth;

class PartnersController extends Controller
{
    public function showRegistrationForm(){
        if(session('data')){
            return view('partner.register');
        }else{
            return redirect('/register');
        }
    }

    public function registerPartner(Request $request){
        // $this->validate($request,[
        //     'password'=>'required|string|min:6|confirmed',
        //     'business_name'=>'required|string',
        //     'contact_no'=>'required|string',
        //     'street_name'=>'required|string',
        //     'barangay'=>'required|string',
        //     'city'=>'required|string',
        //     'province'=>'required|string',
        //     'region'=>'required|string',
        // ]);
        
        $city = City::firstOrCreate([
            "city_name" => ucwords($request->input('city')),
        ])->id;

        $province = Province::firstOrCreate([
            'province_name'=>ucwords($request->input('province')),
        ])->id;

        $region = Region::firstOrCreate([
            'region_name'=>ucwords($request->input('region')),
        ])->id;

        $address = new Address();
        $address->street_name = ucwords($request->input('street_name'));
        $address->barangay = ucwords($request->input('barangay'));
        $address->city_id = $city;
        $address->province_id = $province;
        $address->region_id = $region;
        $address->save();
        $address_id = $address->id;

        $partner = new Partner();
        $partner->contact_no = $request->input('contact_no');
        $partner->business_name = ucwords($request->input('business_name'));
        $partner->address_id = $address_id;
        $partner->save(); 
        $account_no = $partner->id;

        $user = new User();
        $user->firstname = session('data.firstname');
        $user->lastname = session('data.lastname');
        $user->email = session('data.email');
        $user->password = Hash::make($request->input('password'));
        $user->user_type = session('data.user_type');
        $user->account_no = $account_no;
        $user->save();

        session()->forget('data');

        $credentials = ['email'=>$user->email,
                                'password'=>$request->input('password'),
                                ];

        if(Auth::attempt($credentials)){
            return redirect()->route('partner.home');
        }
    }

    public function home(){
        return view('partner.home');
    }

    public function showProfile(){
        return view('partner.profile');
    }
}
