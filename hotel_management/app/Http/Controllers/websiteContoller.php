<?php

namespace App\Http\Controllers;

use App\Models\heroSectionModel;
use App\Models\roomsModel;
use Illuminate\Http\Request;

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
        $allRooms = roomsModel::latest()->get();
        return view("website.allroomspage",[
            'allRooms' => $allRooms,
        ]);
    }
}
