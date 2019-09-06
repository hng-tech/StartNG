<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class DataController extends Controller
{
    //Get the json file...

    public function index() {
        return view('login');
    }

    public function certificate(\Illuminate\Http\Request $request) {

        $intern_json = Storage::get('json/start-intern-data.json');
        $array = json_decode($intern_json,true);

        $shn = $request -> input('shn_code');

        for ($i=0; $i < count($array); $i++) { 
            if ($array[i]['code'] === $shn) {
                return redirect('/certificate/'.$array[i]['slug']);
            }
            else {
                continue;
            }
        }

        return view('login')->with('error','The code entered is not a valid shn code');

    }

    public function verify($id) {

        $intern_json = Storage::get('json/start-intern-data.json');
        $array = json_decode($intern_json,true);

        for ($i=0; $i < count($array); $i++) { 
            if ($array[i]['verify_id'] === $id) {
                return redirect('/certificate/'.$array[i]['slug']);
            }
            else {
                continue;
            }
        }

        return view('404');
        
    }
}
