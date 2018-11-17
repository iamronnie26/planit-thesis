<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
use App\Client;
use App\Address;
use App\City;
use App\Province;
use App\Region;
use App\Job;
use Session;

use Auth;

class ClientsController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function showRegistrationForm(){
        if(session('data')){
            return view('client.register');
        }else{
            return redirect('/register');
        }
    }

    public function registerClient(Request $request){
        
        $this->validate($request,[
            'password'=>'required|string|min:6|confirmed',
            'contact_no'=>'required|string',
            'street_name'=>'required|string',
            'barangay'=>'required|string',
            'city'=>'required|string',
            'province'=>'required|string',
            'region'=>'required|string',
        ]);

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

        $client = new Client();
        $client->contact_no = $request->contact_no;
        $client->address_id = $address_id;
        $client->save();
        $account_no = $client->id;

        $user = new User();
        $user->firstname = session('data.firstname');
        $user->lastname = session('data.lastname');
        $user->email = session('data.email');
        $user->password = Hash::make($request->input('password'));
        $user->account_no = $account_no;
        $user->user_type = session('data.user_type');
        $user->save();

        session()->forget('data.firstname');
        session()->forget('data.lastname');
        session()->forget('data.email');
        session()->forget('data.user_type');
        $credentials = ['email'=>$user->email,
                               'password'=>$request->input('password'),
                               ];

        if(Auth::attempt($credentials)){
            return redirect()->route('client.home');
        }
    }

    public function home(){

        $user = Auth::user()->account()->with('postedJobs')->first();
        $jobs = $user->postedJobs;
        
        $msg = "Welcome ".Auth::user()->firstname;
        Session::flash('status',$msg);
        return view('client.home')->with([
            'jobs'=>$jobs,
        ]);
    }

    public function showSettings(){
        $user = Auth::user();
        $user_details = Auth::user()->account;

        return view('client.settings')->with([
            "user"=>$user,
            "user_details"=>$user_details,
        ]);
    }
}
