<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'Addresses';

    protected $fillable = [
        'address',
        'postal_code',
        'city',
        'country'
    ];

}
