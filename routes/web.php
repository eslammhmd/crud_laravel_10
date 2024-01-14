<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::fallback(function () {
    abort(404);
});


// Route::group(['prefix' => 'crud'], function () {
//     Route::get('/', [CrudController::class, 'index']);
//     Route::get('/fetch/{id?}', [CrudController::class, 'fetch']);
//     Route::post('/store', [CrudController::class, 'store']);
//     Route::put('/update/{id}', [CrudController::class, 'update']);
//     Route::delete('/destroy/{id}', [CrudController::class, 'destroy']);
// });

// Route::get('/http',UserController::class);

//use resource to access data
Route::resource('products', ProductController::class);