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
Route::get('/contacts/create', [ContactController::class, 'create']);

// Store Contact Data
Route::post('/contacts', [ContactController::class, 'store']);

// Show edit Form
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit']);

// Update Contact
Route::put('/contacts/{contact}', [ContactController::class, 'update']);

// Delete Contact
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']);

// Manage Contacts
Route::get('/contacts/manage', [ContactController::class, 'manage']);

// single contact
Route::get('/contacts/{contact}', [ContactController::class, 'show']);