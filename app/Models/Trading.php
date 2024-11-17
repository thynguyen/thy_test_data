<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trading extends Model
{
    use HasFactory;

    protected $table = "trading";

    protected $fillable = [
        'name', 'code', 'price_24h', 'percent_24h', 'icon', 'up_down',
    ];
}
