<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LangaugeController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ItemstypesController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\AddonsController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RestaurantmanagerController;
use App\Http\Controllers\KichenmanagerController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ReferralpointsController;
use App\Http\Controllers\LoyalitypointsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect(route('login'));
});



Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [CustomAuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [CustomAuthController::class, 'signup'])->name('register');
Route::post('/create-user', [CustomAuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [CustomAuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');

/*-----------------------------langauges-------------------------------------*/
Route::get('/langauges', [LangaugeController::class, 'index'])->name('langauges');
Route::get('/langauges/create',[LangaugeController::class,'create'])->name('langauges.create');
Route::post('/langauges/store',[LangaugeController::class,'store'])->name('langauges.store');
Route::get('/langauges/edit/{id}',[LangaugeController::class,'edit'])->name('langauges.edit');
Route::post('/langauges/update/{id}',[LangaugeController::class,'update'])->name('langauges.update');
Route::get('/langauges/show/{id}',[LangaugeController::class,'show'])->name('langauges.show');

Route::get('/langauges/status_active{id}',[LangaugeController::class,'status_active'])->name('langauges.active');
Route::get('/langauges/status_inactive{id}',[LangaugeController::class,'status_inactive'])->name('langauges.inactive');

/*-----------------------------CountryController-------------------------------------*/
Route::get('/countries', [CountryController::class, 'index'])->name('countries');
Route::get('/countries/create',[CountryController::class,'create'])->name('countries.create');
Route::post('/countries/store',[CountryController::class,'store'])->name('countries.store');
Route::get('/countries/edit/{id}',[CountryController::class,'edit'])->name('countries.edit');
Route::post('/countries/update/{id}',[CountryController::class,'update'])->name('countries.update');
Route::get('/countries/show/{id}',[CountryController::class,'show'])->name('countries.show');

Route::get('/countries/status_active{id}',[CountryController::class,'status_active'])->name('countries.active');
Route::get('/countries/status_inactive{id}',[CountryController::class,'status_inactive'])->name('countries.inactive');

/*-----------------------------CityController-------------------------------------*/
Route::get('/cities', [CityController::class, 'index'])->name('cities');
Route::get('/cities/create',[CityController::class,'create'])->name('cities.create');
Route::post('/cities/store',[CityController::class,'store'])->name('cities.store');
Route::get('/cities/edit/{id}',[CityController::class,'edit'])->name('cities.edit');
Route::post('/cities/update/{id}',[CityController::class,'update'])->name('cities.update');
Route::get('/cities/show/{id}',[CityController::class,'show'])->name('cities.show');

Route::get('/cities/status_active{id}',[CityController::class,'status_active'])->name('cities.active');
Route::get('/cities/status_inactive{id}',[CityController::class,'status_inactive'])->name('cities.inactive');



/*-----------------------------hotels-------------------------------------*/
Route::get('/hotels', [HotelsController::class, 'index'])->name('hotels');
Route::get('/hotels/create',[HotelsController::class,'create'])->name('hotels.create');
Route::post('/hotels/store',[HotelsController::class,'store'])->name('hotels.store');
Route::get('/hotels/edit/{id}',[HotelsController::class,'edit'])->name('hotels.edit');
Route::post('/hotels/update/{id}',[HotelsController::class,'update'])->name('hotels.update');
Route::get('/hotels/show/{id}',[HotelsController::class,'show'])->name('hotels.show');

Route::get('/hotels/status_active{id}',[HotelsController::class,'status_active'])->name('hotels.active');
Route::get('/hotels/status_inactive{id}',[HotelsController::class,'status_inactive'])->name('hotels.inactive');


/*-----------------------------addons-------------------------------------*/
Route::get('/addons', [AddonsController::class, 'index'])->name('addons');
Route::get('/addons/create',[AddonsController::class,'create'])->name('addons.create');
Route::post('/addons/store',[AddonsController::class,'store'])->name('addons.store');
Route::get('/addons/edit/{id}',[AddonsController::class,'edit'])->name('addons.edit');
Route::post('/addons/update/{id}',[AddonsController::class,'update'])->name('addons.update');
Route::get('/addons/show/{id}',[AddonsController::class,'show'])->name('addons.show');

Route::get('/addons/status_active{id}',[AddonsController::class,'status_active'])->name('addons.active');
Route::get('/addons/status_inactive{id}',[AddonsController::class,'status_inactive'])->name('addons.inactive');

/*-----------------------------itemtypes-------------------------------------*/
Route::get('/itemstypes', [ItemstypesController::class, 'index'])->name('itemstypes');
Route::get('/itemstypes/create',[ItemstypesController::class,'create'])->name('itemstypes.create');
Route::post('/itemstypes/store',[ItemstypesController::class,'store'])->name('itemstypes.store');
Route::get('/itemstypes/edit/{id}',[ItemstypesController::class,'edit'])->name('itemstypes.edit');
Route::post('/itemstypes/update/{id}',[ItemstypesController::class,'update'])->name('itemstypes.update');
Route::get('/itemstypes/show/{id}',[ItemstypesController::class,'show'])->name('itemstypes.show');

Route::get('/itemstypes/status_active{id}',[ItemstypesController::class,'status_active'])->name('itemstypes.active');
Route::get('/itemstypes/status_inactive{id}',[ItemstypesController::class,'status_inactive'])->name('itemstypes.inactive');


/*-----------------------------options-------------------------------------*/
Route::get('/options', [OptionsController::class, 'index'])->name('options');
Route::get('/options/create',[OptionsController::class,'create'])->name('options.create');
Route::post('/options/store',[OptionsController::class,'store'])->name('options.store');
Route::get('/options/edit/{id}',[OptionsController::class,'edit'])->name('options.edit');
Route::post('/options/update/{id}',[OptionsController::class,'update'])->name('options.update');
Route::get('/options/show/{id}',[OptionsController::class,'show'])->name('options.show');

Route::get('/options/status_active{id}',[OptionsController::class,'status_active'])->name('options.active');
Route::get('/options/status_inactive{id}',[OptionsController::class,'status_inactive'])->name('options.inactive');



/*-----------------------------tables-------------------------------------*/
Route::get('/tables', [TablesController::class, 'index'])->name('tables');
Route::get('/tables/create',[TablesController::class,'create'])->name('tables.create');
Route::post('/tables/store',[TablesController::class,'store'])->name('tables.store');
Route::get('/tables/edit/{id}',[TablesController::class,'edit'])->name('tables.edit');
Route::post('/tables/update/{id}',[TablesController::class,'update'])->name('tables.update');
Route::get('/tables/show/{id}',[TablesController::class,'show'])->name('tables.show');

Route::get('/tables/status_active{id}',[TablesController::class,'status_active'])->name('tables.active');
Route::get('/tables/status_inactive{id}',[TablesController::class,'status_inactive'])->name('tables.inactive');



/*-----------------------------menu-------------------------------------*/
Route::get('/menus', [MenusController::class, 'index'])->name('menus');
Route::get('/menus/create',[MenusController::class,'create'])->name('menus.create');
Route::post('/menus/store',[MenusController::class,'store'])->name('menus.store');
Route::get('/menus/edit/{id}',[MenusController::class,'edit'])->name('menus.edit');
Route::post('/menus/update/{id}',[MenusController::class,'update'])->name('menus.update');
Route::get('/menus/show/{id}',[MenusController::class,'show'])->name('menus.show');

Route::get('/menus/status_active{id}',[MenusController::class,'status_active'])->name('menus.active');
Route::get('/menus/status_inactive{id}',[MenusController::class,'status_inactive'])->name('menus.inactive');


/*-----------------------------items-------------------------------------*/
Route::get('/items', [ItemsController::class, 'index'])->name('items');
Route::get('/items/create',[ItemsController::class,'create'])->name('items.create');
Route::post('/items/store',[ItemsController::class,'store'])->name('items.store');
Route::get('/items/edit/{id}',[ItemsController::class,'edit'])->name('items.edit');
Route::post('/items/update/{id}',[ItemsController::class,'update'])->name('items.update');
Route::get('/items/show/{id}',[ItemsController::class,'show'])->name('items.show');

Route::get('/items/status_active{id}',[ItemsController::class,'status_active'])->name('items.active');
Route::get('/items/status_inactive{id}',[ItemsController::class,'status_inactive'])->name('items.inactive');


Route::get('/items/getproduct',[ItemsController::class,'getproduct']);
Route::get('/items/getProductValueById/{id}',[ItemsController::class,'getProductValueById']);



/*-----------------------------offers-------------------------------------*/
Route::get('/offers', [OffersController::class, 'index'])->name('offers');
Route::get('/offers/create',[OffersController::class,'create'])->name('offers.create');
Route::post('/offers/store',[OffersController::class,'store'])->name('offers.store');
Route::get('/offers/edit/{id}',[OffersController::class,'edit'])->name('offers.edit');
Route::post('/offers/update/{id}',[OffersController::class,'update'])->name('offers.update');
Route::get('/offers/show/{id}',[OffersController::class,'show'])->name('offers.show');

Route::get('/offers/status_active{id}',[OffersController::class,'status_active'])->name('offers.active');
Route::get('/offers/status_inactive{id}',[OffersController::class,'status_inactive'])->name('offers.inactive');

/*-----------------------------customers-------------------------------------*/
Route::get('/customers', [CustomerController::class, 'index'])->name('customers');
Route::get('/customers/create',[CustomerController::class,'create'])->name('customers.create');
Route::get('/customers/show/{id}',[CustomerController::class,'show'])->name('customers.show');


/*-----------------------------orders-------------------------------------*/
Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
Route::get('/orders/create',[OrdersController::class,'create'])->name('orders.create');
Route::POST('/orders/store',[OrdersController::class,'store'])->name('orders.store');

Route::get('/orders/show/{id}',[OrdersController::class,'show'])->name('orders.show');
//restaurantmanagers

/*-----------------------------restaurantmanagers-------------------------------------*/
Route::get('/restaurantmanagers', [RestaurantmanagerController::class, 'index'])->name('restaurantmanagers');
Route::get('/restaurantmanagers/create',[RestaurantmanagerController::class,'create'])->name('restaurantmanagers.create');
Route::post('/restaurantmanagers/store',[RestaurantmanagerController::class,'store'])->name('restaurantmanagers.store');
Route::get('/restaurantmanagers/edit/{id}',[RestaurantmanagerController::class,'edit'])->name('restaurantmanagers.edit');
Route::post('/restaurantmanagers/update/{id}',[RestaurantmanagerController::class,'update'])->name('restaurantmanagers.update');
Route::get('/restaurantmanagers/show/{id}',[RestaurantmanagerController::class,'show'])->name('restaurantmanagers.show');

Route::get('/restaurantmanagers/status_active{id}',[RestaurantmanagerController::class,'status_active'])->name('restaurantmanagers.active');
Route::get('/restaurantmanagers/status_inactive{id}',[RestaurantmanagerController::class,'status_inactive'])->name('restaurantmanagers.inactive');


/*-----------------------------kichenmanagers-------------------------------------*/
Route::get('/kichenmanagers', [KichenmanagerController::class, 'index'])->name('kichenmanagers');
Route::get('/kichenmanagers/create',[KichenmanagerController::class,'create'])->name('kichenmanagers.create');
Route::post('/kichenmanagers/store',[KichenmanagerController::class,'store'])->name('kichenmanagers.store');
Route::get('/kichenmanagers/edit/{id}',[KichenmanagerController::class,'edit'])->name('kichenmanagers.edit');
Route::post('/kichenmanagers/update/{id}',[KichenmanagerController::class,'update'])->name('kichenmanagers.update');
Route::get('/kichenmanagers/show/{id}',[KichenmanagerController::class,'show'])->name('kichenmanagers.show');

Route::get('/kichenmanagers/status_active{id}',[KichenmanagerController::class,'status_active'])->name('kichenmanagers.active');
Route::get('/kichenmanagers/status_inactive{id}',[KichenmanagerController::class,'status_inactive'])->name('kichenmanagers.inactive');

/*-----------------------------Referralpoints-------------------------------------*/
Route::get('/referralpoints', [ReferralpointsController::class, 'index'])->name('referralpoints');
Route::get('/referralpoints/create',[ReferralpointsController::class,'create'])->name('referralpoints.create');
Route::post('/referralpoints/store',[ReferralpointsController::class,'store'])->name('referralpoints.store');
Route::get('/referralpoints/edit/{id}',[ReferralpointsController::class,'edit'])->name('referralpoints.edit');
Route::post('/referralpoints/update/{id}',[ReferralpointsController::class,'update'])->name('referralpoints.update');
Route::get('/referralpoints/show/{id}',[ReferralpointsController::class,'show'])->name('referralpoints.show');

Route::get('/referralpoints/status_active{id}',[ReferralpointsController::class,'status_active'])->name('referralpoints.active');
Route::get('/referralpoints/status_inactive{id}',[ReferralpointsController::class,'status_inactive'])->name('referralpoints.inactive');

Route::get('/referraluser', [ReferralpointsController::class, 'referraluser'])->name('referralpoints.referraluser');

/*-----------------------------Loyalitypoints-------------------------------------*/
Route::get('/loyalitypoints', [LoyalitypointsController::class, 'index'])->name('loyalitypoints');
Route::get('/loyalitypoints/create',[LoyalitypointsController::class,'create'])->name('loyalitypoints.create');
Route::post('/loyalitypoints/store',[LoyalitypointsController::class,'store'])->name('loyalitypoints.store');
Route::get('/loyalitypoints/edit/{id}',[LoyalitypointsController::class,'edit'])->name('loyalitypoints.edit');
Route::post('/loyalitypoints/update/{id}',[LoyalitypointsController::class,'update'])->name('loyalitypoints.update');
Route::get('/loyalitypoints/show/{id}',[LoyalitypointsController::class,'show'])->name('loyalitypoints.show');

Route::get('/loyalitypoints/status_active{id}',[LoyalitypointsController::class,'status_active'])->name('loyalitypoints.active');
Route::get('/loyalitypoints/status_inactive{id}',[LoyalitypointsController::class,'status_inactive'])->name('loyalitypoints.inactive');

