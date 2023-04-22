<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservationModel extends Model
{
    use HasFactory;

    function rel_to_room(){
        return $this->belongsTo(roomsModel::class, "room_id");
    }
}
