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
Route::get('calls/{pid}', 'StaffDashboard@callPatients');
Route::get('waitingpatients', 'StaffDashboard@queuedpatients');
Route::get('waiting_private_patients', 'StaffDashboard@queuedppatients');
Route::get('waiting_standard_patients', 'StaffDashboard@queuedspatients');
Route::get('display', 'StaffDashboard@display');
Route::get('displayent', 'StaffDashboard@display');
Route::get('displayeye', 'StaffDashboard@displayeye');
Route::get('addparams', 'StaffDashboard@addparameters');
Route::get('setparams', 'StaffDashboard@setparameters');
Route::post('savequeuename','StaffDashboard@savequeues');
Route::post('login','LoginController@login');
Route::post('savequeuetoroom','StaffDashboard@assignqueuetoroom');
Route::post('savescreenname','StaffDashboard@savescreens');
Route::post('saveroomname','StaffDashboard@saverooms');
Route::get('tabular_reports_seen','ReportsController@getTables');
Route::get('graphical_reports','ReportsController@getGraphs');
Route::post('assignqueue','StaffDashboard@assignpatienttoqueue');
Route::post('getqueuesperroom','StaffDashboard@getroomsqueue');
Route::post('savequeuetoscreen','StaffDashboard@setDefaultDisplayQueue');
//Route::post('getQueues',array('as'=>'getQueues','uses'=>'StaffDashboard@fetch'));
Route::get('getQueues/{id}','StaffDashboard@fetch');
Route::get('add_patient_to_queue/{pid}','StaffDashboard@add');
Route::post('updateCalledPatient',array('as'=>'updateCalledPatient','uses'=>'StaffDashboard@updateCallingStatus'));
Route::post('filterpatients',array('as'=>'filterpatients','uses'=>'StaffDashboard@filterPatients'));
Route::post('updateCalledPatientStatus',array('as'=>'updateCalledPatientStatus','uses'=>'StaffDashboard@updateCallingStatus'));
Route::post('savequeuetodept','StaffDashboard@assignqueuetodepts');
Route::get('admin', function () {
    return view('dashboard_admin');
});
Route::get('saveQueue','StaffDashboard@addQueue');
Route::get('logout', 'LoginController@getLogout');