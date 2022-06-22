<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;



route::group(['middleware'=> ['web','auth']], function(){
   
    
    Route::get('/',[PagesController::class,'getIndex']);
    Route::get('about',[PagesController::class,'getABout']);
    Route::get('contact',[PagesController::class,'getContact']);
    
    Route::resource('posts',PostController::class);

    Route::get('blog/{slug}',[BlogController::class,'getSingle']);
    
    Route::get('blog',[BlogController::class,'getIndex'])
    ->name('blog');


    Route::resource('categories',CategoryController::class);
    

});
// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
