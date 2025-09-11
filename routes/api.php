<?php
    use App\Http\Controllers\ReportController;

    Route::prefix('v1')->middleware('auth:sanctum')->group(function () {
        Route::get('/report-types', [ReportController::class, 'getTypes']);   
        Route::post('/reports', [ReportController::class, 'store']);          
        Route::get('/my-reports', [ReportController::class, 'myReports']);    
    });

?>