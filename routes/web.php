<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\OldRecordsTaxRegistryMail;
use App\Http\Controllers\PinCodeController;


Route::get('/', [PinCodeController::class, 'index'])->name('tr.home');

Route::post('tr/pin', [PinCodeController::class, 'show'])->name('tr.show');

Route::post('tr/record', [PinCodeController::class, 'record'])->name('tr.record');

Route::post("tr/store", [PinCodeController::class, "store"])->name("tr.store");

Route::get('tr/status', [PinCodeController::class, 'status'])->name('tr.status');

