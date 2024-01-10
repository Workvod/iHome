<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

Route::get('/',[MainController::class,'index']);
Route::put('/',[MainController::class,'index2']);

Route::match(['get','put'],'/agreement',[MainController::class,'agreement']);

Route::get('/category',[MainController::class,'katalog']);
Route::get('/delivery',[MainController::class,'dostavka']);
Route::get('/garant',[MainController::class,'garant']);
Route::get('/zakaz',[AdminController::class,'auth']);

Route::get('/cart',[MainController::class,'cart']);
Route::put('/cart',[MainController::class,'docart']);

Route::get('/wish',[MainController::class,'wish']);
Route::put('/wish',[MainController::class,'dowish']);

Route::get('/order',[MainController::class,'order']);
Route::put('/order',[MainController::class,'toorder']);

Route::match(['get','put'],'/dev',[MainController::class,'insoon']);
Route::match(['get','put'],'/rassr',[MainController::class,'rassrochka']);
Route::match(['get','put'],'/garantia',[MainController::class,'garantia']);
Route::match(['get','put'],'/tradein',[MainController::class,'tradein']);
Route::match(['get','put'],'/dostavka',[MainController::class,'dostav']);


Route::get('/admin',[AdminController::class,'show']);
Route::put('/admin',[AdminController::class,'aut']);

Route::get('/admin/panel',[AdminController::class,'retpan']);

Route::match(['get', 'put'], '/admin/panel/kateg', [AdminController::class,'kat']);

Route::match(['get', 'put'], '/admin/panel/tovar', [AdminController::class,'tovar']);
Route::match(['get', 'put'], '/admin/panel/color', [AdminController::class,'colform']);
Route::match(['get', 'put'], '/admin/panel/obem', [AdminController::class,'obform']);
Route::match(['get', 'put'], '/admin/panel/podborki', [AdminController::class,'podb']);
Route::match(['get', 'put'], 'admin/panel/slider',[AdminController::class,'slider']);


Route::get('/{typ}','MainController@categ')->where('url', '[a-z]+');
Route::put('/{typ}','MainController@categ2')->where('url', '[a-z]+');

Route::match(['get','put'],'/{typ}/{prod}',[MainController::class,'prod']);

Route::get('/{typ}/{prod}/{tov}', 'MainController@last');
Route::put('/{typ}/{prod}/{tov}','MainController@todo');


