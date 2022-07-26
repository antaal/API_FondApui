<?php

use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\ActivitesController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\AssociationsController;
use App\Http\Controllers\BeneficiairesController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\EntreprisesController;
use App\Http\Controllers\ObjectifController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\QuartierController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\ResultatsController;
use App\Http\Controllers\SecteurController;
use App\Http\Controllers\StatutController;
use App\Http\Controllers\RisquesController;
use App\Http\Controllers\StrategiesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AdministrateurController::class)->group(function () {
    Route::get('/administrateurs', 'AdministrateurController@index');
    Route::get('/administrateurs/{id}', 'AdministrateurController@show');
    Route::post('/administrateurs', 'AdministrateurController@store');
    Route::put('/administrateurs/{id}', 'AdministrateurController@update');
    Route::delete('/administrateurs/{id}', 'AdministrateurController@destroy');
});
Route::controller(AssociationsController::class)->group(function () {
    Route::get('/associations', 'AssociationsController@index');
    Route::get('/associations/{id}', 'AssociationsController@show');
    Route::post('/associations', 'AssociationsController@store');
    Route::put('/associations/{id}', 'AssociationsController@update');
    Route::delete('/associations/{id}', 'AssociationsController@destroy');
});
Route::controller(BeneficiairesController::class)->group(function () {
    Route::get('/beneficiaires', 'BeneficiairesController@index');
    Route::get('/beneficiaires/{id}', 'BeneficiairesController@show');
    Route::post('/beneficiaires', 'BeneficiairesController@store');
    Route::put('/beneficiaires/{id}', 'BeneficiairesController@update');
    Route::delete('/beneficiaires/{id}', 'BeneficiairesController@destroy');
});
Route::controller(BudgetController::class)->group(function () {
    Route::get('/budgets', 'BudgetController@index');
    Route::get('/budgets/{id}', 'BudgetController@show');
    Route::post('/budgets', 'BudgetController@store');
    Route::put('/budgets/{id}', 'BudgetController@update');
    Route::delete('/budgets/{id}', 'BudgetController@destroy');
});
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
Route::controller(EntreprisesController::class)->group(function () {
    Route::get('/entreprises', 'EntreprisesController@index');
    Route::get('/entreprises/{id}', 'EntreprisesController@show');
    Route::post('/entreprises', 'EntreprisesController@store');
    Route::put('/entreprises/{id}', 'EntreprisesController@update');
    Route::delete('/entreprises/{id}', 'EntreprisesController@destroy');
});
Route::controller(ObjectifController::class)->group(function () {
    Route::get('/objectifs', 'ObjectifController@index');
    Route::get('/objectifs/{id}', 'ObjectifController@show');
    Route::post('/objectifs', 'ObjectifController@store');
    Route::put('/objectifs/{id}', 'ObjectifController@update');
    Route::delete('/objectifs/{id}', 'ObjectifController@destroy');
});
Route::controller(PlanningController::class)->group(function () {
    Route::get('/plannings', 'PlanningController@index');
    Route::get('/plannings/{id}', 'PlanningController@show');
    Route::post('/plannings', 'PlanningController@store');
    Route::put('/plannings/{id}', 'PlanningController@update');
    Route::delete('/plannings/{id}', 'PlanningController@destroy');
});
Route::controller(QuartierController::class)->group(function () {
    Route::get('/quartiers', 'QuartierController@index');
    Route::get('/quartiers/{id}', 'QuartierController@show');
    Route::post('/quartiers', 'QuartierController@store');
    Route::put('/quartiers/{id}', 'QuartierController@update');
    Route::delete('/quartiers/{id}', 'QuartierController@destroy');
});
Route::controller(ResponsableController::class)->group(function () {
    Route::get('/responsables', 'ResponsableController@index');
    Route::get('/responsables/{id}', 'ResponsableController@show');
    Route::post('/responsables', 'ResponsableController@store');
    Route::put('/responsables/{id}', 'ResponsableController@update');
    Route::delete('/responsables/{id}', 'ResponsableController@destroy');
});
Route::controller(RisquesController::class)->group(function () {
    Route::get('/risques', 'RisquesController@index');
    Route::get('/risques/{id}', 'RisquesController@show');
    Route::post('/risques', 'RisquesController@store');
    Route::put('/risques/{id}', 'RisquesController@update');
    Route::delete('/risques/{id}', 'RisquesController@destroy');
});
Route::controller(ProjetsController::class)->group(function () {
    Route::get('/projets', 'ProjetsController@index');
    Route::get('/projets/{id}', 'ProjetsController@show');
    Route::post('/projets', 'ProjetsController@store');
    Route::put('/projets/{id}', 'ProjetsController@update');
    Route::delete('/projets/{id}', 'ProjetsController@destroy');
});
Route::controller(ActivitesController::class)->group(function () {
    Route::get('/activites', 'ActivitesController@index');
    Route::get('/activites/{id}', 'ActivitesController@show');
    Route::post('/activites', 'ActivitesController@store');
    Route::put('/activites/{id}', 'ActivitesController@update');
    Route::delete('/activites/{id}', 'ActivitesController@destroy');
});
Route::controller(SecteurController::class)->group(function () {
    Route::get('/secteurs', 'SecteurController@index');
    Route::get('/secteurs/{id}', 'SecteurController@show');
    Route::post('/secteurs', 'SecteurController@store');
    Route::put('/secteurs/{id}', 'SecteurController@update');
    Route::delete('/secteurs/{id}', 'SecteurController@destroy');
});
Route::controller(StrategiesController::class)->group(function () {
    Route::get('/strategies', 'StrategiesController@index');
    Route::get('/strategies/{id}', 'StrategiesController@show');
    Route::post('/strategies', 'StrategiesController@store');
    Route::put('/strategies/{id}', 'StrategiesController@update');
    Route::delete('/strategies/{id}', 'StrategiesController@destroy');
});
Route::controller(ResultatsController::class)->group(function () {
    Route::get('/resultats', 'ResultatsController@index');
    Route::get('/resultats/{id}', 'ResultatsController@show');
    Route::post('/resultats', 'ResultatsController@store');
    Route::put('/resultats/{id}', 'ResultatsController@update');
    Route::delete('/resultats/{id}', 'ResultatsController@destroy');
});
Route::controller(StatutController::class)->group(function () {
    Route::get('/statuts', 'StatutController@index');
    Route::get('/statuts/{id}', 'StatutController@show');
    Route::post('/statuts', 'StatutController@store');
    Route::put('/statuts/{id}', 'StatutController@update');
    Route::delete('/statuts/{id}', 'StatutController@destroy');
});
Route::controller(OffreController::class)->group(function () {
    Route::get('/offres', 'OffreController@index');
    Route::get('/offres/{id}', 'OffreController@show');
    Route::post('/offres', 'OffreController@store');
    Route::put('/offres/{id}', 'OffreController@update');
    Route::delete('/offres/{id}', 'OffreController@destroy');
});













