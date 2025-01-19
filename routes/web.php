<?php

use App\Models\Memo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('memos', MemoController::class);
