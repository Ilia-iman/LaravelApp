<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Http\Request;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\TestControllerConstruct;
use App\Http\Controllers\SingleAction;
use App\Http\Controllers\Admin\RouteGroupController;
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
//[UserController::class, 'show']


Route::get('/', function () {
    return view('welcome');
});

//Роуты без параметров
Route::get('/', [TestController::class, 'mainMethod'])->name('main');
Route::get('/test', [TestController::class, 'someMethod']);
Route::get('/posts', [TestController::class, 'showPosts']);
Route::get('/services', [TestController::class, 'goodMethod']);

//Login route
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginStore'])->name('loginStore');
Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');

//Documentation Validation, $validated = $request->validate();
Route::get('/postDoc', [AuthController::class, 'createDoc']);
Route::post('/postDoc', [AuthController::class, 'storeDoc'])->name('storeDoc');

//Tutorial Validation routes
Route::get('/register', [AuthController::class, 'showForm']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

//Роут принимающий параметры с регуляркой, (параметры не обязательны)
Route::get('/test2/{name?}/{surname?}', [TestController::class, 'someMethod2'])->where('name', '[A-Za-z]+');

//Групповые роуты
Route::group(['namespace' => 'Admin', 'prefix' => '/admin'], function () {
    Route::get('/post/list', [RouteGroupController::class, 'listPosts']);
    Route::post('/post/add', [RouteGroupController::class, 'addPost']);
});

//Single Action Controller
Route::get('/singleAction', SingleAction::class);


//Это дефолтный роут, когда не попал не в один
/*Route::any('{any}', function (){
    return 'This is default route';
})->where('any', '(.*)?');*/

//Старая версия вызова метода из контроллера
//Route::get('/test', 'App\Http\Controllers\TestController@someMethod');
