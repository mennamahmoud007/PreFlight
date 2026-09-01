<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::middleware('device')->group(function () {
    Route::apiResource('projects', ProjectController::class);
});
