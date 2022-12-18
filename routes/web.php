<?php

use App\Http\Controllers\ElaqeController;
use App\Http\Controllers\HaqqindaController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;



// Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/haqqinda', [HaqqindaController::class, 'index'])->name('haqqinda');
Route::get('/haqqinda/{ad}', [HaqqindaController::class, 'person'])->name('person');
Route::get('/elaqe', [ElaqeController::class, 'index'])->name('elaqe');
Route::get('/telebe', [MainController::class, 'index1'])->name('telebe');
Route::post('/elaqe/post', [ElaqeController::class, 'elaqePost'])->name('form-elaqe');
Route::get('/', [TeacherController::class, 'index'])->name('teacher');
Route::post('/teacher/elave', [TeacherController::class, 'insert'])->name('insert-teacher');
Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('delete-teacher');
Route::get('/teacher/make/{id}', [TeacherController::class, 'make'])->name('make-teacher');
Route::post('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('edit-teacher');




// Route::get('/telebe/{ad?}/{yas?}', function ($ad = null, $yas = null) {
//     return 'telebe adi' . $ad . $yas;
// })->where(['yas' => '[0-9]+', 'ad' => '[A-Za-z]+']);

Route::prefix('/telebe')->group(function () {
    Route::get('/{ad}', function ($ad) {
        return $ad;
    });
    Route::get('/{ad}/{yas}', function ($ad, $yas) {
        return $yas;
    });
});
