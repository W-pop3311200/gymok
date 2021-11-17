<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', function () {
    return "API";
});

Route::get('/user/{id}', function ($id) {
   
   return User::findOrFail($id);
});

Route::post('/user', function () {
   
    $u = new User();
    $u->name = "farid";
    $u->email = "farid@gmail.com";
    $u->password = "123456";
    $u->save();

 });

 Route::post('/register', function (Request $request) {


    $data = $request->validate([
        'name' => 'required'
    ]);
   
    $u = new User();
    $u->name = $request->name;
    $u->email = $request->email;
    $u->password = $request->password;
    // if($u->save()){
    //     return "ok";
    // }else{
    //     return "no";
    // }

 });


