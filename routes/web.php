<?php

//logout
Route::get('/logout', 'AdminController@logout');

//student login
Route::get('/', function () {
    return view('student_login');
});

//admin login
Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::get('/admin_dashborad', 'AdminController@admin_dashboard');

//add teacher
Route::get('/addteachers', 'add_teachers@addteachers');
Route::post('/save_teachers', 'add_teachers@save_teachers');

//view all teacher
Route::get('/allteachers', 'allteachers@allteachers');
//teacher_edit
Route::get('/teacher_edit/{id}', 'edit_teachers@edit_teachers');
Route::post('/update_teachers/{id}', 'edit_teachers@update_teachers');
//teacher_delete
Route::get('/teacher_delete/{id}', 'delete_teachers@teacher_delete');
Route::post('/update_teachers/{id}', 'edit_teachers@update_teachers');

//student insert addstudents_day
Route::get('/addstudents_day', 'students@day_batch');
Route::post('/save_students', 'students@save_students_day');

