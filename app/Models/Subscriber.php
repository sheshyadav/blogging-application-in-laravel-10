<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Exception;

class Subscriber extends Model
{
    use HasFactory;
    protected $table ="subscribers";
    protected $primaryKey = "id";
}
