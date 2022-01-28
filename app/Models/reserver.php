<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserver extends Model
{
    protected $fillable = ['name', 'email','Hotel_id','arrival_date','going_date'];
    protected $date = ['arrival_date','going_date'];
}
