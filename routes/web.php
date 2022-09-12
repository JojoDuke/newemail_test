<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route to send email
Route::get('/send', [MailController::class, 'sendEmail']);
