<?php


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginSecurityController;
use App\Http\Controllers\HomeController;
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
Route::group(['prefix' => '2fa'], function () {
    Route::get('/', [LoginSecurityController::class, 'show2faForm']);
    Route::post('/generateSecret',  [LoginSecurityController::class, 'generate2faSecret'])->name('generate2faSecret');
    Route::post('/enable2fa', [LoginSecurityController::class, 'enable2fa'])->name('enable2fa');
    Route::post('/disable2fa', [LoginSecurityController::class, 'disable2fa'])->name('disable2fa');

    Route::post('/2faVerify', function () {
        return redirect(URL()->previous());
    })->name('2faVerify')->middleware('2fa');
});


Route::post('update_profile', [ProfileController::class, 'update_profile'])->middleware(['auth', '2fa'])->name('profile.update');
Route::get('profile', [ProfileController::class, 'profile'])->middleware(['auth', '2fa'])->name('profile');
Route::get('/welcome', [HomeController::class, 'index'])->middleware(['auth', '2fa'])->name('welcome');

require __DIR__ . '/auth.php';
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('auth.logout');
Route::get('/', [AuthenticatedSessionController::class, 'create'])->middleware(['guest'])->name('home');