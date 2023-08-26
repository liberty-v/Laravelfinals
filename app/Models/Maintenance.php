<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    use HasFactory;
    //table name
    protected $table = 'maintenance';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;


    public function roomt()
    {
        return $this->belongsTo(Roomt::class, 'room_id', 'id');
    }
}
