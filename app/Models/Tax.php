<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $fillable = [
        'revenueCode',
        'name',
        'description',
        'aliquot',
        'calculationPeriod',
        'sphere',
        'accountingAccount',
        'costCenter',
        'collectionAgency',
        'basicLegislation',
        'incidence',
        'typeOfTaxpayer',
        'linkedTable'
    ];
}
