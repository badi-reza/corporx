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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[\App\Http\Controllers\IndexController::class,'index'])->name('homepage');
Route::get('/home_page2',[\App\Http\Controllers\Index2Controller::class,'index2'])->name('homepage2');
Route::get('/home_page3',[\App\Http\Controllers\Index3Controller::class,'index3'])->name('homepage3');
Route::get('/home_page4',[\App\Http\Controllers\Index4Controller::class,'index4'])->name('homepage4');
Route::get('/home_page5',[\App\Http\Controllers\Index5Controller::class,'index5'])->name('homepage5');
Route::get('/home_page6',[\App\Http\Controllers\Index6Controller::class,'index6'])->name('homepage6');
Route::get('/home_page7',[\App\Http\Controllers\Index7Controller::class,'index7'])->name('homepage7');
Route::get('/detail',[\App\Http\Controllers\IndexDetailController::class,'indexDetail'])->name('detail');
Route::get('/about',[\App\Http\Controllers\AboutUsController::class,'indexAboutUs'])->name('about');
Route::get('/contact',[\App\Http\Controllers\ContactUsController::class,'indexContact'])->name('contact');
Route::get('/map',[\App\Http\Controllers\GmapController::class,'indexMap'])->name('map');
Route::get('/project',[\App\Http\Controllers\ProjectController::class,'indexProject'])->name('project');
Route::get('/service',[\App\Http\Controllers\ServiceController::class,'indexService'])->name('service');


Route::middleware('auth')->prefix('/adminstrator')->group(function (){
    Route::get('/admin',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
    Route::resource('/setting' , \App\Http\Controllers\SettingController::class);
    Route::resource('/hero' , \App\Http\Controllers\HeroController::class);
    Route::resource('/check' , \App\Http\Controllers\CheckController::class);
    Route::resource('/about' , \App\Http\Controllers\AboutController::class);
    Route::resource('/comment' , \App\Http\Controllers\CommentController::class);
    Route::resource('/product' , \App\Http\Controllers\ProductController::class);
});

Route::post('/insertContact',[\App\Http\Controllers\CommentController::class,'store'])->name('contact.date');

