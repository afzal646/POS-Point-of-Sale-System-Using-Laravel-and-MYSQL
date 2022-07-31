<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainctrl;

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

/*Route::get('/', function () {
    return view('welcome');
}) ;*/


Route::get('/', [mainctrl::class, 'loginfunc']);

Route::get('/dashboard', [mainctrl::class,'dashboardfunction']);

Route::get('/itemDefination', [mainctrl::class,'itemdefinationfunc']);

Route::get('/insert', [mainctrl::class,'insertfunctions']);

Route::get('/updateitem', [mainctrl::class,'updateitemfunction']);

Route::get('/deleteitem/{id}', [mainctrl::class,'deleteitemfunction']);

Route::get('/category', [mainctrl::class,'categoryfunc']);

Route::get('/insertcategory', [mainctrl::class,'insertcategoryfunc']);

Route::get('/updatecategory', [mainctrl::class,'updatecategoryfunction']);

Route::get('/deletecategory/{id}', [mainctrl::class,'deletecategoryfunction']);

Route::get('/unit', [mainctrl::class,'unitfunc']);

Route::get('/insertunit', [mainctrl::class,'insertunitfunc']);

Route::get('/updateunit', [mainctrl::class,'updateunitfunction']);

Route::get('/deleteunit/{id}', [mainctrl::class,'deleteunitfunction']);

Route::get('/saleandreturn', [mainctrl::class,'saleandreturnfunc']);

Route::get('/autocompleteSearch', [mainctrl::class, 'autocompleteSearch']);

Route::get('/searchbtnfunction', [mainctrl::class,'searchbtnfunction']);

Route::get('/purchaseorder', [mainctrl::class,'purchaseorderfunction']);

Route::get('/insertpurchaseorder', [mainctrl::class,'insertpurchaseorderfunc']);

Route::get('/updatepurchaseorder', [mainctrl::class,'updatepurchaseorderfunction']);

Route::get('/deletepurchaseorder/{id}', [mainctrl::class,'deletepurchaseorderfunction']);

Route::get('/grn', [mainctrl::class,'grnfunction']);

Route::get('/insertgrn', [mainctrl::class,'insertgrnfunc']);

Route::get('/updategrn', [mainctrl::class,'updategrnfunction']);

Route::get('/deletegrn/{id}', [mainctrl::class,'deletegrnfunction']);

Route::get('/customer', [mainctrl::class,'customerfunction']);

Route::get('/insertcustomer', [mainctrl::class,'insertcustomerfunc']);

Route::get('/updatecustomer', [mainctrl::class,'updatecustomerfunction']);

Route::get('/deletecustomer/{id}', [mainctrl::class,'deletecustomerfunction']);

Route::get('/supplier', [mainctrl::class,'supplierfunction']);

Route::get('/insertsupplier', [mainctrl::class,'insertsupplierfunc']);

Route::get('/updatesupplier', [mainctrl::class,'updatesupplierfunction']);

Route::get('/deletesupplier/{id}', [mainctrl::class,'deletesupplierfunction']);

Route::get('/user', [mainctrl::class,'userfunction']);

Route::get('/insertuser', [mainctrl::class,'insertuserfunc']);

Route::get('/updateuser', [mainctrl::class,'updateuserfunction']);

Route::get('/deleteuser/{id}', [mainctrl::class,'deleteuserfunction']);

Route::get('/verifylogin', [mainctrl::class,'verifyloginfunction']);