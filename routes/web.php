<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\HomeController;

use App\Http\Livewire\Admin\CategoryList;
use App\Http\Livewire\Admin\InstructorList;
use App\Http\Livewire\Admin\UpdateInstructor;
use App\Http\Livewire\Admin\CourseList;
use App\Http\Livewire\Admin\AddInstructor;
use App\Http\Livewire\Admin\AddCourse;
use App\Http\Livewire\Admin\EditCourse;
use App\Http\Livewire\Admin\LessonList;

use App\Http\Livewire\Admin\AdminProfile;
use App\Http\Livewire\Admin\UpdateProfile;
use App\Http\Livewire\Admin\StudentList;
use App\Http\Livewire\Admin\Editstudent;
use App\Http\Livewire\Admin\EnrolledStudent;


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

Route::view('/courses', 'courses')->name('courses');
Route::view('/student_dashboard', 'student_dashboard')->name('student_dashboard');
Route::view('/course-details', 'course-details')->name('course-details');

Auth::routes();

Route::group(['middleware' => 'web'], function () {
	/*--------------- FRONT ROUTES ------------------*/
    Route::get('/', 'App\Http\Controllers\ViewHomepageController@index')->name('home');
});


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

	});
});

Route::prefix('admin')->name('admin.')->group(function(){

	Route::middleware(['guest:admin', 'prevent-back-history'])->group(function(){
		Route::view('/','back.admin.auth.login');
		Route::view('/login','back.admin.auth.login')->name('login');
		Route::post('/check',[AdminController::class, 'check'])->name('check');
	});

	Route::middleware(['auth:admin', 'prevent-back-history'])->group(function(){
		Route::view('/dashboard', 'back.admin.dashboard')->name('dashboard');
		Route::post('/logout', [AdminController::class,'logout'])->name('logout');
        Route::get('/profile', AdminProfile::class)->name('profile');
        Route::get('/edit/{admin_id}', UpdateProfile::class)->name('edit');


		 /*--------------- CATEGORIES ------------------*/
		Route::get('/categories', CategoryList::class)->name('categories');

		 /*--------------- INSTRUCTORS ------------------*/
		Route::get('/instructors', InstructorList::class)->name('instructors');
		Route::get('/instructor/create', AddInstructor::class)->name('instructor.add');
		Route::get('/instructor/edit/{instructor_id}', UpdateInstructor::class)->name('instructor.edit');
		// Route::post('/upload', [AdminController::class, 'imgupload'])->name('imgupload');

		/*--------------- COURSES ------------------*/
		Route::get('/courses', CourseList::class)->name('courses');
		Route::get('/course/create', AddCourse::class)->name('course.add');
		Route::get('/course/edit/{course_slug}', EditCourse::class)->name('course.edit');

        /*--------------- STUDENTS ------------------*/
		Route::get('/students', StudentList::class)->name('students');
		Route::get('/student/edit/{student_id}', EditStudent::class)->name('student.edit');

 		/*--------------- LESSONS ------------------*/
		 Route::get('/lessons', LessonList::class)->name('lessons');


		Route::get('/enrolledstudents', EnrolledStudent::class)->name('enrolledstudents');
	});
});

Route::prefix('instructor')->name('instructor.')->group(function(){

	Route::middleware(['guest:instructor', 'prevent-back-history'])->group(function(){
		Route::view('/','back.instructor.auth.login');
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
