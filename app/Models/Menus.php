<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    public $table = 'menus'; 
    use HasFactory;
    protected $guarded = [ ];
}
