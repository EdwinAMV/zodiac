<?php
use App\Http\Controllers\SignosApiController;
use Illuminate\Support\Facades\Route;

Route::get('/{language}/{sign}/{time}', [SignosApiController::class, 'getSignPrediction']);
