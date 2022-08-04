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


    public function listTaxes()
    {
        //$taxes = [
        //    'name' => ['PIS',
        //        'COFINS']
        //];
        //dd($taxes);

            $taxes =Tax::paginate(5);
            return view('taxes.list', compact('taxes'));

    }

    public function createTaxes()
    {
        return view('taxes.create');
    }

    public function storeTaxes(Request $request)
    {

        $data = $request->all();
        $this->model->create($data);

        //return redirect()->route('taxes.list');
        return redirect()->route('taxes.list')->with('create', 'Imposto cadastrado!');
    }

    public function showTaxes($id)
    {
        if (!$tax = Tax::find($id))
            return redirect()->route('taxes.list');

        $title = 'Impostos ' . $tax->name;
        return view('taxes.show', compact('tax', 'title'));
    }
}
