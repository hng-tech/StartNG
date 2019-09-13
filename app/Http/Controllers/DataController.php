<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Spatie\Browsershot\Browsershot;
use SnappyImage;
use PDF;

class DataController extends Controller
{
    //Get the json file...

    public function index() {
        return view('login');
    }

    public function certificate(\Illuminate\Http\Request $request) {

        $intern_json = Storage::get('start-intern-data.json');
        $array = json_decode($intern_json,true);

        $shn = $request -> input('shn_code');
        $shn = strtolower($shn);

        for ($i=0; $i < count($array); $i++) { 
            if ($array[$i]['code'] == $shn) {
                return redirect('/certification/'.$array[$i]['slug']);
                break;
            }
            else {
                continue;
            }
        }

        return view('login')->with('error','The code entered is not a valid shn code');

    }

    public function verify($id) {

        $intern_json = Storage::get('start-intern-data.json');
        $array = json_decode($intern_json,true);
        $id = strtoupper($id);

        for ($i=0; $i < count($array); $i++) { 
            if ($array[$i]['verify_id'] == $id) {
                return redirect('/confirmation/'.$array[$i]['slug']);
                break;
            }
            else {
                continue;
            }
        }

        return view('404');
        
    }

    public function exportPDF($slug) {
        $intern_json = Storage::get('start-intern-data.json');
        $array = json_decode($intern_json,true);

        for ($i=0; $i < count($array); $i++) { 
            if ($array[$i]['slug'] == $slug) {
                $obj = $array[$i];
                break;
            }
            else {
                continue;
            }
        }

        return view('certificate_pdf')->with('data',$obj);
        // $pdf = PDF::loadView('certificate_pdf', $data)->setPaper('A5')->setOrientation('Landscape')->setOption('zoom',1.1);
        // return $pdf->stream($slug.'.pdf');
        // Browsershot::url('/certification/'.$slug.'/download')->save($slug.'.jpg')->setNodeBinary('/usr/local/bin/node')
        // ->setNpmBinary('/usr/local/bin/npm');
    }

    public function export($slug) {
        $intern_json = Storage::get('start-intern-data.json');
        $array = json_decode($intern_json,true);

        for ($i=0; $i < count($array); $i++) { 
            if ($array[$i]['slug'] == $slug) {
                $obj = $array[$i];
                break;
            }
            else {
                continue;
            }
        }

        $name = ['name' => $obj];
        $pdf = PDF::loadView('certificate', $name);
        return $pdf->stream('download.pdf');
    }

}
