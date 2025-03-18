<?php

use App\Events\TestMessage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-websocket', function () {
    return view('test-websocket');
});

Route::get('/trigger-message', function () {
    \Log::info('Triggering TestMessage event');
    event(new TestMessage());
    return 'Message sent!';
});