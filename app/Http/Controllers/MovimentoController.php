<?php

namespace App\Http\Controllers;
use App\Models\Movimento;
use Illuminate\Http\Request;

class MovimentoController extends Controller
{
    public function handleSellData(Request $request)
{
    $data = $request->json()->all();

    try {
        foreach ($data as $item) {
            $code = $item['code'];
            $quantity = $item['quantity'];

            $movimento = Movimento::find($code);

            if ($movimento) {
                $movimento->decrement('quantity', $quantity);
            }
        }

        return response()->json(['message' => 'Sell data processed successfully']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


}
