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
Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
   Route::get('/',function(){
    return 'ini halaman admin';
    });
Route::get('user',function(){
    return 'ini halaman user';
    });
Route::get('member',function(){
    return 'ini halaman member';
    });
});

Route::group(['prefix'=>'manager'],function(){
    Route::get('/',function(){
        return 'ini halaman manager';
    }); 
    Route::get('user',function(){
        return 'ini halaman user';
    }); 
    Route::get('member',function(){
        return 'ini halaman member';
    });
});

    Route::group(['prefix'=>'karyawan'],function(){
        Route::get('/',function(){
            return 'ini halaman karyawan';
        });     
        Route::get('user',function(){
            return 'ini halaman user';
        });  
        Route::get('member',function(){
            return 'ini halaman member';
        });
    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
