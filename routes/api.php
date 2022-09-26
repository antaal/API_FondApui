<?php

use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\QuartierController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\OffreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function(){
    Route::get('/user',[AuthController::class,'user']);
});
    Route::controller(ProjetsController::class)->group(function () {
        Route::get('/projets', 'ProjetsController@index');
        Route::get('/projets/{id}', 'ProjetsController@show');
        Route::post('/projets', 'ProjetsController@store');
        Route::put('/projets/{id}', 'ProjetsController@update');
        Route::delete('/projets/{id}', 'ProjetsController@destroy');
    });

    Route::controller(ResponsableController::class)->group(function () {
        Route::get('/responsables', 'ResponsableController@index');
        Route::get('/responsables/{id}', 'ResponsableController@show');
        Route::post('/responsables', 'ResponsableController@store');
        Route::put('/responsables/{id}', 'ResponsableController@update');
        Route::delete('/responsables/{id}', 'ResponsableController@destroy');
    });

// get('/user', function (Request $request) {
//     return $request->user();
//route Api/Authcontroller::controllers



Route::controller(CommuneController::class)->group(function () {
    Route::get('/communes', 'CommuneController@index');
    Route::get('/communes/{id}', 'CommuneController@show');
    Route::post('/communes', 'CommuneController@store');
    Route::put('/communes/{id}', 'CommuneController@update');
    Route::delete('/communes/{id}', 'CommuneController@destroy');
});
Route::controller(DepartementController::class)->group(function () {
    Route::get('/departements', 'DepartementController@index');
    Route::get('/departements/{id}', 'DepartementController@show');
    Route::post('/departements', 'DepartementController@store');
    Route::put('/departements/{id}', 'DepartementController@update');
    Route::delete('/departements/{id}', 'DepartementController@destroy');
});
Route::controller(RegionController::class)->group(function () {
    Route::get('/regions', 'RegionController@index');
    Route::get('/regions/{id}', 'RegionController@show');
    Route::post('/regions', 'RegionController@store');
    Route::put('/regions/{id}', 'RegionController@update');
    Route::delete('/regions/{id}', 'RegionController@destroy');
});







Route::controller(SecteurController::class)->group(function () {
    Route::get('/secteurs', 'SecteurController@index');
    Route::get('/secteurs/{id}', 'SecteurController@show');
    Route::post('/secteurs', 'SecteurController@store');
    Route::put('/secteurs/{id}', 'SecteurController@update');
    Route::delete('/secteurs/{id}', 'SecteurController@destroy');
});



// Route::controller(OffreController::class)->group(function () {
//     Route::get('/offres', 'OffreController@index');
//     Route::get('/offres/{id}', 'OffreController@show');
//     Route::post('/offres', 'OffreController@store');
//     Route::put('/offres/{id}', 'OffreController@update');
//     Route::delete('/offres/{id}', 'OffreController@destroy');
// });

Route::resource('offres',OffreController::class);





Route::controller(QuartierController::class)->group(function () {
    Route::get('/quartiers', 'QuartierController@index');
    Route::get('/quartiers/{id}', 'QuartierController@show');
    Route::post('/quartiers', 'QuartierController@store');
    Route::put('/quartiers/{id}', 'QuartierController@update');
    Route::delete('/quartiers/{id}', 'QuartierController@destroy');
});





