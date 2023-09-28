<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virag extends Model
{
    use HasFactory;

    protected  $primaryKey = 'virag_id';
    protected $fillable = [
        'neve',
        'tipus_id'
    ];
}
