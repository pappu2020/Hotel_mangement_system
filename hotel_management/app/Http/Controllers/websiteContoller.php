<?php

namespace App\Http\Controllers;

use App\Models\desertfoodModel;
use App\Models\drinksfoodModel;
use App\Models\heroSectionModel;
use App\Models\mainfoodModel;
use App\Models\roomsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class websiteContoller extends Controller
{
    function Mainwebsite(){

        $allHeroSectionContent = heroSectionModel::latest()->get();
        $allRooms = roomsModel::take(3)->get();
        $allRoomsImg = roomsModel::latest()->get();
        $allMainFoods = mainfoodModel::all();
        $allDesertFoods = desertfoodModel::all();
        $allDrinksFoods = drinksfoodModel::all();
        return view("website",[
            'allHeroSectionContent' => $allHeroSectionContent,
            'allRooms' => $allRooms,
            'allRoomsImg' => $allRoomsImg,
            'allMainFoods' => $allMainFoods,
            'allDesertFoods' => $allDesertFoods,
            'allDrinksFoods' => $allDrinksFoods,
        ]);
    }





    function allroomspage(){
        $allRooms = roomsModel::where("status","Open")->get();
        $RoomsPerson = roomsModel::get();
        return view("website.allroomspage",[
            'allRooms' => $allRooms,
            'RoomsPerson' => $RoomsPerson,
        ]);
    }


    function checkAvabilityForm(Request $req){

        $req->validate([
          
            'checkin' => 'required',
            'checkout' => 'required',
        ]);


        $allRooms = roomsModel::where("status", "Open")->get();
        $RoomsPerson = roomsModel::get();

        return view("website.allroomspage",[
            'allRooms' => $allRooms,
            'RoomsPerson' => $RoomsPerson,
        ]);

    }
}
