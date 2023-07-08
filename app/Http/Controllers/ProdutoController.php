<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function show() {
        $produtos = Produto::paginate(10);
      return view('produtoIndex', compact('produtos'));

   }

   public function show2() {
    $produtos = Produto::all();
   return response()->json($produtos);

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

    return redirect('products')->with('message', 'Produto updated successfully.');
}
public function store(Request $request)  {
    $formFields = $request->validate([
        'name' => 'required',
        'setor' => 'required',
        'valor' => 'required',
       
    ]);
   // // Create User
 
   //DB::connection()->enableQueryLog();

   Produto::create($formFields);
  
//    dd(DB::getQueryLog());
   
   return redirect('products')->with('message', 'produto created ');

   }
public function deleteProduto(Produto $produto)
{
    $produto->delete();

    return redirect('products')->with('message', 'User deleted successfully.');
}
}
