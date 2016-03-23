<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('test', function() {
	$string = "Last: Latitude = 00 00 00.00NWFDFDFD Longitude = 000 00 00.00E,Speed = 0Km/h,2016-03-13,16:10";
	$pattern = "/Latitude = ([\d\s.]+)/";
	preg_match_all($pattern, $string, $matches);

	die(var_dump(trim($matches[1][0])));
});

Route::post('login', 'LoginController@login');

Route::group(['middleware' => ['user']], function() {
	Route::get('/', function () {
    	return view('monitor');
	});
	Route::resource('client', 'ClientController');
	Route::resource('monitor', 'MonitorController');
	Route::resource('mileage-report', 'MileageReportController');
	Route::resource('overspeed-details', 'OverspeedDetailsController');
	Route::resource('stay-details', 'StayDetailsController');
	Route::resource('old-details', 'OldDetailsController');
	Route::resource('acc-report', 'AccReportsController');
	Route::resource('alarm-overview', 'AlarmOverviewController');
	Route::resource('alarm-statistics', 'AlarmStatisticController');
	Route::resource('alarm-details', 'AlarmDetailsController');
	Route::resource('product', 'ProductController');
	Route::resource('week-expired', 'SevenDaysExpiredController');
	Route::resource('months-expired', 'SixtyDaysExpiredController');
	Route::resource('expired', 'ExpiredController');
	Route::get('statistics', function() {
		return view('stat-moving-overview');
	});
   	Route::resource('moving-overview', 'MovingOverviewController');

	Route::get('logout', function() {
		Session::flush();

		return Redirect::to('/login');
	});
});
	
