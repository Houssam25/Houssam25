<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PDFController;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


///////////////////////////////////////////////////////////////////////////////

Route::apiResource('employees' , EmployeeController::class);


Route::apiResource('invoices' , InvoiceController::class);



Route::get('generate-pdf/{invoiceId}', [PDFController::class, 'generatePDF']);

//->pdf

