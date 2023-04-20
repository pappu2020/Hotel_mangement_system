<?php

namespace App\Http\Controllers;

use App\Models\roomsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

class roomsController extends Controller
{
    function addrooms(){
        return view("admin.rooms.addrooms");
    }




    function roomInsert(Request $req){
        // $req->validate([

        //     'name' => 'required|max:100',
        //     'roomNum' => 'required',
        //     'roomPrice' => 'required',
        //     'description' => 'required|max:500',
        //     // 'picture' => 'mimes:jpg,jpeg,png,gif,webp',
        //     'picture' => 'required',

        // ]);


        $getImage = $req->picture;

        $extension = $getImage->getClientOriginalExtension();

        $afterName = str_replace(" ", "-", $req->name);

        $fileName = Str::lower($afterName) . '-' . rand(100000, 1999999) . "." . $extension;

        Image::make($getImage)->save(public_path("uploads/roomImg/" . $fileName));
        Image::make($getImage)->save(public_path("website_asset/uploads/roomImg/" . $fileName));


        roomsModel::insert([

            'name' => $req->name,
            'roomNum' => $req->roomNum,
            'roomPrice' => $req->roomPrice,
            'roomPerson' => $req->roomPerson,
            'description' => $req->description,
            'ac_nonac' => $req->ac_nonac,
            'location' => $req->location,
            'picture' => $fileName,
            'creat_by' => Auth::id(),
            'created_at' => Carbon::now(),

        ]);


        return back();
    }
}


