<?php



use app\Models\SubSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Sub;
use App\Models\Subsal as dd;

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

Route::post('/suuu', [Sub::class, 'dd']);
Route::get('/ss', [Sub::class, 'index']);
Route::get('/user/{id}', function ($id) {

    return User::findOrFail($id);
});


Route::get('/sub', function () {
    // dd('ss');
    return view('subsalse@user');
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
    $u->Badgenumber = $request->Badgenumber;
    $u->name = $request->name;
    $u->OPHONE = $request->OPHONE;
    $u->email = $request->email;
    $u->password = $request->password;
    $u->Gym_plass = $request->Gym_plass;

    if ($u->save()) {
        return "ok";
    } else {
        return "no";
    }
});


Route::post('/suuu1', function (Request $request) {


    // $data = $request->validate([
    //     'name' => 'required'
    // ]);
    $u = new dd();
    // $u->Sid = $request->Sid;
    $u->Scid = $request->Scid;
    // $u->said = $request->said;
    $u->Sdate = $request->Sdate;
    // $u->Sfrom = $request->Sfrom;
    // $u->Sto =  $request->Sto;
    // $u->Svalue = $request->Svalue;
    // $u->Sdiscount = $request->Sdiscount;
    // $u->Spaid = $request->Spaid;
    // $u->Srest = $request->Srest;


    if ($u->save()) {
        return "ok";
    } else {
        return "no";
    }
});

Route::group(['middekware' => 'auth:api', 'namespace' => 'Api'], function () {
    Route::get('/s',  'Sub@index');
});
