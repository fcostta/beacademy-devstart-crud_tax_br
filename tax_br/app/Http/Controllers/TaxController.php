<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function indexTax()
    {
        $taxs=[
            'name'=>['PIS',
                    'COFINS']
        ];
    
        dd($taxs);
    
    }
}
