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

Route::get('/',"HomeController@index");
Route::get('/event',"HomeController@event")->name('event');
Route::post("/mail","HomeController@mail")->name('mail');

Route::group(["prefix"=>"Admin" , "middleware"=>"auth"],function(){
    Route::get('/',"AdminControler@index")->name('Admin');
    Route::get('/general',"AdminControler@General")->name('general');
    Route::post('/general',"AdminControler@changeGeneral")->name('changeGeneral');

    Route::get('/temoignage',"AdminControler@temoignage")->name('temoignage');
    Route::post('/saveChiffre',"AdminControler@saveChiffre")->name('saveChiffre');
    Route::post('/saveTemoignage',"AdminControler@saveTemoignage")->name('saveTemoignage');
     Route::post('/addTemoignage',"AdminControler@addTemoignage")->name('addTemoignage');
    
    Route::get('/slider',"AdminControler@slider")->name('slider');
    Route::post('/slider',"AdminControler@saveSlider")->name('saveSlider');

    Route::get('/footer',"AdminControler@footer")->name('footer');
    Route::post('/footer',"AdminControler@footerEdit")->name('footerEdit');

    Route::get('evenment',"AdminControler@evenment")->name('evenment');
    Route::post('evenment',"AdminControler@addevent")->name('addevent');
     Route::post('editEvent',"AdminControler@editEvent")->name('editEvent');
   
});



Auth::routes();

Route::get('/home', 'HomeController@index');
