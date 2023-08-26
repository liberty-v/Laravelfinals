<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    //table name
    protected $table = 'bills';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;


    public function boarder()
    {
        return $this->belongsTo(Boarder::class, 'boarder_id', 'id');
    }
}
