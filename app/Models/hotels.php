<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
    
    protected $fillable = ['name','city','address','mark','hotel_file_path'];
    protected $dates = ['created_at','updated_at'];
}
