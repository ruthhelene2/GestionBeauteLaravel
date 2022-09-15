<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//***********************Route la page d'acceuil pour tout le monde****************************************** */
 Route::get('/',[HomeController::class,'home'])->name('home');;


 //***********************Route pour les produits pour tout le monde****************************************** */

Route::get("/products", [ProductController::class, 'index'])->name('products.index');


// Route::resource('services', ServiceController::class);
// Route::resource('categories', CategorieController::class);
// Route::resource('products', ProductController::class);
// Route::resource('commandes', CommandeController::class);

//*********************Route pour tout le monde************************************* */

Route::get("/services", [ServiceController::class, 'index'])->name('services.index');
// Route::put("/services/{id}", [ServiceController::class, 'update'])->name('services.update'); //patch, put


//******************************Route pour les User*********************************************** */



//*************************Route pour le login et register********************************************* */
Route::get("/auth/login", [AuthController::class, 'getLogin'])->name("auth.login");
Route::post("/auth/login", [AuthController::class, 'postLogin'])->name("auth.postLogin");
Route::get("/auth/register", [AuthController::class, 'getRegister'])->name("auth.register");
Route::post("/auth/register", [AuthController::class, 'postRegister'])->name("auth.postRegister");


//*************************Route pour les middelware Admin********************************************* */
//Pour les route ['auth', 'userAdmin'] on doit dabord verifier si l'utilisateur est connecter ensuite 
// on verifie s'il est un admin
Route::middleware(['auth', 'userAdmin'])->group(function(){
    Route::get("/services/create", [ServiceController::class, 'create'])->name('services.create');
    Route::post("/services", [ServiceController::class, 'store'])->name('services.store');
    Route::get("/services/{service}/edit", [ServiceController::class, 'edit'])->name('services.edit');
    Route::delete("/services/{service}", [ServiceController::class, 'destroy'])->name('services.destroy');
    Route::put("/services/{service}", [ServiceController::class, 'update'])->name('services.update'); //patch, put

    Route::get("/products/create", [ProductController::class, 'create'])->name('products.create');
    Route::post("/products", [ProductController::class, 'store'])->name('products.store');
    Route::get("/products/{product}/edit", [ProductController::class, 'edit'])->name('products.edit');
    Route::delete("/products/{product}", [ProductController::class, 'destroy'])->name('products.destroy');
    Route::put("/products/{product}", [ProductController::class, 'update'])->name('products.update'); //patch, put
});

//*************************Route pour les middelware User********************************************* */
Route::middleware('auth')->group(function(){
    Route::get("/auth/logout", [AuthController::class, 'logout'])->name("auth.logout");
});

Route::get("/products/{product}", [ProductController::class, 'show'])->name('products.show');
Route::get("/services/{service}", [ServiceController::class, 'show'])->name('services.show');
//On utilise le model en minuscule pour remplacer les id dans toutes les routes