<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function (Request $request) {
    return response()->json([
        'success' => true,
        'message' => trans('Api return ok'),
    ]);
});

