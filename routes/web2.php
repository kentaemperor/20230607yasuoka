<?php

use Illuminate\Support\Facades\Route;

Route::get('/test/{greeting?}',function($greeting = 'Goodmorning') {
  return $greeting . '=おはようございます';
});