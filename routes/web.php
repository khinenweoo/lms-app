<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Instructor\InstructorController;


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

Auth::routes();


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});


Route::prefix('user')->name('user.')->group(function(){
	Route::middleware(['guest:web', 'prevent-back-history'])->group(function(){
		Route::view('/login','front.user.auth.login')->name('login');
		Route::view('/signup', 'front.user.auth.signup')->name('signup');
		Route::post('/create',[UserController::class, 'create'])->name('create');
		Route::post('/check',[UserController::class, 'check'])->name('check');
	});
	Route::middleware(['auth:web', 'prevent-back-history'])->group(function(){
		Route::view('/home', 'front.user.home')->name('home');
		Route::post('/logout', [UserController::class,'logout'])->name('logout');
	});
});

Route::prefix('admin')->name('admin.')->group(function(){

	Route::middleware(['guest:admin', 'prevent-back-history'])->group(function(){
		Route::view('/login','back.admin.auth.login')->name('login');
		Route::post('/check',[AdminController::class, 'check'])->name('check');
	});

	Route::middleware(['auth:admin', 'prevent-back-history'])->group(function(){
		Route::view('/dashboard', 'back.admin.dashboard')->name('dashboard');
		Route::post('/logout', [AdminController::class,'logout'])->name('logout');
	});
});

Route::prefix('instructor')->name('instructor.')->group(function(){

	Route::middleware(['guest:instructor', 'prevent-back-history'])->group(function(){
		Route::view('/login','back.instructor.auth.login')->name('login');
		Route::view('/signup', 'back.instructor.auth.signup')->name('signup');
		Route::post('/check',[InstructorController::class, 'check'])->name('check');
		Route::post('/create',[InstructorController::class, 'create'])->name('create');

	});

	Route::middleware(['auth:instructor', 'prevent-back-history'])->group(function(){
		Route::view('/dashboard', 'back.instructor.dashboard')->name('dashboard');
		Route::post('/logout', [InstructorController::class,'logout'])->name('logout');
	});
});
