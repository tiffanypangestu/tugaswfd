<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'nama',
        'foto',
        'keterangan',
        'url',
    ];
}
