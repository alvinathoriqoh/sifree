
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Perusahaan;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('layout.master');
});

    Route::get('/lelang','ProyekController@lelang');

    Route::get('/perusahaan/profil/{id}','PerusahaanController@detail');
   
    Route::get('/freelancer/edit/{id}','FreelancerController@edit');
    Route::get('/freelancer/proyek','ProyekController@proyekfree');
    Route::get('/freelancer/detail/{id}','ProyekController@det');

    Route::get('/proyek','ProyekController@index');
    Route::get('/proyek/tambah','ProyekController@tambah');
    Route::post('/proyek/simpan','ProyekController@simpan');
    Route::get('/proyek/detail/{id}','ProyekController@detail');
    Route::get('/proyek/dl/{file}','ProyekController@dl');
    // Route::get('/proyek/dl/{file}',function(){
    //     Artisan::call('Storage:proyek');});
    Route::get('/proyek/delete/{id}','ProyekController@delete');
    Route::get('/proyek/edit/{id}','ProyekController@edit');
    Route::get('/proyek/update/{id}','ProyekController@update');
    Route::get('/proyeksaya','ProyekController@saya');
    Route::get('/proyeksaya/{id}','ProyekController@acc');
   //});

    // Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
    //     Route::resource('lelang',ProyekController::class);
        Route::get('/lelang','ProyekController@lelang');
        //perusahaan
        Route::get('/perusahaan','UserrController@perusahaan');
        //freelancer
        Route::get('/freelancer','UserrController@freelancer');
        //admin approve
        Route::get('/admin/users','AdminController@index');
        Route::get('/admin/enable','AdminController@data');
        Route::get('/admin/status/{id}','AdminController@status');
        Route::get('/admin/acc','AdminController@indexx');
        Route::get('/admin/acc/{id}','AdminController@acc');
        //admin regis
        Route::get('/admin/regis','AdminController@regis');
        Route::get('/admin/tambah','AdminController@tambah');
        Route::post('/admin/simpan','AdminController@simpan');
//             });
// });



//jetsreams
// Route::middleware(['auth:sanctum', 'verified'])->get('/proyek', function () {
//     return view('proyek.data');
// })->name('proyek')
// Route::get('perusahaaan', Perusahaan::class); 