<?php

use App\Models\Clientes;
use Facade\FlareClient\Http\Client;
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

Route::get('/', function () {
    return view('inicio');
});
Route::get('/dondeEstamos', function () {
    return view('dondeEstamos');
});
Route::get('/quienesSomos', function () {
    return view('quienesSomos');
});
Route::get('/foro', function () {
    return view('foro');
});

// // Sintaxis para la insercion de datos mediante SQLQuery

// Route::get('/insertar', function() {
// DB::insert('insert into cliente (nombre,apelllidos,direccion,correo,telefono) values (?, ?, ?, ?, ?)', 
// ['Alejandro', 'Ortega', 'Ebanos#105', 'ale@gmail.com', '7641555428']);
// });

// // Sintaxis para la busqueda de datos mediante SQLQuery

// Route::get('cliente/{id}', function ($id){
//     $res = DB::select('select * from cliente where  id= ?', [$id]);
//     foreach($res as $cliente){
//         return $cliente->nombre;
//     }
// });

// // Sintaxis para la actualizar de datos mediante SQLQuery

// Route::get('/actualizar', function() {
//     DB::update("update cliente set direccion = 'Allende # 152, Xicotepec de Juarez' where id= ?",[1]); 
//     });

// // Sintaxis para eliminar datos mediante SQLQuery
// Route::get('/delete', function (){
//    DB::delete('delete from cliente where id = ?', [1]) ;
// });


// // Sintaxis de ruta mediante eloquent para mostrar datos de la tabla clientes
// Route::get('/data-clientes', function () {
//     $cliente = Cliente::all();
//     foreach ($cliente as $cliente) {
//         echo "Nombre :". $cliente -> nombre." " ."Apellidos:".$cliente->apelllidos." "."Direccion:". $cliente-> direccion."<br>";
//     }
// });

// //Sintaxis usando comodines para buscar un usuario(s) por nombre
// Route::get('/consulta-comodin', function () {
//   $cliente = Cliente::where("nombre","Alejandro")->get(); 
//   return $cliente;
    
// });

// //Sintaxis usando comodines para buscar un usuario(s) por medio de 2 parametros
// Route::get('/consulta-comodin-parametros', function () {
//     $cliente = Cliente::where("nombre","Alejandro")->orderBy("apelllidos","asc")->get(); 
//     return $cliente;
      
//   });
  
// //Sintaxis usando comodines para  insertar un usuario

// Route::get('/consulta-comodin-insert', function () {
//     $cliente = new Cliente;
//     $cliente -> nombre = "Arturo";
//     $cliente -> apelllidos = "Gonzales";
//     $cliente -> direccion = "Tuxpan Veracruz";
//     $cliente-> correo = "art@hotmail.es";
//     $cliente-> telefono = "7641233985";

//     $cliente -> save();

// });

// //Sintaxis usando comodines para  editar un usuario

// Route::get('/consulta-comodin-update', function () {
//     // Se busca al usuario por su Id
//     $cliente = Cliente::find(3);
//     //Campos a editar
//     $cliente -> direccion = "Poza Rica Veracruz";
//     $cliente-> correo = "miguelGutierrez@hotmail.com";
//     $cliente-> telefono = "7861233985";

//     $cliente -> save();

// });
      
// //Sintaxis usando comodines para editar masivamente
// Route::get('/consulta-comodin-update-all', function(){
//     Cliente::where ("nombre", "Alejandro")-> update (["direccion" =>"Vicente Guerrero #143"]);
// });

// //Sintaxis usando comodines para eliminar un usuario
// Route::get('/consulta-comodin-delete', function () {
//     $cliente = Cliente::find(6);
//     $cliente -> delete();
// });


// Route::get('/consultar', function(){
//   $cliente = Clientes::all();
//   foreach($cliente as $cliente){
//       echo "Nombre:".$cliente->nombre."&nbsp;&nbsp; "."Apellidos:".$cliente->apelllidos."<br>";
//   }
// });