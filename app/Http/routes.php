<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
| http://laravel.com/docs/5.1/authentication
| http://laravel.com/docs/5.1/authorization
| http://laravel.com/docs/5.1/routing
| http://laravel.com/docs/5.0/schema
| http://socialiteproviders.github.io/
|
*/

// PAGE ROUTE ALIASES


Route::get('/', 'ProductController@main');
Route::get('/products', 'ProductController@products');
Route::get('/productdetail/{id}', 'ProductController@productdetail');
// Route::get('/admin', 'ProductController@index');
// Route::get('/product/{id}', 'ProductController@edit');
// Route::get('/delete', 'ProductController@destroy');
// Route::post('/product/create', 'ProductController@store');
// Route::post('/product/update/{id}', 'ProductController@update');
// Route::get('/trueft', 'ProductController@create');
// Route::get('/falseft', 'ProductController@remove');
// Route::get('/featured', 'ProductController@featured');
// Route::get('/remove', 'ProductController@remove');
// Route::get('/call', 'ProductController@call');
// Route::get('/calledit', 'ProductController@calledit');
// Route::post('/call/{id}', 'ProductController@callupdate');
// Route::post('banner/{id}', 'BannerController@update_avatar');
// Route::get('/scrolleredit', 'BannerController@scrolleredit');
// Route::post('/scroller/{id}', 'BannerController@scrollerupdate');

// Route::get('/scroller', 'BannerController@index');
// Route::get('/stat', 'ProductController@stat');
// Route::get('/dellog', 'ProductController@stat_remove');
// Route::get('/about', 'PageController@index');
// Route::post('/about/edit', 'PageController@about');
// Route::get('/terms', 'PageController@term');
// Route::get('/privacy', 'PageController@privacy');
// Route::get('/accep', 'PageController@accep');
Route::get('/aboutus', function () {
    return view('aboutus');
});


// ALL AUTHENTICATION ROUTES - HANDLED IN THE CONTROLLERS
Route::controllers([
	'auth' 		=> 'Auth\AuthController',
	'password' 	=> 'Auth\PasswordController',
]);

// REGISTRATION EMAIL CONFIRMATION ROUTES
Route::get('/resendEmail', 'Auth\AuthController@resendEmail');
Route::get('/activate/{code}', 'Auth\AuthController@activateAccount');

// LARAVEL SOCIALITE AUTHENTICATION ROUTES
Route::get('/social/redirect/{provider}', [
	'as' 	=> 'social.redirect',
	'uses' 	=> 'Auth\AuthController@getSocialRedirect'
]);
Route::get('/social/handle/{provider}', [
	'as' 	=> 'social.handle',
	'uses' 	=> 'Auth\AuthController@getSocialHandle'
]);


Route::get('logout', function () {
    return redirect('auth/logout');
});
//Route::get('register', function () {
   // return redirect('auth/register');
//});
Route::get('reset', function () {
    return redirect('password/email');
});

// USER PAGE ROUTES - RUNNING THROUGH AUTH MIDDLEWARE
Route::group(['middleware' => 'auth'], function () {
		Route::get('/home', 'ProductController@index');
		Route::get('/product/{id}', 'ProductController@edit');
		Route::get('/delete', 'ProductController@destroy');
		Route::post('/product/create', 'ProductController@store');
		Route::post('/product/update/{id}', 'ProductController@update');
		Route::get('/trueft', 'ProductController@create');
		Route::get('/falseft', 'ProductController@remove');
		Route::get('/featured', 'ProductController@featured');
		Route::get('/remove', 'ProductController@remove');
		Route::get('/call', 'ProductController@call');
		Route::get('/calledit', 'ProductController@calledit');
		Route::post('/call/{id}', 'ProductController@callupdate');
		Route::post('banner/{id}', 'BannerController@update_avatar');
		Route::get('/scrolleredit', 'BannerController@scrolleredit');
		Route::post('/scroller/{id}', 'BannerController@scrollerupdate');
		Route::get('/scroller', 'BannerController@index');
		Route::get('/stat', 'ProductController@stat');
		Route::get('/dellog', 'ProductController@stat_remove');
		Route::get('/about', 'PageController@index');
		Route::post('/about/edit', 'PageController@about');
		Route::get('/terms', 'PageController@term');
		Route::get('/privacy', 'PageController@privacy');
		Route::get('/accep', 'PageController@accep');
	// HOMEPAGE ROUTE
	// Route::get('/home', [
	//     'as' 		=> 'user',
	//     'uses' 		=> 'UserController@index'
	// ]);

	// INCEPTIONED MIDDLEWARE TO CHECK TO ALLOW ACCESS TO CURRENT USER ONLY
	Route::group(['middleware'=> 'currentUser'], function () {
			Route::resource(
				'profile',
				'ProfilesController', [
					'only' 	=> [
						'show',
						'edit',
						'update'
					]
				]
			);
	});
	Route::get('profile/{username}', [
		'as' 		=> '{username}',
		'uses' 		=> 'ProfilesController@show'
	]);

	Route::get('dashboard/profile/{username}', [
		'as' 		=> '{username}',
		'uses' 		=> 'ProfilesController@show'
	]);

});

// ADMINISTRATOR ACCESS LEVEL PAGE ROUTES - RUNNING THROUGH ADMINISTRATOR MIDDLEWARE
Route::group(['middleware' => 'administrator'], function () {

	// TEST ROUTE ONLY ROUTE
	Route::get('administrator', function () {
	    echo 'Welcome to your ADMINISTRATOR page '. Auth::user()->email .'.';
	});

	// SHOW ALL USERS PAGE ROUTE
	Route::resource('users', 'UsersManagementController');
	Route::get('users', [
		'as' 			=> '{username}',
		'uses' 			=> 'UsersManagementController@showUsersMainPanel'
	]);

	// EDIT USERS PAGE ROUTE
	Route::get('edit-users', [
		'as' 			=> '{username}',
		'uses' 			=> 'UsersManagementController@editUsersMainPanel'
	]);


});
Route::get('/sign in', function () {
    return view('auth.login');
});

// Route::get('/login-advertiser', function () {
//     return view('auth.login-advertiser');
// });
Route::get('/sign up', function () {
    return view('auth.register');
});
// Route::get('/sign up', function () {
//     return view('auth.signup-influencer');
// });
// Route::get('/sign in', function () {
//     return view('auth.login-influencer');
// });
// f
//***************************************************************************************//
//***************************** USER ROUTING EXAMPLES BELOW *****************************//
//***************************************************************************************//

// //** OPTION - ALL FOLLOWING ROUTES RUN THROUGH AUTHETICATION VIA MIDDLEWARE **//
// Route::group(['middleware' => 'auth'], function () {

// 	// OPTION - GO DIRECTLY TO TEMPLATE
// 	Route::get('/', function () {
// 	    return view('pages.home');
// 	});

// 	// OPTION - USE CONTROLLER
// 	Route::get('/', [
// 	    'as' 			=> 'user',
// 	    'uses' 			=> 'UsersController@index'
// 	]);

// });

// //** OPTION - SINGLE ROUTE USING A CONTROLLER AND AUTHENTICATION VIA MIDDLEWARE **//
// Route::get('/', [
//     'middleware' 	=> 'auth',
//     'as' 			=> 'user',
//     'uses' 			=> 'UsersController@index'
// ]);
