<?php
use Ripon\ScratchCard\Http\Controllers\ScratchController;

Route::group(['namespace'=>'Ripon\ScratchCard\Https\Controllers'],function(){
    Route::get('scratch-card/{token}',[ScratchController::class,'show'])->name('scratch');
});
