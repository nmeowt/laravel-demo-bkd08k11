<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    use HasFactory;
    protected $table = "ministry";

    public $timestamps = false;

    public $primaryKey = 'idMinistry';
}
