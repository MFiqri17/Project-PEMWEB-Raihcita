<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{    
    use HasFactory;

    protected $fillable = [
        'name',
        'organizer',
        'startDate',
        'endDate',
        'link',
        'description',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];
}
