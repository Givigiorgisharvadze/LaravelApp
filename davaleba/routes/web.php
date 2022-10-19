<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/', function($saxeli = "Giorgi")){

    return $saxeli

}
Route::get('/', function($gvari = 'Sharvadze')){

    return $gvari

}

Route::get('/', function($asaki='18')){

    return $asaki

}

Route::get('/', function($hobby='mathemtika')){

    return $hobby

}

Route::get('/', function($sacxovrebeli='tbilsi')){

    return $sacxovrebeli

}

Route::post('/', function($array = array("mesiji" => "წარმატებით განახლდა"))){

    return json_encode($array)

}

Route::put('/', function($array = array("mesiji" => "წარმატებით დაემატა"))){

    return json_encode($array)

}

Route::delete('/', function($array = array("მესიჯი" => "წარმატებით წაიშალა"))){

    return json_encode($array)

}