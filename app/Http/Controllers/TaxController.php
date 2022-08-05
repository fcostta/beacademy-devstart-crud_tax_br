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

        $taxes = Tax::paginate(5);
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

    public function editTaxes($id)
    {
        if (!$tax = $this->model->find($id))
            return redirect()->route('taxes.list');

        return view('taxes.edit', compact('tax'));
    }


    public function updateTaxes(Request $request, $id)
    {
        if (!$tax = $this->model->find($id))
            return redirect()->route('taxes.list');

        $data = $request->all();

        $tax->update($data);

        return redirect()->route('taxes.show', $tax->id)->with('update', 'Imposto alterado!');
    }

    public function destroyTaxes($id)
    {

        if (!$tax = $this->model->find($id))
            return redirect()->route('taxes.list');

        $tax->delete();
        return redirect()->route('taxes.list')->with('destroy', 'Produto excluido!');
    }


}
