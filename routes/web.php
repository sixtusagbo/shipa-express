<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
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

Route::middleware('guest')->group(function () {
  Route::get('/divein', [UserController::class, 'login'])->name('login');
  Route::post('/divein', [UserController::class, 'authenticate']);
});

// Authenticated routes
Route::middleware('auth')->group(function () {
  Route::resource('shipments', ShipmentController::class)->except(['index', 'show']);
  Route::get('/manage-shipments', [ShipmentController::class, 'manage']);
  Route::get('/shipments/{shipment}/statuses', [ShipmentController::class, 'statuses']);
  Route::resource('statuses', StatusController::class)->except(['index', 'show', 'create']);
  Route::get('/shipments/{shipment}/statuses/create', [StatusController::class, 'create']);
  Route::get('/shipments/{shipment}/customs', [StatusController::class, 'customs']);
  Route::post('/shipments/{shipment}/customs', [StatusController::class, 'customs_status']);
  Route::post('/diveout', [UserController::class, 'logout']);
});

// Mimi routes
Route::get('mimi_clear_config', function () {
  Artisan::call('config:clear');

  return redirect('/');
});

Route::get('mimi_optimize', function () {
  Artisan::call('optimize:clear');

  return redirect('/');
});

Route::get('mimi_migrate', function () {
  Artisan::call('migrate', [
    '--force' => true
  ]);
  Artisan::call('db:seed', [
    '--force' => true
  ]);

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
