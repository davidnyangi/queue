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


Route::get('dashboard', 'StaffDashboard@homepage');
Route::get('/', 'LoginController@getHomepage');
Route::get('calls', 'StaffDashboard@callPatient');
Route::get('waitingpatients', 'StaffDashboard@queuedpatients');
Route::get('waiting_private_patients', 'StaffDashboard@queuedppatients');
Route::get('waiting_standard_patients', 'StaffDashboard@queuedspatients');
Route::get('display', 'StaffDashboard@display');
Route::get('displayent', 'StaffDashboard@display');
Route::get('displayeye', 'StaffDashboard@displayeye');
Route::get('addparams', 'StaffDashboard@addparameters');
Route::get('setparams', 'StaffDashboard@setparameters');
 // Route::post('search',array('as'=>'saveQueue','uses'=>'StaffDashboard@addQueue'));
 //Route::post('saveQueue','StaffDashboard@addQueue');
Route::post('savequeuename','StaffDashboard@savequeues');
Route::post('login','LoginController@login');
Route::post('savequeuetoroom','StaffDashboard@assignqueuetoroom');
Route::post('savescreenname','StaffDashboard@savescreens');
Route::post('saveroomname','StaffDashboard@saverooms');
Route::post('assignqueue','StaffDashboard@assignpatienttoqueue');
Route::post('getqueuesperroom','StaffDashboard@getroomsqueue');
Route::post('savequeuetoscreen','StaffDashboard@setDefaultDisplayQueue');
Route::post('savequeuetodept','StaffDashboard@assignqueuetodepts');
Route::get('admin', function () {
    return view('dashboard_admin');
});
Route::get('saveQueue','StaffDashboard@addQueue');
Route::get('logout', 'LoginController@getLogout');