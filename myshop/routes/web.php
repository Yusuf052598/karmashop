<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes();
   Route::namespace('Back')->middleware(['auth','admin'])->prefix('/my-shop-admin')->group(function (){
       Route::get('/','Controller@index')->name('index');
       Route::namespace('Shops')->prefix('/shops')->group(function (){
           Route::get('/','Controller@index')->name('shops');
           Route::get('/create','Controller@create')->name('shops.create');
           Route::post('/store','Controller@store')->name('shops.store');
           Route::get('/edit/{shops}','Controller@edit')->name('shops.edit');
           Route::put('/update','Controller@update')->name('shops.update');
           Route::get('/destroy/{shops}','Controller@destroy')->name('shops.delete');
       });
       Route::namespace('Categories')->prefix('/categories')->group(function (){
           Route::get('/','Controller@index')->name('categories');
           Route::get('/create','Controller@create')->name('categories.create');
           Route::post('/store','Controller@store')->name('categories.store');
           Route::get('/edit/{categories}','Controller@edit')->name('categories.edit');
           Route::put('/update','Controller@update')->name('categories.update');
           Route::get('/delete/{categories}','Controller@destroy')->name('categories.delete');
       });
       Route::namespace('Pays')->prefix('/pays')->group(function (){
           Route::get('/','Controller@index')->name('pays');
           Route::get('/create','Controller@create')->name('pays.create');
           Route::post('/store','Controller@store')->name('pays.store');
           Route::get('/edit/{pays}','Controller@edit')->name('pays.edit');
           Route::put('/update','Controller@update')->name('pays.update');
           Route::get('/delete/{pays}','Controller@destroy')->name('pays.delete');
       });
       Route::namespace('Slider')->prefix('/sliders')->group(function (){
           Route::get('/','Controller@index')->name('sliders');
           Route::get('/create','Controller@create')->name('sliders.create');
           Route::post('/store','Controller@store')->name('sliders.store');
       });
       Route::namespace('Brand')->prefix('/brands')->group(function (){
           Route::get('/','Controller@index')->name('brands');
           Route::get('/create','Controller@create')->name('brands.create');
           Route::post('/store','Controller@store')->name('brands.store');
       });
       Route::namespace('Countries')->prefix('/country')->group(function (){
           Route::get('/','Controller@index')->name('country');
           Route::get('/create','Controller@create')->name('country.create');
           Route::post('/store','Controller@store')->name('country.store');
       });
       Route::namespace('Cities')->prefix('/city')->group(function (){
           Route::get('/','Controller@index')->name('city');
           Route::get('/create','Controller@create')->name('city.create');
           Route::post('/store','Controller@store')->name('city.store');
       });
       Route::namespace('Client')->prefix('/client')->group(function (){
           Route::get('/','Controller@index')->name('client');
           Route::get('/edit/{id}','Controller@edit')->name('client.edit');
           Route::put('/update','Controller@update')->name('client.update');
       });
   });
 Route::namespace('Front')->prefix('/')->group(function (){
         Route::get('/','Controller@index')->name('myShop');
         Route::get('/create','Controller@index')->name('myShop.contact');
         Route::namespace('Categories')->prefix('/category')->group(function (){
             Route::get('/{name}','Controller@index')->name('category');
             Route::get('/view/{id}-{name}','Controller@show')->name('category.single');
             Route::post('/store','Controller@store')->name('category.store');
         });
         Route::namespace('Likes')->prefix('/likes')->group(function (){
             Route::post('/store','Controller@store')->name('likes.store');
         });
         Route::namespace('Client')->prefix('/client')->group(function (){
             Route::post('/create','Controller@create')->name('client.create');
             Route::post('/store','Controller@store')->name('client.store');
             Route::post('/city','Controller@select2')->name('client.select');
         });

 });




