<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\ExamManager;
use App\Livewire\Home;
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

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/home', Home::class)->name('home');
Route::get('/exam-manager', ExamManager::class)->name('exam-manager');
