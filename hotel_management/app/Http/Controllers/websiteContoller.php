<?php

namespace App\Http\Controllers;

use App\Models\heroSectionModel;
use App\Models\roomsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class websiteContoller extends Controller
{
    function Mainwebsite(){

        $allHeroSectionContent = heroSectionModel::latest()->get();
        $allRooms = roomsModel::take(3)->get();
        $allRoomsImg = roomsModel::latest()->get();
        return view("website",[
            'allHeroSectionContent' => $allHeroSectionContent,
            'allRooms' => $allRooms,
            'allRoomsImg' => $allRoomsImg,
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
}
