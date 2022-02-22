<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Livewire\Document\DocumentCreate;
use App\Http\Livewire\Document\DocumentEdit;
use App\Http\Livewire\Endorsement\Endorsement;
use App\Http\Livewire\Endorsement\EndorsementCreate;
use App\Http\Livewire\TrackDocument\Record;
use App\Http\Livewire\TrackDocument\RecordFind;
use App\Http\Livewire\Report\GenerateReport;

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

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('/logout', LogoutController::class)
        ->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/', Dashboard::class)->name('home');
    Route::get('/document/create', DocumentCreate::class)->name('create-document');
    Route::get('/document/', DocumentEdit::class)->name('edit-document');
    Route::get('/endorsement', Endorsement::class)->name('endorsement');
    Route::get('/endorsement/create/{id}', EndorsementCreate::class)->name('endorsementform');
    Route::get('/find/record', Record::class)->name('findrecord');
    Route::get('/find/', RecordFind::class)->name('findrecordform');
    Route::get('/reports', GenerateReport::class)->name('reports');
});