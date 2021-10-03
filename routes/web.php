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

Route::get('/post', [App\Http\Controllers\zoneController::class, 'addZone'])->name('add.zone');
Route::post('/post', [App\Http\Controllers\zoneController::class, 'saveZone'])->name('save.zone');
Route::get('/zone', [App\Http\Controllers\zoneController::class, 'zone'])->name('zone');
Route::get('/edit-zone/{zone_id}', [App\Http\Controllers\zoneController::class, 'editZone'])->name('edit.zone');
Route::get('/delete-zone/{zone_id}', [App\Http\Controllers\zoneController::class, 'deleteZone'])->name('delete.zone');
Route::post('/update-zone', [App\Http\Controllers\zoneController::class, 'updateZone'])->name('update.zone');

Route::get('/post_region', [App\Http\Controllers\regionController::class, 'addRegion'])->name('add.region');
Route::post('/post_region', [App\Http\Controllers\regionController::class, 'saveRegion'])->name('save.region');
Route::get('/region', [App\Http\Controllers\regionController::class, 'region'])->name('region');
Route::get('/edit-region/{r_id}', [App\Http\Controllers\regionController::class, 'editRegion'])->name('edit.region');
Route::get('/delete-region/{r_id}', [App\Http\Controllers\regionController::class, 'deleteRegion'])->name('delete.region');
Route::post('/update-region', [App\Http\Controllers\regionController::class, 'updateRegion'])->name('update.region');

Route::get('/post-sku', [App\Http\Controllers\skuController::class, 'addSku'])->name('add.sku');
Route::post('/post-sku', [App\Http\Controllers\skuController::class, 'saveSku'])->name('save.sku');
Route::get('/sku', [App\Http\Controllers\skuController::class, 'sku'])->name('sku');
Route::get('/edit-sku/{s_id}', [App\Http\Controllers\skuController::class, 'editSku'])->name('edit.sku');
Route::get('/delete-sku/{s_id}', [App\Http\Controllers\skuController::class, 'deleteSku'])->name('delete.sku');
Route::post('/update-sku', [App\Http\Controllers\skuController::class, 'updateSku'])->name('update.sku');

Route::get('/post-terr', [App\Http\Controllers\terrController::class, 'addTerr'])->name('add.terr');
Route::post('/post-terr', [App\Http\Controllers\terrController::class, 'saveTerr'])->name('save.terr');
Route::get('/terr', [App\Http\Controllers\terrController::class, 'terr'])->name('terr');
Route::get('/edit-terr/{t_id}', [App\Http\Controllers\terrController::class, 'editTerr'])->name('edit.terr');
Route::get('/delete-terr/{t_id}', [App\Http\Controllers\terrController::class, 'deleteTerr'])->name('delete.terr');
Route::post('/update-terr', [App\Http\Controllers\terrController::class, 'updateTerr'])->name('update.terr');

Route::get('/post-user', [App\Http\Controllers\userController::class, 'addUser'])->name('add.user');
Route::post('/post-user', [App\Http\Controllers\userController::class, 'saveUser'])->name('save.user');
Route::get('/user', [App\Http\Controllers\userController::class, 'user'])->name('user');
