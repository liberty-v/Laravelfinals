<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roomt extends Model
{
    use HasFactory;

    //table name
    protected $table = 'roomt';
    //primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
