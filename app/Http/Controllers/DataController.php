<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Spatie\Browsershot\Browsershot;
use SnappyImage;
use PDF;
use Fpdf;

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
            if (isset($array[$i]["verify_id"]) && $array[$i]["verify_id"] == $id) {
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

        

        $name = strtoupper($obj['name']);
        $link = 'start.ng/verify/'. $obj['verify_id'];
        $grade = strtoupper($obj['grade']);

        // $fpdf = new Fpdf();
        Fpdf::AddPage('L','A4');

        Fpdf::Image('images/bg.png', 0, 0);

        Fpdf::SetFont('Helvetica', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(30.654);
        Fpdf::SetFontSize(10);
        //Fpdf:: SetFillColor(255,0,0);
        Fpdf::MultiCell(0 , 4, "HNG Internship has confirmed the participation of this individual in", 0,  "R"); //true);

        Fpdf::SetFont('Helvetica', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(35.654);
        Fpdf::SetFontSize(10);
        //Fpdf:: SetFillColor(255,0,0);
        Fpdf::MultiCell(0 , 4, "this program. Confirm at " . $link, 0,  "R"); //true);

        Fpdf::SetFont('Helvetica', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(30.654);
        Fpdf::SetFontSize(30);
        Fpdf:: SetTextColor(8,68,130);
        Fpdf::Cell(0 , 6.604, "CERTIFICATE", 0, 1, "L"); //true)
        Fpdf::SetFont('Helvetica', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(45.654);
        Fpdf::SetFontSize(20);
        Fpdf:: SetTextColor(255,168,0);
        Fpdf::Cell(0 , 6.604, "OF COMPLETION", 0, 1, "L"); //true)
        Fpdf::SetFont('Helvetica', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(65.654);
        Fpdf::SetFontSize(10);
        Fpdf:: SetTextColor(0,0,0);
        Fpdf::Cell(0 , 6.604, "This is to certify that", 0, 1, "L"); //true)
        Fpdf::SetFont('Helvetica', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(75.654);
        Fpdf::SetFontSize(23);
        //Fpdf:: SetFillColor(255,0,0);
        Fpdf::Cell(0 , 6.604, "$name", 0, 1, "L"); //true)
        Fpdf::SetFont('Helvetica', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(85.654);
        Fpdf::SetFontSize(10);
        //Fpdf:: SetFillColor(255,0,0);
        Fpdf::Cell(0 , 6.604, "has successfully completed", 0, 1, "L"); //true)
        Fpdf::SetFont('Helvetica', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(100.654);
        Fpdf::SetFontSize(24);
        Fpdf:: SetTextColor(8,68,130);
        Fpdf::MultiCell(0 , 8.604, "Startdotng (Beginner Software", 0,  "L"); //true)
        Fpdf::SetFont('Helvetica', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(109.654);
        Fpdf::SetFontSize(24);
        Fpdf:: SetTextColor(8,68,130);
        Fpdf::MultiCell(0 , 8.604, "Development Training)", 0,  "L"); //true)

        
        Fpdf::SetFont('Helvetica', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(124.654);
        Fpdf::SetFontSize(12);
        Fpdf:: SetTextColor(0,0,0);
        Fpdf::Cell(0 , 6.604, "with $grade on 9th September, 2019", 0, 1, "L"); //true)
        //Seal Image goes here
        Fpdf::Image('images/seal.png',200, 49.926, 49.434, 72.926);
        Fpdf::Image('images/hng.png',12, 146, 12, 9);
        Fpdf::Image('images/hotels.png',29, 145, 20, 11);
        Fpdf::Image('images/ondo.png',50, 147, 18, 9);
        Fpdf::Image('images/flutterwave.png',70, 147, 22, 9);
        Fpdf::Image('images/chatdesk.png',95, 146, 22, 8);
        Fpdf::Image('images/ekiti.jpg',122, 146, 11, 8);
        Fpdf::Image('images/imo.jpg',135, 146, 11, 8);
        // Fpdf::SetFont('Times', '');
        // Fpdf::SetX(47.244);
        // Fpdf::SetY(173.654);
        // Fpdf::SetFontSize(20);
        // Fpdf:: SetTextColor(0,0,0);
        // Fpdf::Cell(0 , 6.604, "Seyi Onifade", 0, 1, "L"); //true)
        // Fpdf::SetFont('Times', '');
        // Fpdf::SetX(47.244);
        // Fpdf::SetY(181.654);
        // Fpdf::SetFontSize(12);
        // Fpdf:: SetTextColor(0,0,0);
        // Fpdf::Cell(0 , 6.604, "CEO, HNG Internship", 0, 1, "L"); //true)
        Fpdf::SetFont('Times', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(134.654);
        Fpdf::SetFontSize(12);
        Fpdf:: SetTextColor(0,0,0);
        Fpdf::Cell(0 , 7.604, "Supported By:", 0, 1, "L"); //true)
        Fpdf::output();

        exit;
        


        // return view('certificate_fpdf')->with('data',$obj);
        // $fpdf = PDF::loadView('certificate_pdf', $data)->setPaper('A5')->setOrientation('Landscape')->setOption('zoom',1.1);
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
