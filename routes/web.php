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
    return view('home');
   });

   Route::get('/akademik/id/mahasiswa', function () {
    $dtMahasiswa = ["Mario Mario", "Luigi Mario", "Peach Toadstool", "Daisy", "T.
   Yoshisaur Munchakoopas"];
    return view('mahasiswa')->with('dtMahasiswa', $dtMahasiswa);
   })->name('mahasiswa');
   Route::get('dosen', function () {
    $dtDosen = ["King Bowser Koopa", "Jimmy Poppadopolos", "Wario Scapelli",
   "Donkey Kong", "Koopa Junior"];
    return view('dosen')->with('dtDosen', $dtDosen);
   });
   Route::get('/', function () {
    $dtProduct = [
        ['id'=>'BD001', 'name'=>'SanDisk SSD 1 TB', 'price'=>'1500000', 'stock'=> '132', 'photo'=>'img/sandisk_ssd.jpg'],
        ['id'=>'BD002', 'name'=>'Logitech Mouse', 'price'=>'98500', 'stock'=> '9', 'photo'=>'img/logitech_mouse.png'],
        ['id'=>'BD003', 'name'=>'Casio Calculator', 'price'=>'120000', 'stock'=> '24', 'photo'=>'img/casio.jpg'],
        ['id'=>'BD004', 'name'=>'LG Monitor 24"', 'price'=>'1345000', 'stock'=> '9', 'photo'=>'img/lg_monitor.jpg'],
        ['id'=>'BD005', 'name'=>'Insignia Wireless Keyboard + Mouse', 'price'=>'375000', 'stock'=> '10',
        'photo'=>'img/insignia_wireless.jpg'],
        ['id'=>'BD006', 'name'=>'Fifine K678 Microphone', 'price'=>'567000', 'stock'=> '30',
        'photo'=>'img/fifine_microphone.jpg'],
        ];
    return view('master')->with('dtProduct', $dtProduct);
   });

