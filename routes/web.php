<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebContoller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//
// Client Routes
//

Route::group(['middleware' => 'guest'], function(){
    // login
    Route::get('/', [WebContoller::class, 'viewLogin'])->name('view.login');
    Route::get('/login', [WebContoller::class, 'Login'])->name('login');
    // Register.
    Route::get('/formregister', [WebContoller::class, 'viewRegister'])->name('view.register');
    Route::post('/register', [WebContoller::class, 'Register'])->name('register');
});
Route::group(['middleware' => 'auth'],function(){
    //
    // Navegation
    //
    Route::get('/home', [WebContoller::class, 'viewHome'])->name('view.home');
    Route::get('/subject/{id}', [WebContoller::class, 'viewSubject'])->name('view.subject');
    Route::get('/grades/{id}', [WebContoller::class, 'viewGrades'])->name('view.grades');
    Route::get('/tuition/{id}', [WebContoller::class, 'viewTuition'])->name('view.tuition');
    Route::get('/announcement/{id}', [WebContoller::class, 'viewAnnouncement'])->name('view.announcemnt');
    Route::get('/clubs', [WebContoller::class, 'viewClubs'])->name('view.clubs');
    Route::get('/logout', [WebContoller::class, 'Logout'])->name('logout');
});

//
// Admin Routes.
//

Route::get('/adminhome', [WebContoller::class, 'viewAdminHome']);
