<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\topicCreated;

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
    //Mail::to("sdsfsdfdsf@sadas.com")->send(new topicCreated);
});
 
Route::get('/notification/send-email', 'NotificationController@viewEmail')->name('notification.form.email');
Route::get('/notification/send-sms' , 'NotificationController@viewSms')->name('notification.form.sms');
Route::post('/notification/send-email', 'NotificationController@sendEmail')->name('notification.send.email');


Route::get('/notification', 'NotificationController@notificationView')->name('notification.view.index');
    