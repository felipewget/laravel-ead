<?php

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
|
|
|
|
|
|--------------------------------------------------------------------------
| Panel Admin
|--------------------------------------------------------------------------
|
*/

Route::group(['prefix' => 'panel', 'namespace' => 'Panel'], function(){
	Route::get('/login', 'LoginController@login')->name("login");
});

Route::group(['prefix' => 'panel', 'namespace' => 'Panel'], function(){
// Route::group(['prefix' => 'panel', 'namespace' => 'Panel', 'middleware' => 'auth'], function(){

	// Dashboard
	Route::get('/', 'DashboardController@index');
	Route::get('/dashboard', 'DashboardController@index');

	// Courses
	Route::get('/courses', 'CourseController@index')->name('panel.course.index');
	Route::get('/course/add', 'CourseController@create')->name('panel.course.create');
	Route::get('/course/{id}/edit', 'CourseController@edit')->name('panel.course.edit');
	Route::post('/course/add', 'CourseController@store')->name('panel.course.store');
	Route::put('/course/{id}/edit', 'CourseController@update')->name('panel.course.update');
	Route::delete('/course/{id}', 'CourseController@destroy')->name('panel.course.destroy');
	
	// Modules
	Route::get('/course/{idCourse}/modules', 'ModuleController@index')->name('panel.module.index');
	Route::get('/course/{idCourse}/module/add', 'ModuleController@create')->name('panel.module.create');
	Route::get('/course/{idCourse}/module/{idModule}/edit', 'ModuleController@edit')->name('panel.module.edit');
	Route::post('/course/{idCourse}/module/add', 'ModuleController@store')->name('panel.module.store');
	Route::put('/course/{idCourse}/module/{idModule}/edit', 'ModuleController@update')->name('panel.module.update');
	Route::delete('/course/{idCourse}/module/{idModule}', 'ModuleController@destroy')->name('panel.module.destroy');

	// Lesson
	Route::get('/course/{idCourse}/module/{idModule}/lessons', 'LessonController@index')->name('panel.lesson.index');
	Route::get('/course/{idCourse}/module/{idModule}/lesson/add', 'LessonController@create')->name('panel.lesson.create');
	Route::get('/course/{idCourse}/module/{idModule}/lesson/{idLesson}/edit', 'LessonController@add')->name('panel.lesson.edit');
	Route::post('/course/{idCourse}/module/{idModule}/lesson/add', 'ModuleController@store')->name('panel.lesson.store');
	Route::put('/course/{idCourse}/module/{idModule}/lesson/{idLesson}/edit', 'ModuleController@update')->name('panel.lesson.update');
	Route::delete('/course/{idCourse}/module/{idModule}/lesson/{idLesson}', 'ModuleController@destroy')->name('panel.lesson.destroy');

	// Classroom
	Route::get('/teams', 'ClassroomController@index')->name('panel.team.index');
	Route::get('/team/add', 'ClassroomController@create')->name('panel.team.create');
	Route::get('/team/{id}/edit', 'ClassroomController@edit')->name('panel.team.edit');
	Route::post('/team/add', 'ClassroomController@store')->name('panel.team.store');
	Route::put('/team/{id}/edit', 'ClassroomController@update')->name('panel.team.update');
	Route::delete('/teams/{id}', 'ClassroomController@destroy')->name('panel.team.destroy');

	// Students
	Route::get('/students', 'StudentController@index')->name('panel.student.index');;
	Route::get('/student/add', 'StudentController@create')->name('panel.student.create');;
	Route::get('/student/{id}/edit', 'StudentController@edit')->name('panel.student.edit');
	Route::post('/student/add', 'StudentController@store')->name('panel.student.store');
	Route::put('/student/{id}/edit', 'StudentController@update')->name('panel.student.update');
	Route::delete('/student/{id}', 'StudentController@destroy')->name('panel.student.destroy');

	// ADMINS ACCOUNTS
	Route::get('/accounts', 'AccountController@index')->name('panel.account.index');;
	Route::get('/account/add', 'AccountController@create')->name('panel.account.create');
	Route::get('/account/{id}/edit', 'AccountController@edit')->name('panel.account.edit');
	Route::post('/account/add', 'AccountController@store')->name('admin.account.create');
	Route::put('/account/{id}/edit', 'AccountController@update')->name('admin.account.update');
	Route::delete('/account/{id}', 'AccountController@destroy')->name('panel.account.destroy');

});


/*
|--------------------------------------------------------------------------
| Student Area
|--------------------------------------------------------------------------
|
*/

// ->middleware('auth');
Route::group(['namespace' => 'Student'], function(){

	Route::post('/login', function(){
		return view('student/dashboard');
	})->name("student.login");

	Route::get('/dashboard', function(){
		return view('student/dashboard');
	})->name("student.dashboard");

	Route::get('/classroom/{idCourse}/{idLesson?}', function(){
		return view('student/lesson');
	})->name("student.classroom");

});


/*
|--------------------------------------------------------------------------
| Public Area
|--------------------------------------------------------------------------
|
*/

Route::group(['namespace' => 'Site'], function(){
	Route::get('/', 'SiteController@index');
	Route::get('/login', 'SiteController@login');
});

