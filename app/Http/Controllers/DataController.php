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

        // Fpdf::MakeFont('fonts/Lato-Regular.ttf');
        Fpdf::AddFont('lato','','Lato-Regular.php');
        Fpdf::AddFont('lato','B','Lato-Bold.php');
        Fpdf::AddFont('roboto','','Roboto-Regular.php');
        Fpdf::AddFont('roboto','B','Roboto-Bold.php');




        Fpdf::Image('images/bg2.png',0,0);
        // Fpdf::Image('images/bg.png',40,3,30, 27);
        // Fpdf::Image('images/bg.png',77,3,30, 27);
        // Fpdf::Image('images/bg.png',114,3,30, 27);
        // Fpdf::Image('images/bg.png',151,3,30, 27);
        // Fpdf::Image('images/bg.png',188,3,30, 27);
        // Fpdf::Image('images/bg.png',225,3,30, 27);
        // Fpdf::Image('images/bg.png',262,3,30, 27);
        // Fpdf::Image('images/bg.png',3,33,30,27);
        // Fpdf::Image('images/bg.png',40,33,30, 27);
        // Fpdf::Image('images/bg.png',77,33,30, 27);
        // Fpdf::Image('images/bg.png',114,33,30, 27);
        // Fpdf::Image('images/bg.png',151,33,30, 27);
        // Fpdf::Image('images/bg.png',188,33,30, 27);
        // Fpdf::Image('images/bg.png',225,33,30, 27);
        // Fpdf::Image('images/bg.png',262,33,30, 27);
        // Fpdf::Image('images/bg.png',3,63,30,27);
        // Fpdf::Image('images/bg.png',40,63,30, 27);
        // Fpdf::Image('images/bg.png',77,63,30, 27);
        // Fpdf::Image('images/bg.png',114,63,30, 27);
        // Fpdf::Image('images/bg.png',151,63,30, 27);
        // Fpdf::Image('images/bg.png',188,63,30, 27);
        // Fpdf::Image('images/bg.png',225,63,30, 27);
        // Fpdf::Image('images/bg.png',262,63,30, 27);
        // Fpdf::Image('images/bg.png',3,93,30,27);
        // Fpdf::Image('images/bg.png',40,93,30, 27);
        // Fpdf::Image('images/bg.png',77,93,30, 27);
        // Fpdf::Image('images/bg.png',114,93,30, 27);
        // Fpdf::Image('images/bg.png',151,93,30, 27);
        // Fpdf::Image('images/bg.png',188,93,30, 27);
        // Fpdf::Image('images/bg.png',225,93,30, 27);
        // Fpdf::Image('images/bg.png',262,93,30, 27);
        // Fpdf::Image('images/bg.png',3,123,30,27);
        // Fpdf::Image('images/bg.png',40,123,30, 27);
        // Fpdf::Image('images/bg.png',77,123,30, 27);
        // Fpdf::Image('images/bg.png',114,123,30, 27);
        // Fpdf::Image('images/bg.png',151,123,30, 27);
        // Fpdf::Image('images/bg.png',188,123,30, 27);
        // Fpdf::Image('images/bg.png',225,123,30, 27);
        // Fpdf::Image('images/bg.png',262,123,30, 27);

        // Fpdf::Image('images/bg.png',3,153,30,27);
        // Fpdf::Image('images/bg.png',40,153,30, 27);
        // Fpdf::Image('images/bg.png',77,153,30, 27);
        // Fpdf::Image('images/bg.png',114,153,30, 27);
        // Fpdf::Image('images/bg.png',151,153,30, 27);
        // Fpdf::Image('images/bg.png',188,153,30, 27);
        // Fpdf::Image('images/bg.png',225,153,30, 27);
        // Fpdf::Image('images/bg.png',262,153,30, 27);
        // Fpdf::Image('images/bg.png',3,183,30,27);
        // Fpdf::Image('images/bg.png',40,183,30, 27);
        // Fpdf::Image('images/bg.png',77,183,30, 27);
        // Fpdf::Image('images/bg.png',114,183,30, 27);
        // Fpdf::Image('images/bg.png',151,183,30, 27);
        // Fpdf::Image('images/bg.png',188,183,30, 27);
        // Fpdf::Image('images/bg.png',225,183,30, 27);
        // Fpdf::Image('images/bg.png',262,183,30, 27);
        // Fpdf::Image('images/bg.png',3,213,30,27);
        // Fpdf::Image('images/bg.png',40,213,30, 27);
        // Fpdf::Image('images/bg.png',77,213,30, 27);
        // Fpdf::Image('images/bg.png',114,213,30, 27);
        // Fpdf::Image('images/bg.png',151,213,30, 27);
        // Fpdf::Image('images/bg.png',188,213,30, 27);
        // Fpdf::Image('images/bg.png',225,213,30, 27);
        // Fpdf::Image('images/bg.png',262,213,30, 27);
        // Fpdf::Image('images/bg.png',3,243,30,27);
        // Fpdf::Image('images/bg.png',40,243,30, 27);
        // Fpdf::Image('images/bg.png',77,243,30, 27);
        // Fpdf::Image('images/bg.png',114,243,30, 27);
        // Fpdf::Image('images/bg.png',151,243,30, 27);
        // Fpdf::Image('images/bg.png',188,243,30, 27);
        // Fpdf::Image('images/bg.png',225,243,30, 27);
        // Fpdf::Image('images/bg.png',262,243,30, 27);
        // Fpdf::Image('images/bg.png',3,273,30,27);
        // Fpdf::Image('images/bg.png',40,273,30, 27);
        // Fpdf::Image('images/bg.png',77,273,30, 27);
        // Fpdf::Image('images/bg.png',114,273,30, 27);
        // Fpdf::Image('images/bg.png',151,273,30, 27);
        // Fpdf::Image('images/bg.png',188,273,30, 27);
        // Fpdf::Image('images/bg.png',225,273,30, 27);
        // Fpdf::Image('images/bg.png',262,273,30, 27);

        Fpdf::SetFont('roboto', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(30.654);
        Fpdf::SetFontSize(10);
        //Fpdf:: SetFillColor(255,0,0);
        Fpdf::MultiCell(0 , 4, "HNG Internship has confirmed the participation of this individual in", 0,  "R"); //true);

        Fpdf::SetFont('roboto', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(35.654);
        Fpdf::SetFontSize(10);
        //Fpdf:: SetFillColor(255,0,0);
        Fpdf::MultiCell(0 , 4, "this program. Confirm at " . $link, 0,  "R"); //true);

        Fpdf::SetFont('lato', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(30.654);
        Fpdf::SetFontSize(40);
        Fpdf:: SetTextColor(8,68,130);
        Fpdf::Cell(0 , 6.604, "CERTIFICATE", 0, 1, "L"); //true)
        Fpdf::SetFont('lato', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(45.654);
        Fpdf::SetFontSize(30);
        Fpdf:: SetTextColor(255,168,0);
        Fpdf::Cell(0 , 6.604, "OF COMPLETION", 0, 1, "L"); //true)
        Fpdf::SetFont('roboto', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(65.654);
        Fpdf::SetFontSize(12);
        Fpdf:: SetTextColor(0,0,0);
        Fpdf::Cell(0 , 6.604, "This is to certify that", 0, 1, "L"); //true)
        Fpdf::SetFont('lato', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(75.654);
        Fpdf::SetFontSize(25);
        //Fpdf:: SetFillColor(255,0,0);
        Fpdf::Cell(0 , 6.604, "$name", 0, 1, "L"); //true)
        Fpdf::SetFont('roboto', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(85.654);
        Fpdf::SetFontSize(12);
        //Fpdf:: SetFillColor(255,0,0);
        Fpdf::Cell(0 , 6.604, "has successfully completed", 0, 1, "L"); //true)
        Fpdf::SetFont('lato', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(100.654);
        Fpdf::SetFontSize(24);
        Fpdf:: SetTextColor(8,68,130);
        Fpdf::MultiCell(0 , 8.604, "Startdotng (Beginner Software", 0,  "L"); //true)
        Fpdf::SetFont('lato', 'B');
        Fpdf::SetX(47.244);
        Fpdf::SetY(109.654);
        Fpdf::SetFontSize(24);
        Fpdf:: SetTextColor(8,68,130);
        Fpdf::MultiCell(0 , 8.604, "Development Training)", 0,  "L"); //true)


        Fpdf::SetFont('roboto', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(124.654);
        Fpdf::SetFontSize(12);
        Fpdf:: SetTextColor(0,0,0);
        Fpdf::Cell(0 , 6.604, "with $grade on 9th September, 2019", 0, 1, "L"); //true)
        //Seal Image goes here
        Fpdf::Image('images/seal.png',200, 49.926, 59.434, 72.926);
        Fpdf::Image('images/hng.png',12, 196,10, 9);
        Fpdf::Image('images/hotels.png',32, 195, 30, 11);
        Fpdf::Image('images/ondo.png',72, 197, 25, 9);
        Fpdf::Image('images/flutterwave.png',107, 197, 35, 9);
        Fpdf::Image('images/chatdesk.png',152, 196, 35, 8);
        Fpdf::Image('images/ekiti.jpg',197, 196, 11, 8);
        Fpdf::Image('images/imo.jpg',218, 196, 11, 8);
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
        Fpdf::SetFont('roboto', '');
        Fpdf::SetX(47.244);
        Fpdf::SetY(181.654);
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
