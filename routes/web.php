<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

for ($i = 1; $i <= 7; $i++) {
    Route::get("/menu{$i}", function () use ($i) {
        return view("menu{$i}");
    });
}

route::get('/camera', function (){
    return view('camera');
});

route::get('/qr', function (){
    return view('qr');
})->name('qr');

route::post('/storePhoto', [FotoController::class, 'store']);
