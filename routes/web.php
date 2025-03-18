<?php

use App\Events\TestMessage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Broadcast;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trigger-message', function () {
    Broadcast::on('test-message')
        ->as('test.message')
        ->with(['message' => 'Hello World'])
        ->send();
    return 'message sent';
});