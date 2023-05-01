<?php

use App\Http\Controllers\foodController;
use App\Http\Controllers\heroSectionController;
use App\Http\Controllers\reservationContoller;
use App\Http\Controllers\roomsController;
use App\Http\Controllers\websiteContoller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [websiteContoller::class, 'Mainwebsite'])->name('Mainwebsite');



//website_section


Route::get('allroomspage', [websiteContoller::class, 'allroomspage'])->name('allroomspage');
Route::post('checkAvabilityForm', [websiteContoller::class, 'checkAvabilityForm'])->name('checkAvabilityForm');


//reservation

Route::get('reservationpage/{id}', [reservationContoller::class, 'reservationpage'])->name('reservationpage');
Route::post('reservationInsert', [reservationContoller::class, 'reservationInsert'])->name('reservationInsert');
















//Hero section

Route::get("heroSectionPage",[heroSectionController::class, "heroSectionPage"])->name("heroSectionPage");
Route::post("heroSectionBannerImgInsert",[heroSectionController::class, "heroSectionBannerImgInsert"])->name("heroSectionBannerImgInsert");
Route::get("heroSectionImgTrashPage", [heroSectionController::class, "heroSectionImgTrashPage"])->name("heroSectionImgTrashPage");
Route::get("heroSectionImgDelete/{id}", [heroSectionController::class, "heroSectionImgDelete"])->name("heroSectionImgDelete");
Route::get("heroSectionImgRes/{id}", [heroSectionController::class, "heroSectionImgRes"])->name("heroSectionImgRes");
Route::get("heroSectionImgParDelete/{id}", [heroSectionController::class, "heroSectionImgParDelete"])->name("heroSectionImgParDelete");





//Rooms section


Route::get("addrooms",[roomsController::class,"addrooms"])->name("addrooms");
Route::post("roomInsert",[roomsController::class,"roomInsert"])->name("roomInsert");


//Reservation


Route::get("clientreservationpage", [reservationContoller::class, "clientreservationpage"])->name("clientreservationpage");
Route::post("reservationAction", [reservationContoller::class, "reservationAction"])->name("reservationAction");


//Food Section

Route::get("foodItemInsertPage", [foodController::class, "foodItemInsertPage"])->name("foodItemInsertPage");
Route::post("insertMainFood", [foodController::class, "insertMainFood"])->name("insertMainFood");
Route::post("insertDesertFood", [foodController::class, "insertDesertFood"])->name("insertDesertFood");
Route::post("insertdrinksFood", [foodController::class, "insertdrinksFood"])->name("insertdrinksFood");