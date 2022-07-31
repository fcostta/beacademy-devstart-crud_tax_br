<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function listTax()
    {
        $taxs=[
            'name'=>['PIS',
                    'COFINS']
        ];
    
        dd($taxs);
    
    }
}
