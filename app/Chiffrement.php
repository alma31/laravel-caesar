<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chiffrement extends Model
{
    public $timestamps = false;
    protected $fillable = ['text'];
}
