<?php
use App\Models\Address as Address;
use App\Models\Bill_Address as Bill_Address;
use App\Models\Brand as Brand;
use App\Models\Category as Category;
use App\Models\Color as Color;
use App\Models\Country as Country;
use App\Models\Cupon as Cupon;
use App\Models\Feature as Feature;
use App\Models\Order as Order;
use App\Models\Product as Product;
use App\Models\Profile as Profile;
use App\Models\Size as Size;
use App\Models\State as State;
use App\Models\Stock as Stock;
use App\Models\User as User;
use App\Models\Wish_List as Wish_List;



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

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});

/*
*¨RUTAS DE PRUEBA
*/

//regresa todo los estados que pertenezcan al pais con id
Route::get('States', function(){
	$states = State::find(1)->country; 
	return $states;
});

//regresa todos los paises que pertenezcan al estado con id
Route::get('Countries', function(){
	$countries = Country::find(1)->state; 
	return $countries;
});

//regresa todas las direcciones que tiene el estado con ese id
Route::get('Addresses', function(){

	$adresses = State::find(136)->address; 

	return $adresses;
	/*if(empty($adresses)){
		echo "no hay datos";
	}else{
		return $adresses;
	}*/

});
//regresa todas las direcciones que tiene el estado con ese id
Route::get('Bill_Addresses_State', function(){

	$adresses = State::find(224)->billAddresses; 

	return $adresses;

});

 //regresa todas las direcciones que tiene el user con ese id
Route::get('User_Addresses', function(){
	$userAddresses = User::find(1)->address;
	return $userAddresses;
});


//regresa todas las direcciones que tiene el user con ese id
Route::get('Bill_Addresses_user', function(){
	$billAddresses = User::find(1)->billAddress; 
	return $billAddresses;
});


//regresa los usuarios que tienen el perfil  2
Route::get('Users', function(){
	$users = Profile::find(2)->user; 
	return $users;
});


//regresa todos los productos que pertenezcan al id de la categoria
Route::get('Categories', function(){
		$categories = Category::find(1)->product;
		return $categories;
});