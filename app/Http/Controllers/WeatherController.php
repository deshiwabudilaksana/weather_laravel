<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    //

    public function home(){
        return view('weather');
    }

    public function forecast(){
        return view('forecast');
    }

    public function recent(){
        return view('recent');
    }

    public function get_forecast(Request $request){
        //take forecast from openweather python weather.py
        $forecast = shell_exec("C:/Users/USER/AppData/Local/Programs/Python/Python37-32/python ../py/weather.py $request->search");
        $city = $request->search;
        // echo $request->search;
        // echo $forecast;
        return view('show_forecast', [ 'city' => $city, 'forecast' => $forecast]);
    }
}
