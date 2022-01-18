<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/3', function () {
    //return view('welcome');
    return 'Hello Word';
});
Route::get('/2', function (){
    return 'MazzaFC';
}); 
 */

Route::get('/',  [HelloController::class, 'index']);

Route::get('/act', [HelloController::class, 'act']);