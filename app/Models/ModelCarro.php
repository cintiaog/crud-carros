<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCarro extends Model
{
    protected $table = 'carros';
    protected $Fillable = ['marca','modelo','ano','km','price','image']; 
}

