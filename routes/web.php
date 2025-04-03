<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\BarangayController;

Route::get('/', [MunicipalityController::class, 'index'])->name('index');
Route::get('/municipalities', [MunicipalityController::class, 'index'])->name('municipality.index');
Route::get('/municipalities/{id}', [MunicipalityController::class, 'show'])->name('municipality.show');
Route::post('/municipality/upload-image', [MunicipalityController::class, 'uploadMunicipalityImage'])->name('municipality.uploadImage');
Route::post('/barangay/upload-image', [BarangayController::class, 'uploadImage'])->name('barangay.uploadImage');

Route::get('/', function () {
    return redirect()->route('municipality.index');
});


// Example for route with dynamic parameter
// Route::get('/municipality/{id}', [MunicipalityController::class, 'show'])->name('municipality.show');

// Example for form submission using POST
// Route::post('/municipality', [MunicipalityController::class, 'store'])->name('municipality.store');

// Example for updating a record using PUT or PATCH
// Route::put('/municipality/{id}', [MunicipalityController::class, 'update'])->name('municipality.update');

// Example for deleting a record
// Route::delete('/municipality/{id}', [MunicipalityController::class, 'destroy'])->name('municipality.destroy');

// Simple route using view
// Route::view('/', 'welcome');

// Redirect route example
// Route::permanentRedirect('/welcome', '/');

// Return JSON response example
// Route::get('/request-json', function() {
//     return response()->json(['name' => 'Alfred', 'lastname' => 'Mag-aso', 'age' => '21']);
// });

// File download example
// Route::get('/request-download', function() {
//     $path = public_path() . '/sample.txt';
//     $name = 'alfred file';
//     $header = array('Content-Type: application/pdf');
//     return response()->download($path, $name, $header);
// });
