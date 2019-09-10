<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/certification', 'DataController@index');

Route::post('/certification', 'DataController@certificate');

Route::get('/certification/{slug}', function($slug) {
    
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

    return view('certificate')->with('name',$obj);
});

Route::get('/verify/{verify_id}', 'DataController@verify');

Route::get('/certification/{slug}/download', "DataController@exportPDF");

Route::get('/certificate/{slug}/download', "DataController@export");

Route::get('/pdf/{slug}', function($slug) {
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

    return view('certificate')->with('name',$obj);
});
