<?php
Route::view('/', 'welcome');

// Authuntication routes ......

// Route::group(['middleware' => 'prevent-back-history'],function(){
//     Auth::routes();
//     Auth::logout();
//     Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
//     Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm')->name('login.writer');
//     Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
//     Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm')->name('register.writer');

//     Route::post('/login/admin', 'Auth\LoginController@adminLogin');
//     Route::post('/login/writer', 'Auth\LoginController@writerLogin');
//     Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
//     Route::post('/register/writer', 'Auth\RegisterController@createWriter')->name('register.writer');

//   });

Auth::routes();
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm')->name('login.writer');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm')->name('register.writer');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter')->name('register.writer');

Route::view('/home', 'home')->middleware('auth');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});
Route::group(['middleware' => 'prevent-back-history'], function () {
    Route::view('/writer', 'writer');
});

// Route::group(['middleware' => 'auth:writer'], function () {
//     Route::view('/writer', 'writer');
// });

// Doctor routes ......
Route::get('doctor_show','DoctorController@show');
Route::get('doctor_create','DoctorController@create');
Route::post('doctor_submit','DoctorController@store');
Route::get('doctor_delete/{id}','DoctorController@destroy');  
Route::get('doctor_update/{id}','DoctorController@edit');
Route::post('doctor_update/{id}','DoctorController@update');

// ward routes ......
Route::get('ward_show','WardController@show');
Route::get('ward_create','WardController@create');
Route::post('ward_submit','WardController@store');
Route::get('ward_update/{id}','WardController@edit');
Route::post('ward_update/{id}','WardController@update');
Route::get('ward_delete/{id}','WardController@destroy');  

// ward routes ......
Route::get('patient_show','PatientController@show');
Route::get('patient_create','PatientController@create');
Route::post('patient_submit','PatientController@store');
Route::get('patient_delete/{id}','PatientController@destroy');
Route::get('patient_update/{id}','PatientController@edit');
Route::post('patient_update/{id}','PatientController@update');

// Department routes ......
Route::get('department', 'DepartmentController@index');
Route::post('dep_submit','DepartmentController@store');
Route::get('department','DepartmentController@show');
Route::get('dept_delete/{id}','DepartmentController@destroy');
Route::get('dept_update/{id}','DepartmentController@edit');

// appointment routes ......
Route::get('apointment','ApointmentController@show');
Route::get('create_apoint','ApointmentController@create');
Route::post('apoint_submit','ApointmentController@store');
Route::get('apointment_update/{id}','ApointmentController@edit');
Route::post('apoint_update/{id}','ApointmentController@update');
Route::get('apointment_delete/{id}','ApointmentController@destroy');  

// thems........
Route::view('profile', 'profile');
Route::view('map', 'googlemap');
Route::view('postwelcome', 'postwelcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
