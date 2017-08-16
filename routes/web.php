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
    return view('front/index');
});
Route::get('/about', function () {
    return view('front/about');
});
Route::get('/gallery', function () {
    return view('front/gallery');
});
Route::get('/training', function () {
    return view('front/training');
});
Route::get('/news', function () {
    return view('front/news');
});
Route::get('/contact', function () {
    return view('front/contact');
});


Route::get('/dashboard', function () {
	return view ('admin.index');
});



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', function ()    {
        // Matches The "/dashboard/" URL
        return view ('admin.index');    });

    Route::get('schedule/list', 'JadwalController@daftar'); //custom route harus diatas route resource
    Route::get('venue/list/{id}', 'VenueController@daftar'); //custom route harus diatas route resource


    Route::resource('schedule', 'JadwalController');
    Route::resource('venue', 'VenueController');
    Route::resource('pitch', 'LapanganController');
    Route::resource('user', 'userController');
    Route::resource('location', 'locationController');
    
}); // end group route dashboard

route::group(['prefix' => 'member'], function () {
	route::get('/', function(){
		return view('member.dashboard');	});

    Route::get('test', ['middleware' => ['auth', 'role:1'], function() {return "Berhasil mengakses halaman member";}]);


}); // end group route member

//fullCalendar
Route::get('/api', function () {
	$events = DB::table('jadwals')->select('id', 'name', 'title', 'start_time as start', 'end_time as end')->get();
	foreach($events as $event)
	{
		$event->title = $event->title . ' - ' .$event->name;
		$event->url = url('dashboard/schedule/' . $event->id);
	}
	return $events;
}); //end route fullCalendar


Route::get('event', ['middleware' => ['auth', 'role:member'], function() {
return "Berhasil mengakses halaman event";
}]);
Route::get('event-history', ['middleware' => ['auth', 'role:member'], function() {
return "Berhasil mengakses history event.";
}]);