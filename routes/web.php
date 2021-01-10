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

# If Login
# Auth::routes(['verify' => true]);

# If using controller functions
# Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# If using simple views
Route::get('/', function () {
    return view('pages.home');
});

# If Admin or other Prefix pages
/*
Route::prefix('dashboard')->middleware(['auth', 'verified')->group(function () {

}
*/
