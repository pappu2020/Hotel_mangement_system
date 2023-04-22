<?php

namespace App\Http\Controllers;

use App\Models\reservationModel;
use App\Models\roomsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class reservationContoller extends Controller
{
    function reservationpage($id)
    {
        $roomsinfo = roomsModel::where("id", $id)->get();
        return view("website.reservationPage", [
            'roomsinfo' => $roomsinfo,
        ]);
    }


    function reservationInsert(Request $req)
    {

        $req->validate([

            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
            'adult_number' => 'required|max:2',
           
            'children_number' => 'required',
            'check_in_date' => 'required',
            'check_out_date' => 'required',
            'notes' => 'required',
            'roomId' => 'required',

        ], [
            'roomId' => "Please, Select Your choice room",
        ]);


        reservationModel::insert([

            'room_id' => $req->roomId,
            'customer_name' => $req->customer_name,
            'customer_email' => $req->customer_email,
            'customer_phone' => $req->customer_phone,
            'customer_address' => $req->customer_address,
            'adult_number' => $req->adult_number,
            'children_number' => $req->children_number,
            'check_in_date' => $req->check_in_date,
            'check_out_date' => $req->check_out_date,
            'notes' => $req->notes,
            'created_at' => Carbon::now(),

        ]);


        return back()->with("reservationSuccess", "Thank you for choosing us.Your reservation in successfully created. Our Staff will contact you soon for confirmation.");
    }


    function clientreservationpage(){
        $allReserveInfo = reservationModel::all();
        return view("admin.reservation.clientReservationPage",[
            'allReserveInfo' => $allReserveInfo,
        ]);
    }


    function reservationAction(Request $req)
    {

        $explode_part = explode(",", $req->stutusButton);



        reservationModel::where("id", $explode_part[0])->update([
            'status' => $explode_part[1],
        ]);

        roomsModel::where("id", $explode_part[2])->update([
            'status' => $explode_part[1],
            
        ]);

        return back()->with('updateSuccess', "update success!!");
    }
}
