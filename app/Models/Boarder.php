<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Boarder extends Model
{
    use HasFactory;

    //table name
    protected $table = 'boarderz';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;


    public function user(){
        return $this ->belongsTo('App\User');
    }
}
