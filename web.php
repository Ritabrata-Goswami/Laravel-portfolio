<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portfolioController;
use Illuminate\Auth\Middleware\Authenticate;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/profile', function(){
    return view('portfolio_profile');
});

Route::get('/admin', function(){
    return view('admin_login');
})->name('login');

Route::get('/registration', function(){
    return view('reg');
});

Route::get('/', [portfolioController::class, 'index']);
Route::post('/message', [portfolioController::class, 'store_message']);
Route::post('/send-registration-data', [portfolioController::class, 'admin_reg']);
Route::post('/admin-auth', [portfolioController::class, 'admin_auth']);
Route::get('/admin-dashboard', [portfolioController::class, 'view_dashboard'])->middleware('auth');
Route::get('/logout', [portfolioController::class, 'session_out']); 
Route::delete('/admin-dashboard/delete/{id}', [portfolioController::class, 'delete_file'])->middleware('auth');
Route::delete('/admin-dashboard/delete-project/{id}', [portfolioController::class, 'delete_project'])->middleware('auth');
Route::post('/upload-project', [portfolioController::class, 'upload_project'])->middleware('auth');
Route::get('/admin-dashboard/edit/{id}', [portfolioController::class, 'edit'])->middleware('auth');
Route::patch('/admin-dashboard/update-project/{id}', [portfolioController::class, 'update'])->middleware('auth');

Route::fallback(function() {
    return view('page_404');
});