<?php

use App\Http\Controllers\homeController;
// use app\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;
// require_once __DIR__.'/app/Http/Controllers/viewController.php';
// use app\Http\Controllers\ViewController;
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

Route::get('/', [homeController::class , 'showidex']);
