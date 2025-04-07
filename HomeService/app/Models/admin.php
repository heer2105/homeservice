<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $connection = "mongodb";
    protected $collection = "admins";
}
