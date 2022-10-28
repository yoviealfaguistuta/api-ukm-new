<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']); // Login User
Route::post('/register', [AuthController::class, 'register']); // Membuat data User baru

require_once "public.php";
require_once "private.php";