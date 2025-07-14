<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-mail', function () {
    // $user = (object)[
    //     'name' => 'Rakibul',
    //     'email' => 'mdrakibulislam2242@gmail.com'
    // ];

    Mail::to('mdrakibulislam2242@gmail.com')->send(new WelcomeMail('mdrakibulislam2242@gmail.com'));

    return "Mail sent successfully!";
});