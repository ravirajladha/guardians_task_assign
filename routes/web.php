<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\TaskController;




// Routes for login and registration (accessible only to non-authenticated users)
Route::middleware(['RedirectIfAuthenticatedForLoginRegister'])->group(function () {
    Route::controller(LoginRegisterController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/store', 'store')->name('store');
        Route::get('/login', 'login')->name('login');
        Route::post('/authenticate', 'authenticate')->name('authenticate');
    });
});
    Route::middleware(['RedirectIfAuthenticated'])->group(function () {


Route::controller(LoginRegisterController::class)->group(function () {

    Route::post('/logout', 'logout')->name('logout');
    Route::put('/edit_profile_details', 'edit_profile_details')->name('edit_profile_details');

});

Route::prefix('tasks')->as('tasks.')->controller(TaskController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('store', 'store')->name('store');
    Route::get('show/{id}', 'show')->name('show');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::put('update', 'update')->name('update');
    Route::delete('destroy', 'destroy')->name('destroy');
    Route::get('profile_details', 'profile_details')->name('profile_details');
    Route::get('update_profile_details', 'update_profile_details')->name('update_profile_details');

});


});