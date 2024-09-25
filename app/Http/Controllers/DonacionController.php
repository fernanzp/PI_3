<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaccion;

class DonacionController extends Controller
{
    public function guardarTransaccion(Request $request)
    {
    // Validar los datos recibidos
    $validatedData = $request->validate([
        'transaction_id' => 'required|string',
        'amount' => 'required|numeric',
        'payer_email' => 'required|email',
        'payer_name' => 'required|string',
        
    ]);

    // Guardar los datos en la base de datos (suponiendo que tienes un modelo llamado Transaction)
    try {
        Transaccion::create([
            'transaction_id' => $validatedData['transaction_id'],
            'amount' => $validatedData['amount'],
            'payer_email' => $validatedData['payer_email'],
            'payer_name' => $validatedData['payer_name'],
        ]);

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        // Manejar cualquier excepción y devolver un error
        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
    }
    }
}
