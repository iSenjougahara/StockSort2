<?php

namespace App\Http\Controllers;

use App\Models\lote;
use App\Models\Movimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loteController extends Controller
{
    public function show()
    {
        $lotes = lote::paginate(10);
        return view('indexLote', compact('lotes'));
    }

    public function show2()
    {

        $lotes = Lote::with('product')->get();


        return view('show', compact('lotes'));
    }
    public function showEdit($id)
    {
        $prod = lote::find($id);
        return view('editlote', ['lote' => $prod]);
    }

    public function loteUpdate(Request $request, $id)
    {
        $prod = lote::find($id);
        $prod->validade = $request->input('validade');
        $prod->codebar = $request->input('codebar');
        $prod->valor = $request->input('valor');
        $prod->produto_id = $request->input('produto_id');

        $prod->save();

        return redirect('lotes')->with('message', 'lote updated successfully.');
    }

    public function store(Request $request)
    {

        $formFields = $request->validate([
            'produto_id' => 'required',
            'validade' => 'required',
            'codebar' => 'required',
            'valor' => 'required',
        ]);
        //    DB::connection()->enableQueryLog();
        $lote = lote::create($formFields);
        Movimento::create([
            'date' => date('Y-m-d'),
            'quantidade' => $formFields['valor'],
            'local' => 'estoque',
            'lote_id' => $lote->id,
        ]);

        // dd(DB::getQueryLog());

        return redirect('lotes')->with('message', 'produto created ');
    }



    public function showapi()
    {
        $lotes = Lote::with('product')->get();
    
        return response()->json($lotes);
    }


    public function deletelote(lote $lote)
    {
        $lote->delete();

        return redirect('lotes')->with('message', 'lote deleted successfully.');
    }
}
