<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'heros';

    protected $fillable = [
        'title',
        'subtitle',
        'services',
        'image'
    ];

    protected $casts = [
        'services' => 'array',
    ];

    public function getServicesAttribute($value)
    {
        return json_decode($value);
    }

    public function setServicesAttribute($value)
    {
        $this->attributes['services'] = json_encode($value);
    }
}
