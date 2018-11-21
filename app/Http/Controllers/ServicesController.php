<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function addService(Request $request){
        $data = $request->validate([
            "service_name"=>"service_description",
        ]);

        return response()->json("Service Added!");
    }
}
