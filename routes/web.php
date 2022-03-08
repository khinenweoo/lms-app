<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Instructor\InstructorController;

use App\Http\Livewire\Admin\CategoryComponent;
use App\Http\Livewire\Admin\InstructorList;
use App\Http\Livewire\Admin\AddInstructor;
use App\Http\Livewire\Admin\UpdateInstructor;


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

Route::view('/courses', 'courses')->name('courses');
Route::view('/student_dashboard', 'student_dashboard')->name('student_dashboard');
Route::view('/course-details', 'course-details')->name('course-details');

Auth::routes();


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::prefix('user')->name('user.')->group(function(){
	Route::middleware(['guest:web', 'prevent-back-history'])->group(function(){
		Route::view('/login','front.user.auth.login')->name('login');
		Route::view('/signup', 'front.user.auth.signup')->name('signup');
		Route::post('/create',[AuthController::class, 'create'])->name('create');
		Route::post('/check',[AuthController::class, 'check'])->name('check');
	});
	Route::middleware(['auth:web', 'prevent-back-history'])->group(function(){
		Route::view('/home', 'front.user.home')->name('home');
		Route::post('/logout', [AuthController::class,'logout'])->name('logout');


		Route::get('profile', [ProfileController::class,'edit'])->name('profile');
		Route::put('profile', [ProfileController::class, 'update'])->name('updateprofile');
		Route::put('profile/password', [ProfileController::class, 'password'])->name('password');
		
		// Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
		// Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\User\ProfileController@password']);
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

		 /*--------------- CATEGORIES ------------------*/
		Route::get('/categories', CategoryComponent::class)->name('categories');

		 /*--------------- INSTRUCTORS ------------------*/
		Route::get('/instructors', InstructorList::class)->name('instructors');
		Route::get('/instructor/add', AddInstructor::class)->name('instructor.add');
		Route::get('/instructor/edit/{instructor_id}', UpdateInstructor::class)->name('instructor.edit');
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
