<?php

/**
 * Домашняя страница
 */
Route::view('/', 'layout')->name('home');

/**
 * Страница вывода первого задания
 */
Route::get('/loop', [
    'uses' => 'LoopController@showPage',
    'as' => 'loop'
]);

/**
 * Route для получения данных для открытия окна в первом задании
 */
Route::post('/getData/{id}', [
    'uses' => 'LoopController@getData',
    'as' => 'getData'
]);

/**
 * Страница вывода вторго задания
 */
Route::get('/extra_task', [
    'uses' => 'ExtraTaskController@showPage',
    'as' => 'extra_task'
]);

/**
 * Route для получения результатов вычисления для второго задания
 */
Route::post('/extra_task', [
    'uses' => 'ExtraTaskController@getResult',
    'as' => 'getResult'
]);
