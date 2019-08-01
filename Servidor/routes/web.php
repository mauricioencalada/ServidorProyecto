<?php

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
//CRUD User
Route::get('/user', 'UserController@getUser');
Route::post('/user', 'UserController@postUser');
Route::put('/user', 'UserController@putUser');
Route::delete('/user', 'UserController@deleteUser');


//CRUD Student
Route::get('/student', 'StudentController@getStudent');
Route::post('/student', 'StudentController@postStudent');
Route::put('/student', 'StudentController@putStudent');
Route::delete('/student', 'StudentController@deleteStudent');

//CRUD Teacher
Route::get('/teacher', 'TeacherController@getTeacher');
Route::post('/teacher', 'TeacherController@postTeacher');
Route::put('/teacher', 'TeacherController@putTeacher');
Route::delete('/teacher', 'TeacherController@deleteTeacher');


//CRUD proyect
Route::get('/proyect', 'ProyectController@getProyect');
Route::post('/proyect', 'ProyectController@postProyect');
Route::put('/proyect', 'ProyectController@putProyect');
Route::delete('/proyect', 'ProyectController@deleteProyect');

//CRUD Form
Route::get('/form', 'FormController@getForm');
Route::post('/form', 'FormController@postForm');
Route::put('/form', 'FormController@putForm');
Route::delete('/form', 'FormController@deleteForm');


//CRUD Qualificationses
Route::get('/qualification', 'QualificationController@getQualification');
Route::post('/qualification', 'QualificationController@postQualification');
Route::put('/qualification', 'QualificationController@putQualification');
Route::delete('/qualification', 'QualificationController@deleteQualification');
