<?php

use App\Pelanggan;
use Illuminate\Support\Facades\Input;
 
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

// Route::get ( '/', function () {
//     $welcount = Pelanggan::All();
//     return view ('welcome')->with('$welcount',$welcount);
// } );
Route::get('/','UtamaController@index');

Auth::routes();

Route::POST('/pemesanan','UtamaController@pemesanan');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::resource('/pelanggan','PelangganController');
Route::get('/pelanggan/{id}/invoice/','PelangganController@invoice');
Route::get('/pelanggan/{id}/print/','PelangganController@print');
Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $user = Pelanggan::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'phone', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'welcome' )->withMessage ( 'Maaf Data Belum Tersedia. Silahkan Cek Kembali' );
} );

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
    
});