<?php

use App\Http\Controllers\Admin\adminAuthController;
use App\Http\Controllers\Admin\gradeController;
use App\Http\Controllers\Admin\managerController;
use App\Http\Controllers\Admin\schoolController;
use App\Http\Controllers\Manager\managerAuthController;
use App\Http\Controllers\Manager\schoolTeacherController;
use App\Http\Controllers\Manager\teacherController;
use App\Http\Controllers\User\userAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');





