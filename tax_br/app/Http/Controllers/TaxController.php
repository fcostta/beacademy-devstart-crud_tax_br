<?php

namespace App\Http\Controllers;
use App\Models\Tax;
use Illuminate\Http\Request;


class TaxController extends Controller
{
    public function __construct(Tax $tax)
    {
        $this->model = $tax;
    }


    public function listTax()
    {
        $taxs = [
            'name' => ['PIS',
                'COFINS']
        ];

        dd($taxs);

    }

    public function createTaxs()
    {
        return view('taxs.create');
    }

    public function storeTaxs(Request $request)
    {
        $data = $request->all();
        $this->model->create($data);

    //return redirect()->route('users.list');
    }
}
