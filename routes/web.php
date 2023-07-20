<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// All listings 
Route::get('/', [ListingController::class, 'index']);

// Show create form 
Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing data 
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form 
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// Single listing 
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show register
Route::get('/register', [UserController::class, 'create']);

// Create new user 
Route::post('/users', [UserController::class, 'store']);

// Logout user
Route::post('/logout', [UserController::class, 'logout']);

// Show login
Route::get('/login', [UserController::class, 'login']);

// Login user 
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
