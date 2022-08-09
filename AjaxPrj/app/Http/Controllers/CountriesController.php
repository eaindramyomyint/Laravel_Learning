<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountriesController extends Controller
{
    //
    public function index() {
        return view('countries-list');
    }

    public function addCountry(Request $request)  {
        $validator = \Validator::mae($request->all(),[
            'country_name'=>'required|unique:countries',
            'capital_city'=>'required',
        ]);
        if(!validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);

        }else {
            $country = new Country();
            $country->country_name = $request->country_name;
            $country->capital_city = $request->capital_city;
            $query =$country->save();

            if(!query) {
                return response()->json(['code'=>0,'msg'=>'Something went wrong']);
            }else {
                return response()->json(['code'=>1,'msg'=>'New Country has been successfully saved']);
            }
        }

    }
}
