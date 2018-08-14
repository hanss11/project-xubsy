<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Route es facade, es una clase estatica que me permite usar la peticion por get
| Esto es una funcion anonimas
*/


//
// Route::get('/', function () {
//     echo 'Cualquier cosa';
//     echo '<br><br>';
//     echo 'Hola estoy escribiendo dentro de ejemplo de laravel';
// });
//
//
// Route::get('/miPrimerRuta', function () {
//     echo 'Creé mi primer ruta en Laravel';
// });
//
// Route::get('/resultado/{numero}', function ($input) {
//
//     if ($input%2==0){
//         return "El numero ingresado  $input  es par";
//     }else{
//         return "El numero ingresado  $input  es impar";
//     }
//
// });

/*
Route::get('holis/{numero}/{numeropcional?}', function($input1, $input2 = 1){

if ($input2 == 1)
{
  if ($input1%2==0){
      return "El numero ingresado  $input1  es par";
  }else{
      return "El numero ingresado  $input1  es impar";
  }
}
  else {  $resultado= $input1*$input2;
          return "El numero ingresado  es $input1 y es $input2, resultando $resultado";
  }
}); */


//Route::prefix('publicaciones')->group(function() {


//});

Route::get('/homeIndex', 'homecontroller@homeindex');

//Route::get('/homepage', 'homepagecontroller@homepage');
Route::get('/', 'homepagecontroller@homepage');

Route::get('/primeratabla', 'dbusercontroller@listar');

Route::get('/publicaciones', 'addpublication@pub');

Route::post('/publicaciones', 'addpublication@save');

Route::get('/paginar', 'pagecontroller@pag');

Route::post('/paginar', 'pagecontoller@pagsave');

Route::get('/migrar', 'migrarcontoller@pagmig');

Auth::routes();

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/posteo','postcontroller@savepost');

Route::get('/profile/{id}', 'profilecontroller@verperfil');
Route::get('/profile', 'profilecontroller@prof')->middleware('auth');

Route::get('/peoples', 'peoplecontroller@peoples');
Route::get('/search', 'peoplecontroller@busca');
Route::get('/magic','magiccontroller@magic');
//Route::get('/perfil', 'homecontroller@perfil')->middleware('auth')
