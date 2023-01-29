<?php

use App\Http\Controllers\ContactController;
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

// All Contacts
Route::get('/', [ContactController::class, 'index']);

// Show create form
Route::get('/create', [ContactController::class, 'create']);

// Store Contact Data
Route::post('/', [ContactController::class, 'store']);

// Show edit Form
Route::get('/{contact}/edit', [ContactController::class, 'edit']);

// Update Contact
Route::put('/{contact}', [ContactController::class, 'update']);

// Delete Contact
Route::put('/{contact}', [ContactController::class, 'destroy']);