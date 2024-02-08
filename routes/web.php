<?php

use Illuminate\Routing\CreatesRegularExpressionRouteConstraints;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dahController;
use App\Http\Controllers\coursesController;

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
    return view('welcome');
});

Route::get("/register", [AuthController::class, "register"])->name('register');
Route::post('registeration', [AuthController::class, "signUp"])->name('signup');
Route::get('landingpage', [StudentController::class, "landingPage"])->name('landingpage');
Route::get('login', [loginController::class, "loginPage"])->name('loginpage');
Route::Post('logged', [loginController::class, "login"])->name("log");
Route::get('dashboard', [dahController::class, "see"])->name('dash');
Route::get('course', [coursesController::class, 'kix'])->name('courses');
Route::post('get/course',[coursesController::class,'createCourse'])->name('Createcourse');
Route::get('display/courses',[coursesController::class,'displaycourses'])-> name('displaycourses');
Route::get('admin/dashboard',[dahController::class,'Admindisplay'])-> name('admin_dashboard');
Route::get('edit/courses/display/{courseID}',[coursesController::class,'Editcourses'])->name('edit_courses_display');
Route::put('edit/{courseID}',[coursesController::class,'edit'])->name('Edit_course');
Route::delete('destroy/{courseId}',[coursesController::class,'remove'])->name('destroy_course');