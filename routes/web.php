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
// authentication===========
Auth::routes();
//=============================
Route::get('/home', 'HomeController@index')->name('home');

 //email verification =========================================
Auth::routes(['verify' => true]); 

Route::get('/home', function () {  // to test protecting route
    // Only verified users may enter...
})->middleware('verified');
//=====================================================


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{wilayas_id}/restaurant', 'RestaurentController@afficher')->name('Restaurant');

Route::get('/{wilayas_id}/Hotel', 'HotelController@afficher')->name('Hotel');

Route::get('/{wilayas_id}/Boutique', 'BoutiqueController@afficher')->name('Boutique');
Route::get('/{wilayas_id}/Boutique/catégorie/{cat}', 'BoutiqueController@affichercat')->name('Boutique');



//restoservice   =============================================

Route::get('/resto', 'RestoController@index')->name('resto');
Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');
Route::post('/contact','ContactController@sendMessage')->name('contact.send');
//=========================================================


//user profil   ============================================
Route::get('/profile', 'UserController@profile')->name('profile');
Route::post('profile', 'UserController@update_avatar');
//========================================


//admin       ===========================================
Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'], function (){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider','SliderController');
    Route::resource('category','CategoryController');
    Route::resource('item','ItemController');
    Route::get('reservation','ReservationController@index')->name('reservation.index');
    Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');
});
//=====================================================
Route::get('/vf', 'hotController@vf');
Auth::routes();
Route::get('/bauti', 'bautController@vf');
Auth::routes(); 