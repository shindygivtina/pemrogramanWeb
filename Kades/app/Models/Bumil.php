<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bumil extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['tanggal_lahir'];
}
