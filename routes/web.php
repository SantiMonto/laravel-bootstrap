<?php

use App\Livewire\Courses\Edit;
use App\Livewire\Courses\Index as Home;
use App\Livewire\Courses\Show;
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

Route::get('/', Home::class)->name('courses.home');
Route::get('/courses/{course}/{category?}', Show::class)->name('courses.show');

