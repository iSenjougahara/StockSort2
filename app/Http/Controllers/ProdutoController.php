<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function show() {
        $produtos = Produto::paginate(10);
      return view('produtoIndex', compact('produtos'));

   }


   public function showEdit($id)
{
    $prod = Produto::find($id);
    return view('editProduto', ['produto' => $prod]);
}

   public function produtoUpdate(Request $request, $id)
{
    $prod = Produto::find($id);
    $prod->name = $request->input('name');
    $prod->setor = $request->input('setor');
    $prod->valor = $request->input('valor');
    
    $prod->save();

    return redirect('ProdutoIndex.blade')->with('message', 'Produto updated successfully.');
}
}
