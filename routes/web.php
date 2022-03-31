<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\MailChimpController;
use App\Http\Controllers\MessageController;
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

Route::get('/wel', function () {
    return view('welcome');
});



Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('/registration', [AuthController::class, 'registration'])->name('register');
Route::post('/post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('/dashboard', [AuthController::class, 'dashboard']); 
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Contact
Route::get('/contact-form/view', [ContactController::class, 'view'])->name('contact-form/view');
Route::get('/contact-form', [ContactController::class, 'contactForm'])->name('contact-form');
Route::post('/contact-form', [ContactController::class, 'storeContactForm'])->name('contact-form.store');

//add account
Route::get('/add-account/view', [AccountController::class, 'view'])->name('add-account/view');
Route::get('/add-account', [AccountController::class, 'index']);
Route::post('/store-form', [AccountController::class, 'store']);

// add deal
Route::get('/add-deal', [DealController::class, 'DealForm'])->name('add-deal');
Route::post('/add-deal', [DealController::class, 'storeDealForm'])->name('deal.store');

// Auth::routes();
Route::get('/mess', [MessageController::class, 'index'])->name('message');
Route::get('messages', [MessageController::class, 'fetchMessages']);
Route::post('messages', [MessageController::class, 'sendMessage'])->name('messagestore');

// Email-Form
Route::get('/redirect', [MailChimpController::class, 'redirect']);
Route::post('/redirect', [MailChimpController::class, 'redirect'])->name('redirect');
Route::get('/callback', [MailChimpController::class, 'callback'])->name('callback');

// Document 
Route::get('/add-document', [DocumentController::class, 'index'])->name('add-document');
Route::post('/add-document', [DocumentController::class, 'storeDocument'])->name('document.store');

// Taks
Route::get('/add-task', [TaskController::class, 'index']);
Route::post('/add-task', [TaskController::class, 'storeTask'])->name('task.store');

// Meeting
Route::get('/add-meeting', [MeetingController::class, 'index']);
Route::post('/add-meeting', [MeetingController::class, 'storeMeeting'])->name('meeting.store');

