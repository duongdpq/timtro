<?php
use App\District;
use App\Ward;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get(/delete){
    File::delete($filename);
}
Route::get('/district', function () {
	$prov_id = Input::get('prov_id');
	$district = District::where('province_id','=',$prov_id)->get();
    return response()->json($district);
});
Route::get('/ward', function () {
    $dist_id = Input::get('dist_id');
	$ward = Ward::where('district_id','=',$dist_id)->get();
    return response()->json($ward);
});
Route::group(['middleware' => ['web']], function () {
    Route::get('web-login', 'Auth\AuthController@webLogin');
    Route::post('web-login', ['as'=>'web-login','uses'=>'Auth\AuthController@webLoginPost']);
    Route::get('admin-login', 'AdminAuth\AuthController@adminLogin');
    Route::post('admin-login', ['as'=>'admin-login','uses'=>'AdminAuth\AuthController@adminLoginPost']);
      Route::get('/admin/logout','AdminAuth\AuthController@logout');


});
Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function () {
    Route::get('/motel/add', 'UserController@getAdd');
    Route::post('/motel/add', 'UserController@getAdd');
});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/admin/dashboard', 'AdminController@index');
     // Route::post('dashboard', ['as'=>'dashboard','uses'=>'AdminController@index']);
});
Route::get('dropzone', 'AdminController@dropzone');
Route::post('dropzone/store', ['as'=>'dropzone.store','uses'=>'AdminController@dropzoneStore']);
Route::get('admin/motel/add', ['as'=>'admin.motel.getAdd','uses'=>'AdminController@getAddMotel']);
Route::post('admin/motel/add', ['as'=>'admin.motel.postAdd','uses'=>'AdminController@postAddMotel']);

Route::get('admin/motel/list', ['as'=>'admin.motel.getList','uses'=>'AdminController@getList']);
// Route::post('admin/motel/delete', ['as'=>'admin.motel.delete','uses'=>'AdminController@delete']);
Route::post ( '/delete', 'AdminController@delete' );

Route::get('motel/add', ['as'=>'motel.getAdd','uses'=>'UserController@getAddMotel']);

