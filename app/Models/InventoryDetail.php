<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'model',
        'brand',
        'price',
        'quantity',
    ] ;
}
