<?php

use Illuminate\Support\Facades\Route;
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

// Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


//RUTAS PARA LOGIN
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/logout',  [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'form', /* 'middleware' => 'auth' */], function () {
    Route::post('/status', [App\Http\Controllers\FormController::class, 'get_form_paypal'])->name('form.get');
    Route::post('/save/paypal', [App\Http\Controllers\FormController::class, 'save_form_paypal'])->name('form.paypal');
    Route::post('/save/BolivaresColVen', [App\Http\Controllers\FormController::class, 'save_form_bolivares_colven'])->name('form.bolivares.colven');
    Route::post('/save/BolivaresPeruVen', [App\Http\Controllers\FormController::class, 'save_form_bolivares_peruven'])->name('form.bolivares.peruven');
});

Route::group(['prefix' => 'home', 'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
    // control de formularios
    Route::get('/get/forms', [App\Http\Controllers\FormController::class, 'get_data_forms'])->name('form.get.data');
    Route::post('/requests/status', [App\Http\Controllers\FormController::class, 'set_status_form'])->name('form.status');
    // control de archivos
    Route::post('/save/file', [App\Http\Controllers\FormController::class, 'set_from_file'])->name('save.file');
    Route::post('/get/file', [App\Http\Controllers\FormController::class, 'get_from_file'])->name('get.file');
    Route::post('/delete/file', [App\Http\Controllers\FormController::class, 'delete_from_file'])->name('delete.file');
    // control de tasas
    Route::get('/get/all', [App\Http\Controllers\TasaController::class, 'all_tasas'])->name('tasa.get.all');
    Route::get('/get/tasa/{id}', [App\Http\Controllers\TasaController::class, 'get_tasa'])->name('tasa.get.data');
    Route::get('/update/tasa/{id}/{valor}', [App\Http\Controllers\TasaController::class, 'update_tasa'])->name('tasa.update.data');
});

// RUTAS PARA EL CONTROL DE VISTAS
Route::group(['prefix' => 'sites', /* 'middleware' => 'auth' */], function () {
    Route::get('/welcome', [App\Http\Controllers\SitesController::class, 'index'])->name('site.welcome');
    Route::get('/BolivaresPeruVen', [App\Http\Controllers\SitesController::class, 'index_bolivares_peru_ven'])->name('site.BolivaresPeruVen');
    Route::get('/CamPayPeru', [App\Http\Controllers\SitesController::class, 'index_cam_pay_peru'])->name('site.CamPayPeru');
    Route::get('/contacto', [App\Http\Controllers\SitesController::class, 'index_contacto'])->name('site.contacto');
    Route::get('/politicas', [App\Http\Controllers\SitesController::class, 'index_politicas'])->name('site.politicas');
    Route::get('/verificarPaypal', [App\Http\Controllers\SitesController::class, 'index_verificar_paypal'])->name('site.verificarPaypal');
    Route::get('/otrosServicios', [App\Http\Controllers\SitesController::class, 'index_otros_servicios'])->name('site.otrosServicios');
    Route::get('/BolivaresColVen', [App\Http\Controllers\SitesController::class, 'index_bolivares_col_ven'])->name('site.BolivaresColVen');
    Route::get('/login', [App\Http\Controllers\SitesController::class, 'index_login'])->name('site.login');
});

Route::group(['prefix' => 'tasa', /* 'middleware' => 'auth' */], function () {
    Route::post('/get/data', [App\Http\Controllers\TasaController::class, 'get_tasa_convert'])->name('tasa.get');
});

