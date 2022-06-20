<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/content',function () {
    return view('barcontent/barcontent');
});
Route::get('/extension', function (){
    return view('healthEx/index');
});
route::get('/register',function (){
    return view('healthEx/register');
});
Route::get('/renew',function () {
    return view('healthEx/renewMember');
});
Route::get('/viewnotification',function () {
    return view('healthEx/viewNotification');
});
Route::get('/sendnotification',function () {
    return view('healthEx/sendNotification');
});
Route::get('/familyMember',function(){
    return view('healthEx/familyMember');
});
Route::get('/memberindex',function(){
return view('memberpage/index');
});
Route::get('/mviewnotification',function () {
    return view('memberpage/viewNotification');
});
Route::get('/memberProfile',function () {
    return view('memberpage/viewProfile');
});
Route::get('/memberRequest',function () {
    return view('memberpage/updateRequest');
});
//admin
Route::get('/admin',function () {
    return view('admin/index');
});
Route::get('/admin/create',function (){
    return view('admin/createAccount');
});
Route::get('/admin/edit',function (){
    return view('admin/editAccount');
});
Route::get('/admin/delete',function (){
    return view('admin/deleteAccount');
});
Route::get('/admin/sendNotification',function (){
    return view('admin/sendNotification');
});
Route::get('/admin/view',function (){
    return view('admin/viewStaffAcount');
});

