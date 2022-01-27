<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class villas extends Model
{
    protected $fillable = ['name','city','address','mark','hotel_file_path'];
    protected $dates = ['created_at','updated_at'];
}
