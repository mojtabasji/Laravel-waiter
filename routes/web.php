<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/', 'front\MainController@index')->name('home');
Route::get('/menu', 'front\MainController@menu')->name('table.menu');
Route::post('/table/register', 'front\MainController@register')->name('table.register');
Route::post('/table/logout/{table}', 'front\MainController@logout')->name('table.logout');

Route::prefix('/admin')->middleware('Rolecheck')->group(function () {

    Route::get('/', 'back\AdminController@index')->name('admin');
    Route::post('/users/Estore', 'back\UserController@store')->name('admin.users.store');
    Route::get('/users/Einsert', 'back\UserController@Einsert')->name('admin.users.Einsert');
    Route::get('/users/{user}', 'back\UserController@index')->middleware('Checkadmin')->name('admin.users');
    Route::get('/users/status/{user}', 'back\UserController@updatestatus')->name('admin.users.updatestatus');
    Route::get('/users/destroy/{user}', 'back\UserController@destroy')->name('admin.users.destroy');
    Route::get('/users/edit/{user}', 'back\UserController@edit')->name('admin.users.edit');
    Route::post('/users/update/{user}', 'back\UserController@update')->name('admin.users.update');

    Route::get('/tables', 'back\TableController@index')->middleware('Checkadmin')->name('admin.tables');
    Route::get('/tables/insert', 'back\TableController@insert')->name('admin.table.insert');
    Route::post('/tables/store', 'back\TableController@store')->name('admin.table.store');
    Route::get('/tables/edit/{user}', 'back\TableController@edit')->name('admin.table.edit');
    Route::post('/tables/update/{user}', 'back\TableController@update')->name('admin.table.update');

    Route::get('/members','back\MemberController@index')->middleware('Checkadmin')->name('admin.members');
    Route::get('/members/destroy/{member}', 'back\MemberController@destroy')->name('admin.member.destroy');
    Route::get('/members/insert','back\MemberController@insert')->middleware('Checkadmin')->name('admin.member.insert');
    Route::post('/members/store', 'back\MemberController@store')->name('admin.member.store');
    Route::get('/members/edit/{member}', 'back\MemberController@edit')->name('admin.member.edit');
    Route::post('/members/update/{member}', 'back\MemberController@update')->name('admin.member.update');

    Route::get('/categprys','back\CategoryController@index')->middleware('Checkadmin')->name('admin.categorys');
    Route::get('/categprys/insert','back\CategoryController@insert')->middleware('Checkadmin')->name('admin.category.insert');
    Route::get('/categprys/edit/{category}','back\CategoryController@edit')->middleware('Checkadmin')->name('admin.category.edit');
    Route::get('/categprys/destroy/{category}','back\CategoryController@destroy')->middleware('Checkadmin')->name('admin.category.destroy');
    Route::post('/categprys/store','back\CategoryController@store')->middleware('Checkadmin')->name('admin.category.store');
    Route::post('/categprys/update/{category}','back\CategoryController@update')->middleware('Checkadmin')->name('admin.category.update');

    Route::get('/foods','back\FoodController@index')->middleware('Checkadmin')->name('admin.foods');
    Route::get('/foods/edit/{food}','back\FoodController@edit')->middleware('Checkadmin')->name('admin.food.edit');
    Route::get('/foods/create','back\FoodController@create')->middleware('Checkadmin')->name('admin.food.create');
    Route::get('/foods/destroy/{food}','back\FoodController@destroy')->middleware('Checkadmin')->name('admin.food.destroy');
    Route::get('/foods/updatedayOffer/{food}','back\FoodController@updatedayOffer')->middleware('Checkadmin')->name('admin.food.updatedayOffer');
    Route::post('/foods/update/{food}','back\FoodController@update')->middleware('Checkadmin')->name('admin.food.update');

});

Route::get('/member/login', 'front\MemberController@login')->name('member.login');
Route::post('/member/enter', 'front\MemberController@enter')->name('member.enter');
Route::get('/member/register', 'front\MemberController@insert')->name('member.insert');
Route::post('/member/store', 'front\MemberController@store')->name('member.store');



Route::get('/nothing', [App\Http\Controllers\HomeController::class, 'index'])->name('hme');
