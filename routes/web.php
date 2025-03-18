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
    // \Log::info('Triggering TestMessage event');
    // event(new TestMessage());
    // return 'Message sent!';
    return 'message sent';
});