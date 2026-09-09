<!-- ?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('movies')->name('movies.')->group(function () {
    Route::get('/', [MovieController::class, 'index'])->name('index');
    Route::get('/{id}', [MovieController::class, 'show'])->name('show');
});


Route::get('/test-movies', [MovieController::class, 'test']);


Route::get('/test-movie', function () {
    return view('movies.testmovieform');
});

Route::get('/add-movie', [MovieController::class, 'create']);
// Route::resource('movies', MovieController::class); -->

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies', [MovieController::class, 'index']);