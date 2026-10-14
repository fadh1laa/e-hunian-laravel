<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RusunawaController;
use App\Http\Controllers\API\UnitController;
use App\Http\Controllers\API\FacilityController;
use App\Http\Controllers\API\ApplicationController;
use App\Http\Controllers\API\ApplicationDocumentController;
use App\Http\Controllers\API\ApplicationHistoryController;
use App\Http\Controllers\API\ReviewController;

Route::prefix('v1')->group(function () {

    Route::apiResource('rusunawa', RusunawaController::class);

    Route::apiResource('units', UnitController::class);

    Route::apiResource('facilities', FacilityController::class);

    Route::apiResource('applications', ApplicationController::class);

    Route::apiResource(
        'application-documents',
        ApplicationDocumentController::class
    );

    Route::apiResource(
        'application-histories',
        ApplicationHistoryController::class
    );

    Route::apiResource('reviews', ReviewController::class);
});