<?php

use App\Models\StockAdmin;
use App\Models\StockSecretaire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\AnneeController;
use App\Http\Controllers\DetteController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\VenteController;
use App\Http\Controllers\CarnetController;
use App\Http\Controllers\PaysanController;
use App\Http\Controllers\SaisonController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DistributionController;
use App\Http\Controllers\StockSecretaireController;
use App\Http\Controllers\Admin\StockadminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\StockAdministrateurController;
use App\Http\Controllers\StockAdminController as ControllersStockAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['admin.dashboard', 'verified'])->name('dashboard');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin/dashboard');

Route::get('admin/paysans/create', function () {
    return view('admin.paysans.create');
})->name('admin/paysans/create');

















Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';








Route::get('/admin/paysans', [PaysanController::class, 'index'])->name('admin.paysans.index');
Route::get('/admin/paysans/create', [PaysanController::class, 'create'])->name('admin.paysans.create');
Route::post('/admin/paysans', [PaysanController::class, 'store'])->name('admin.paysans.store');
Route::get('/admin/paysans/{paysan}/edit', [PaysanController::class, 'edit'])->name('admin.paysans.edit');
Route::put('/admin/paysans/{paysan}', [PaysanController::class, 'update'])->name('admin.paysans.update');
Route::delete('/paysans/{paysan}', 'PaysanController@destroy')->name('admin.paysans.destroy');



Route::get('/admin/produits', [ProduitController::class, 'index'])->name('admin.produits.index');
Route::get('/admin/produits/create', [ProduitController::class, 'create'])->name('admin.produits.create');
Route::post('/admin/produits', [ProduitController::class, 'store'])->name('admin.produits.store');
Route::get('/produits/{produit}', [ProduitController::class, 'show'])->name('admin.produits.show');
Route::get('/admin/produits/{produit}/edit', [ProduitController::class, 'edit'])->name('admin.produits.edit');
Route::put('/admin/produits/{produit}', [ProduitController::class, 'update'])->name('admin.produits.update');
Route::delete('/produits/{produit}', [ProduitController::class, 'destroy'])->name('admin.produits.destroy');

Route::get('/admin/distributions', [DistributionController::class, 'index'])->name('admin.distributions.index');
Route::get('/admin/distributions/create', [DistributionController::class, 'create'])->name('admin.distributions.create');
Route::post('/admin/distributions', [DistributionController::class, 'store'])->name('admin.distributions.store');
Route::get('/distributions/{distribution}', [DistributionController::class, 'show'])->name('admin.distributions.show');
Route::get('/admin/distributions/{distribution}/edit', [DistributionController::class, 'edit'])->name('admin.distributions.edit');
Route::put('/admin/distributions/{distribution}', [DistributionController::class, 'update'])->name('admin.distributions.update');
Route::delete('/distributions/{distribution}', [DistributionController::class, 'destroy'])->name('admin.distributions.destroy');

Route::get('/admin/dettes', [DetteController::class, 'index'])->name('admin.dettes.index');
Route::get('/admin/dettes/create', [DetteController::class, 'create'])->name('admin.dettes.create');
Route::post('/admin/dettes', [DetteController::class, 'store'])->name('admin.dettes.store');
Route::get('/dettes/{dette}', [DetteController::class, 'show'])->name('admin.dettes.show');
Route::get('/admin/dettes/{dette}/edit', [DetteController::class, 'dette'])->name('admin.dettes.edit');
Route::put('/admin/dettes/{dette}', [DetteController::class, 'update'])->name('admin.dettes.update');
Route::delete('/dettes/{dette}', [DetteController::class, 'destroy'])->name('admin.dettes.destroy');





Route::get('/admin/stockadministrateurs', [StockAdministrateurController::class,  'index'])->name('admin.stockadministrateurs.index');
Route::get('/admin/stockadministrateurs/create', [StockAdministrateurController::class, 'create'])->name('admin.stockadministrateurs.create');
Route::post('/admin/stockadministrateurs', [StockAdministrateurController::class, 'store'])->name('admin.stockadministrateurs.store');
Route::get('/stockadministrateurs/{stockadministrateur}', [StockAdministrateurController::class, 'show'])->name('admin.stockadministrateurs.show');
Route::get('/admin/stockadministrateurs/{stockadministrateur}/edit', [StockAdministrateurController::class, 'dette'])->name('admin.stockadministrateurs.edit');
Route::put('/admin/stockadministrateurs/{stockadministrateur}', [StockAdministrateurController::class, 'update'])->name('admin.stockadministrateurs.update');
Route::delete('/stockadministrateurs/{stockadministrateur}', [StockAdministrateurController::class, 'destroy'])->name('admin.stockadministrateurs.destroy');


Route::get('/admin/stocksecretaires', [StockSecretaireController::class,  'index'])->name('admin.stocksecretaires.index');


Route::get('/select-departement', [DepartementController::class, 'index']);
Route::get('/get-communes/{departementId}', [DepartementController::class, 'getCommunes']);




Route::prefix('admin')->group(function () {
    Route::get('/ventes', [VenteController::class, 'index'])->name('admin.ventes.index');
    Route::get('/ventes/create', [VenteController::class, 'create'])->name('admin.ventes.create');
    Route::post('/ventes', [VenteController::class, 'store'])->name('admin.ventes.store');
    Route::get('/ventes/{vente}', [VenteController::class, 'show'])->name('admin.ventes.show');
    Route::get('/ventes/{vente}/edit', [VenteController::class, 'edit'])->name('admin.ventes.edit');
    Route::put('/ventes/{vente}', [VenteController::class, 'update'])->name('admin.ventes.update');
    Route::delete('/ventes/{vente}', [VenteController::class, 'destroy'])->name('admin.ventes.destroy');
});


// Routes pour les paiements
Route::get('/admin/payements', [PayementController::class, 'index'])->name('admin.payements.index');
Route::get('/admin/payements/create', [PayementController::class, 'create'])->name('admin.payements.create');
Route::post('/admin/payements', [PayementController::class, 'store'])->name('admin.payements.store');
Route::get('/admin/payements/{payement}', [PayementController::class, 'show'])->name('admin.payements.show');
Route::get('/admin/payements/{payement}/edit', [PayementController::class, 'edit'])->name('admin.payements.edit');
Route::put('/admin/payements/{payement}', [PayementController::class, 'update'])->name('admin.payements.update');
Route::delete('admin/payements/{payement}', [PayementController::class, 'destroy'])->name('admin.payements.destroy');
