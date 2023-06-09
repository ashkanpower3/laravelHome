<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Course;
use App\Models\Instructor;
use \App\Http\Controllers\courseController;
use \App\Http\Controllers\RegisterController;
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


Route::get('/',[courseController::class, "index"]);

Route::get('course/{course:slug}', [courseController::class, "course_details"]);

Route::get('instructors', function (){
   return view("instructors");
});

Route::get('instructor/{instructor:slug}', function (Instructor $instructor){
    return view("instructor-profile", ['courses'=>$instructor->courses->load('instructor'), "instructor"=>$instructor]);
});


Route::get('login', [RegisterController::class, "login"]);


Route::get("register", [RegisterController::class, "register"]);
Route::post("register", [RegisterController::class, "create_user"]);

//Route::get('redis/{user}', [\App\Http\Controllers\RedisTestController::class, "redis"]);
