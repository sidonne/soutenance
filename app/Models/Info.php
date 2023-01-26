<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    //table name
    #protected $table = 'infos';
    //primary key
    #public $primaryKey = 'id';
    //Timestamps
    #public $timestamps = true;

    protected $fillable = ['post_id', 'title', 'chapter'];
}
