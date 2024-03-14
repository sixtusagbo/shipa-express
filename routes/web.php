<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ShipmentController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guest routes
Route::get('/', [GuestController::class, 'welcome']);
Route::get('/contact', [GuestController::class, 'contact']);
Route::post('/contact', [GuestController::class, 'send_contact_mail']);
Route::get('/monitor-shipment', [ShipmentController::class, 'index']);

Route::resource('shipments', ShipmentController::class)->except(['index', 'show']);

// Mimi routes
Route::get('mimi_clear_config', function () {
  Artisan::call('config:clear');

  return redirect('/');
});

Route::get('mimi_optimize', function () {
  Artisan::call('optimize:clear');

  return redirect('/');
});

Route::get('mimi_migrate_refresh', function () {
  Artisan::call('migrate:refresh', [
    '--force' => true
  ]);
  Artisan::call('db:seed', [
    '--force' => true
  ]);

  return redirect('/');
});

Route::get('mimi_migrate', function () {
  Artisan::call('migrate', [
    '--force' => true
  ]);

  return redirect('/');
});
