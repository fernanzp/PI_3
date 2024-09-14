<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function(){
//     return "waaaza";
// });

// // Route::get('/post/{id}', function($id){
// //     return "This is post number " . $id;
// // });
// Route::get('/post/{id}/{cat?}', function($id, $cat=null){
//     if($cat){
//         return "This is post number " . $id . " in category " . $cat;
//     }else{
//         return "This is post number " . $id;
//     }
// });


Route::get('/', HomeController::class);

Route::get('/login', [HomeController::class, 'login_register']);

Route::get('/numero/{numero}', [HomeController::class, 'numero']);