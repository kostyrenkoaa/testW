<?php

Route::view('/', 'layout')->name('home');

Route::get('/loop', [
    'uses' => 'LoopController@showPage',
    'as' => 'loop'
]);

Route::post('/getData/{id}', [
    'uses' => 'LoopController@getData',
    'as' => 'getData'
]);

Route::get('/extra_task', [
    'uses' => 'ExtraTaskController@showPage',
    'as' => 'extra_task'
]);
