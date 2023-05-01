<?php

namespace App\Http\Controllers;

use App\Models\desertfoodModel;
use App\Models\drinksfoodModel;
use App\Models\mainfoodModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class foodController extends Controller
{
    function foodItemInsertPage(){
        return view("admin.food.foodItemInsert");
    }


    

    
    function insertMainFood(Request $req){
        
        
        
        $req->validate([

            'price' => 'required',
            'name' => 'required',
            'description' => 'required|max:200',

        ]);


        mainfoodModel::insert([
            'price' => $req->price,
            'name' => $req->name,
            'description' => $req->description,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),

        ]);

        return back()->with("mainFoodInsertSuccess", "mainFoodInsertSuccess");
    }
    
    
    
    function insertDesertFood(Request $req){
        $req->validate([

            'desertprice' => 'required',
            'desertname' => 'required',
            'desertdescription' => 'required|max:200',

        ]);


        desertfoodModel::insert([
            'price' => $req->desertprice,
            'name' => $req->desertname,
            'description' => $req->desertdescription,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),

        ]);

        return back()->with("desertFoodInsertSuccess", "desertFoodInsertSuccess");
    }
    
    
    function insertdrinksFood(Request $req){
        $req->validate([

            'drinksprice' => 'required',
            'drinksname' => 'required',
            'drinksdescription' => 'required|max:200',

        ]);


        drinksfoodModel::insert([
            'price' => $req->drinksprice,
            'name' => $req->drinksname,
            'description' => $req->drinksdescription,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now(),

        ]);

        return back()->with("drinksFoodInsertSuccess", "drinksFoodInsertSuccess");
    }
}
