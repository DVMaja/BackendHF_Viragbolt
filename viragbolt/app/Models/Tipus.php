<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipus extends Model
{
    use HasFactory;
    protected  $primaryKey = 'tipus_id';
    protected $fillable = [
        'neve',
        'leiras'
    ];
}
