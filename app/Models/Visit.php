<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
protected $fillable = [
    'specialisation',
    'doctor',
    'avaliable_date',
    'location',
    'avaibaility',
    'user_id'
];
}