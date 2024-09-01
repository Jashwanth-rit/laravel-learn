<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return [[
        'name'=>'jk',
        'num'=>1234
    ],
    [
        'name'=>'jk',
        'num'=>1234
    ]
];
});

//GETTING DATA FROM DATA BASE THROUGH API ROUTING

Route::get('getproducts',[UserController::class,'getproducts']);

//ADDING DATA FROM API-INPUT TO DATABASE OR FROM API RESPONSE TO DATABASE

Route::post('postproducts', [UserController::class, 'postproducts']);

//update DATA FROM API-INPUT TO DATABASE OR FROM API RESPONSE TO DATABASE

Route::put('update', [UserController::class, 'update']);

//delete DATA FROM API-INPUT TO DATABASE OR FROM API RESPONSE TO DATABASE

Route::delete('delete/{id}', [UserController::class, 'delete']);



