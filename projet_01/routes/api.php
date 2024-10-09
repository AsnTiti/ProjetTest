<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;




/*Route::group(['middleware' => ['api']], function($router){
    



});*/


/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
Route::group(['prefix' => 'auth'], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('register', [AuthController::class,'register']);

    

});
Route::middleware(['auth:api'])->group(function(){
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('profile', [AuthController::class,'profile']);

});


Route::apiResource('/student', StudentController::class);
Route::apiResource('/course', CourseController::class);
Route::post('/student/{studentId}/course/{courseId}', [StudentController::class, 'addCourseToStudent']);
