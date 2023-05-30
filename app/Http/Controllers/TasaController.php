<?php

namespace App\Http\Controllers;

use App\Models\TasaCambio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TasaController extends Controller
{

    public function create_tasa(Request $request)
    {
        try {
            # Ecribimos logs de la información a procesar
            Log::debug('App\Controllers\TasaController::create_tasa');
        } catch (\Exception $e) {
            Log::error('App\Controllers\TasaController::create_tasa' . $e);
            return response("", 500);
        }
    }

    public function all_tasas()
    {
        try {
            # Ecribimos logs de la información a procesar
            Log::debug('App\Controllers\TasaController::all_tasas');
            $data = TasaCambio::all();
        } catch (\Exception $e) {
            Log::error('App\Controllers\TasaController::all_tasas' . $e);
            return response("", 500);
        }

        return response()->json($data);
    }

    public function get_tasa($id)
    {

        try {
            # Ecribimos logs de la información a procesar
            Log::debug('App\Controllers\TasaController::get_tasa');
            $data = TasaCambio::where("id", $id)->first();
        } catch (\Exception $e) {
            Log::error('App\Controllers\TasaController::get_tasa' . $e);
            return response("", 500);
        }

        return response()->json($data);
    }

    public function update_tasa($id, $valor)
    {

        try {
            # Ecribimos logs de la información a procesar
            Log::debug('App\Controllers\TasaController::update_tasa');

            $data = TasaCambio::where("id", $id)->update([
                "valor" => $valor
            ]);
        } catch (\Exception $e) {
            Log::error('App\Controllers\TasaController::update_tasa' . $e);
            return response("", 500);
        }

        return response()->json($data);
    }

    public function get_tasa_convert(Request $request)
    {
        # Ecribimos logs de la información a procesar
        Log::debug('App\Controllers\TasaController::get_tasa_convert- data ' . json_encode($request->all()));

        if (!empty($request->input('tasa'))  && !empty($request->input('monto'))) {
            $tasa = $request->input('tasa');
            // Aquí se puede utilizar la tasa del día obtenida de una fuente externa
            $response = TasaCambio::where("descripcion", $tasa)->first();
            if (empty($response)) {
                return false;
            }
            if ($tasa == "pay-bolivares-colven") {
                $monto = $request->input('monto');
                // Las Comisiones de BolivaresColVen  (Monto / Tasa)
                $comision =  $monto / $response->valor;
                Log::Debug($response->valor);
                Log::Debug($monto);
                return response()->json(['monto_a_recibir' => number_format($comision, 2, '.', ',')]);
            } else if ($tasa == "pay-paypal") {
                $monto = $request->input('monto');
                // Las Comisiones PayPal (5,4% + $0.3 USD)
                $comision_porcentaje = 0.054;
                $comision_fija = 0.3;
                // Calculamos la comisión
                $comision = ($monto * $comision_porcentaje + $comision_fija) + $monto;
                // Cálculo del monto a recibir en bolívares
                $monto_a_recibir = $monto * $response->valor;
                return response()->json(['monto_a_pagar' => round($comision, 2), 'monto_a_recibir' => $monto_a_recibir]);
            } else if ($tasa == "pay-bolivares-peruven (dolar)") {
                $monto = $request->input('monto');
                // Las Comisiones de BolivaresColVen  (Tasa * Monto)
                $comision = $monto * $response->valor;
                return response()->json(['monto_a_recibir' => number_format($comision, 2, '.', ',')]);
            } else if ($tasa == "pay-bolivares-peruven (soles)") {
                $monto = $request->input('monto');
                // Las Comisiones de BolivaresColVen  (Tasa * Monto)
                $comision = $monto * $response->valor;
                return response()->json(['monto_a_recibir' => number_format($comision, 2, '.', ',')]);
            }
        }
    }
}
