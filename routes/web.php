<?php

Route::view('/', 'layout')->name('home');

Route::get('/loop', [
    'uses' => 'LoopController@showPage',
    'as' => 'loop'
]);

Route::get('/extra_task', [
    'uses' => 'ExtraTaskController@showPage',
    'as' => 'extra_task'
]);
