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
Route::get('/administrateurs', [AdministrateurController::class, 'index']);
Route::get('/regions', [RegionController::class, 'index']);
Route::get('/showregions/{id}', [RegionController::class, 'show']);
Route::get('/departements', [DepartementController::class, 'index']);
Route::get('/communes', [CommuneController::class, 'index']);
Route::get('/quartiers', [QuartierController::class, 'index']);
Route::get('/responsables', [ResponsableController::class, 'index']);
Route::get('/entreprises', [EntreprisesController::class, 'index']);
Route::get('/associations', [AssociationsController::class, 'index']);
Route::get('/projets', [ProjetsController::class, 'index']);
Route::get('/activites', [ActivitesController::class, 'index']);
Route::get('/secteurs', [SecteurController::class, 'index']);
Route::get('/budgets', [BudgetController::class, 'index']);
Route::get('/risques', [RisquesController::class, 'index']);
Route::get('/strategies', [StrategiesController::class, 'index']);
Route::get('/resultats', [ResultatsController::class, 'index']);
Route::get('/objectifs', [ObjectifController::class, 'index']);
Route::get('/beneficiaires', [BeneficiairesController::class, 'index']);
Route::get('/status', [StatutController::class, 'index']);
Route::get('/plannings', [PlanningController::class, 'index']);
Route::get('/offres', [OffreController::class, 'index']);


