<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

protected $fillable = [
    'title',
    'image',
    'description',
    'date',
    'hour',
    'current_capacity',
    'max_capacity',
    'location_id',
];
public function location()
    {
        return $this->hasMany(Location::class);
    }
}