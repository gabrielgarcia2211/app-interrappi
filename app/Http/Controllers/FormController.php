<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Formulario;
use App\Models\TipoMoneda;
use App\Models\TipoEntidad;
use Illuminate\Http\Request;
use App\Models\TipoFormulario;
use App\Mail\NotificationsEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    // FORM1 INCIO
    function save_form_principal(Request $request)
    {
        DB::beginTransaction();

        try {
            # Ecribimos logs de la información a procesar
            Log::debug('App\Controllers\FormController::save_form_principal ');

            if (empty($request->all()["identificacion_d_form1"])) return response("EL campo identificacion debe contener un valor", 500);

            $identificacion_d_form1 = $request->all()["identificacion_d_form1"];
            $nombre_d_form1 = $request->all()["nombre_d_form1"];
            $correo_d_form1 = $request->all()["correo_d_form1"];
            $telefono_d_form1 = $request->all()["telefono_d_form1"];
            $instagram_d_form1 = (isset($request->all()["instagram_d_form1"]) ? $request->all()["instagram_d_form1"] : "N/A");
            $pais_d_form1 = $request->all()["pais_d_form1"];

            $user = User::where("identificacion", $identificacion_d_form1)->first();
            // si el usuario ya existe lo asociamos al formulario
            if (empty($user)) {
                // verficamos la integridad del email
                $resp = User::where("email", $correo_d_form1)->first();
                if (!empty($resp)) {
                    return response("EL correo electronico ya se encuentra asociado a otro cliente", 500);
                }

                $user = User::create([
                    "name" => $nombre_d_form1,
                    "email" => $correo_d_form1,
                    "password" => rand() . now(),
                    "identificacion" => $identificacion_d_form1,
                    "telefono" => $telefono_d_form1,
                    "instagram" => $instagram_d_form1,
                    "pais_d_form1" => $pais_d_form1,
                    "rol_id" => 2,
                ]);
            }

            $nombre_b_form1 = $request->all()["nombre_b_form1"];
            $cedula_b_form1 = $request->all()["cedula_b_form1"];
            $banco_b_form1 = $request->all()["banco_b_form1"];
            $telefono_b_form1 = (isset($request->all()["telefono_b_form1"]) ? $request->all()["telefono_b_form1"] : "N/A");
            $nro_cuenta_form1 = $request->all()["nro_cuenta_form1"];
            $radioNoLabel = $request->all()["radioNoLabel"];
            $radioTypeCu = $request->all()["radioTypeCu"];
            $monto_enviar_d_form1 = $request->all()["monto_enviar_d_form1"];
            $email_d_form1 = (isset($request->all()["email_d_form1"]) ? $request->all()["email_d_form1"] : "N/A");

            if ($request->all()["key_form"] == "pay-paypal") {
                // obtenemos los datos relacionados al formulario
                $id_moneda = TipoMoneda::find(1);
                $id_entidad = TipoEntidad::find(1)->id;
                $id_formulario = TipoFormulario::find(1)->id;

                Formulario::create([
                    "nombre_beneficiario" => $nombre_b_form1,
                    "cedula_beneficiario" => $cedula_b_form1,
                    "banco_beneficiario" => $banco_b_form1,
                    "telefono_beneficiario" => $telefono_b_form1,
                    "nro_cuenta" => $nro_cuenta_form1,
                    "tipo_persona" => $radioNoLabel,
                    "tipo_cuenta" => $radioTypeCu,
                    "monto_enviar" => $monto_enviar_d_form1,
                    "imagen_comprobante" => "",
                    "terminos_comprobante" => "OK",
                    "email_comprobante" => $email_d_form1,
                    "id_moneda" => $id_moneda->id,
                    "id_entidad" => $id_entidad,
                    "id_formulario" => $id_formulario,
                    "id_user" => $user->id,
                    "id_estado" => 1,
                    "archivo" => ''
                ]);

                // enviamos el email de informacion
                $data = [
                    "nombre" => $nombre_d_form1,
                    "id" => $user->id,
                    "estadoEnvio" => "EN PROCESO",
                    "cedula" => $identificacion_d_form1,
                    "telefono" => $telefono_d_form1,
                    "MontoEnviar" => $monto_enviar_d_form1,
                    "nombreBeneficiario" => $nombre_b_form1,
                    "cedulaBeneficiario" => $cedula_b_form1,
                    "banco" => $banco_b_form1,
                    "tipoCuenta" => $radioTypeCu,
                    "numeroCuenta" => $nro_cuenta_form1,
                    "moneda" => $id_moneda->tipo,
                ];
            } else if ($request->all()["key_form"] == "pay-skrill") {
                // obtenemos los datos relacionados al formulario
                $id_moneda = TipoMoneda::find(1);
                $id_entidad = TipoEntidad::find(4)->id;
                $id_formulario = TipoFormulario::find(4)->id;

                $formulario = Formulario::create([
                    "nombre_beneficiario" => $nombre_b_form1,
                    "cedula_beneficiario" => $cedula_b_form1,
                    "banco_beneficiario" => $banco_b_form1,
                    "telefono_beneficiario" => $telefono_b_form1,
                    "nro_cuenta" => $nro_cuenta_form1,
                    "tipo_persona" => $radioNoLabel,
                    "tipo_cuenta" => $radioTypeCu,
                    "monto_enviar" => $monto_enviar_d_form1,
                    "imagen_comprobante" => "",
                    "terminos_comprobante" => "OK",
                    "email_comprobante" => $email_d_form1,
                    "id_moneda" => $id_moneda->id,
                    "id_entidad" => $id_entidad,
                    "id_formulario" => $id_formulario,
                    "id_user" => $user->id,
                    "id_estado" => 1,
                    "archivo" => ''
                ]);

                // enviamos el email de informacion
                $data = [
                    "nombre" => $nombre_d_form1,
                    "id" => $user->id,
                    "estadoEnvio" => "EN PROCESO",
                    "cedula" => $identificacion_d_form1,
                    "telefono" => $telefono_d_form1,
                    "MontoEnviar" => $monto_enviar_d_form1,
                    "nombreBeneficiario" => $nombre_b_form1,
                    "cedulaBeneficiario" => $cedula_b_form1,
                    "banco" => $banco_b_form1,
                    "tipoCuenta" => $radioTypeCu,
                    "numeroCuenta" => $nro_cuenta_form1,
                    "moneda" => $id_moneda->tipo,
                ];

                $file_form1_b = $request->all()["archivo"];
                $filename = uniqid() . '.' . $file_form1_b->getClientOriginalExtension();
                $path = 'comprobantes/USER' . $formulario->id . 'F' . uniqid();

                // Guardamos el archivo
                $isSaved = Formulario::where("id", $formulario->id)->update([
                    "imagen_comprobante" => 'storage/' . $path . '/' . $filename
                ]);
                if (!$isSaved) {
                    throw new \Exception("No se encontro el registro", 202);
                }

                $file_form1_b->storeAs('public/' . $path, $filename);
            }

            Mail::to($correo_d_form1)->send(new NotificationsEmail($data));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('App\Controllers\FormController::save_form_principal ' . $e);
            return response("", 500);
        }

        return response()->json(true);
    }

    function get_form_paypal(Request $request)
    {
        # Ecribimos logs de la información a procesar
        Log::debug('App\Controllers\FormController::get_form_paypal');

        if (empty($request->all()["identificacion"])) return response("EL campo identificacion debe contener un valor", 500);

        $identificacion = $request->all()["identificacion"];
        $user = User::where("identificacion", $identificacion)->first();
        if (empty($user)) {
            return response("La cedula no tiene ningun proceso", 500);
        }

        $response = Formulario::select(
            "formulario.nombre_beneficiario",
            "formulario.cedula_beneficiario",
            "formulario.telefono_beneficiario",
            "formulario.created_at",
            "formulario.id_estado",
            "formulario.archivo as comprobante",
            "formulario.imagen_comprobante as voucher"
        )
            ->join("users", "users.id", "formulario.id_user")
            ->where("users.identificacion", $identificacion)
            ->get()->toArray();

        if (empty($response)) {
            return response("La cedula no tiene ningun proceso", 500);
        }

        return response()->json($response);
    }

    function get_data_forms()
    {
        # Ecribimos logs de la información a procesar
        Log::debug('App\Controllers\FormController::get_data_forms');

        $response = Formulario::select(
            "formulario.id",
            "formulario.nombre_beneficiario",
            "formulario.cedula_beneficiario",
            "formulario.banco_beneficiario",
            "formulario.telefono_beneficiario",
            "formulario.nro_cuenta",
            "formulario.tipo_persona",
            "formulario.tipo_cuenta",
            "users.name as nombre_depositante",
            "users.identificacion as cedula_depositante",
            "users.telefono as telefono_depositante",
            "users.email as correo_depositante",
            "users.instagram as instagram_depositante",
            "formulario.monto_enviar",
            "formulario.imagen_comprobante",
            "formulario.email_comprobante",
            "tipo_moneda.tipo as id_moneda",
            "tipo_entidad.descripcion as id_entidad",
            "tipo_formulario.descripcion as id_formulario",
            "formulario.created_at as creado",
            "formulario.archivo as comprobante",
            DB::raw('(CASE WHEN formulario.id_estado = 1 THEN "EN ESPERA" ELSE "REALIZADO" END) AS id_estado')
        )
            ->join("users", "users.id", "formulario.id_user")
            ->join("tipo_moneda", "tipo_moneda.id", "formulario.id_moneda")
            ->join("tipo_entidad", "tipo_entidad.id", "formulario.id_entidad")
            ->join("tipo_formulario", "tipo_formulario.id", "formulario.id_formulario")
            ->orderby('id', 'DESC')
            ->get();

        return response()->json($response);
    }

    function set_status_form(Request $request)
    {
        DB::beginTransaction();
        # Ecribimos logs de la información a procesar
        Log::debug('App\Controllers\FormController::set_status_form');
        try {
            $id = $request->all()["id"];
            $status = $request->all()["status"];

            Formulario::where("id", $id)->update([
                "id_estado" => $status
            ]);

            //obtenemos el formulario para los datos
            $response = Formulario::get_form_id($id)[0];

            if (!empty($response)) {
                // enviamos el email de informacion
                $data = [
                    "nombre" => $response["nombre_depositante"],
                    "id" => "#",
                    "estadoEnvio" => $response["id_estado"],
                    "cedula" => $response["cedula_depositante"],
                    "telefono" => $response["telefono_depositante"],
                    "MontoEnviar" => $response["monto_enviar"],
                    "nombreBeneficiario" => $response["nombre_beneficiario"],
                    "cedulaBeneficiario" => $response["cedula_beneficiario"],
                    "banco" => $response["banco_beneficiario"],
                    "tipoCuenta" => $response["tipo_cuenta"],
                    "numeroCuenta" => $response["nro_cuenta"],
                    "moneda" => $response["id_moneda"],
                ];

                Mail::to($response["correo_depositante"])->send(new NotificationsEmail($data));
            }

            DB::commit();
            return response()->json(true);
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('App\Controllers\FormController::set_status_form' . $e);
            return response("", 500);
        }



        return true;
    }

    function set_from_file(Request $request)
    {

        DB::beginTransaction();

        try {
            # Ecribimos logs de la información a procesar
            Log::debug('App\Controllers\FormController::set_from_file - data ' . json_encode($request->all()));

            if (!empty($request->hasFile('file'))  && !empty($request->input('id'))) {

                $id = $request->input('id');
                $file = $request->file('file');
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $path = 'comprobantes/USER' . $id . 'F' . uniqid();

                // Guardamos el archivo
                $isSaved = Formulario::where("id", $id)->update([
                    "archivo" => 'storage/' . $path . '/' . $filename
                ]);
                if (!$isSaved) {
                    throw new \Exception("No se encontro el registro", 202);
                }

                $file->storeAs('public/' . $path, $filename);
                // Enviamos la url publica
                $url = asset('storage/' . $path . '/' . $filename);
                $size = round($file->getSize() / 1024, 2);
                DB::commit();
            } else {
                throw new \Exception("No se encontro el registro");
            }
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('App\Controllers\FormController::set_from_file' . $e);
            return response("", 500);
        }

        return response()->json([
            'url' => $url,
            'size' => $size
        ]);
    }

    function get_from_file(Request $request)
    {
        # Ecribimos logs de la información a procesar
        Log::debug('App\Controllers\FormController::get_from_file - data ' . json_encode($request->all()));

        $id = $request->input('id');
        $file = Formulario::select('archivo')->where('id', $id)->first()->archivo;
        return response()->json([
            'url' => $file
        ]);
    }

    function delete_from_file(Request $request)
    {
        DB::beginTransaction();

        try {
            # Ecribimos logs de la información a procesar
            Log::debug('App\Controllers\FormController::delete_from_file - data ' . json_encode($request->all()));

            if (!empty($request->input('id'))) {
                $id = $request->input('id');

                $file = Formulario::find($id)->archivo;
                $file = 'public/comprobantes/' . explode("/", $file)[2];

                // Eliminamos la carpeta
                $isDelete = Storage::deleteDirectory($file);
                if (!$isDelete) {
                    throw new \Exception("No se encontro el registro", 202);
                }

                // Seteamos el registro
                $isSaved = Formulario::where("id", $id)->update([
                    "archivo" => ''
                ]);
                if (!$isSaved) {
                    throw new \Exception("No se encontro el registro", 202);
                }
                DB::commit();
            } else {
                throw new \Exception("No se encontro el registro");
            }
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('App\Controllers\FormController::set_from_file' . $e);
            return response("", 500);
        }

        return response()->json(true);
    }

    // FORM2 BolivaresColVen
    function save_form_bolivares_colven(Request $request)
    {
        DB::beginTransaction();

        try {
            # Ecribimos logs de la información a procesar
            Log::debug('App\Controllers\FormController::save_form_bolivares_colven');

            // Validar el archivo
            $validator = Validator::make($request->all(), [
                'archivo' => 'nullable|file|max:5720' // tamaño máximo en kilobytes
            ]);

            if ($validator->fails()) {
                return response('El archivo no es válido.', 400);
            }

            if (empty($request->all()["identificacion_d_form2"])) return response("EL campo identificacion debe contener un valor", 500);

            $identificacion_d_form2 = $request->all()["identificacion_d_form2"];
            $nombre_d_form2 = $request->all()["nombre_d_form2"];
            $correo_d_form2 = $request->all()["correo_d_form2"];
            $telefono_d_form2 = $request->all()["telefono_d_form2"];

            $user = User::where("identificacion", $identificacion_d_form2)->first();
            // si el usuario ya existe lo asociamos al formulario
            if (empty($user)) {
                // verficamos la integridad del email
                $resp = User::where("email", $correo_d_form2)->first();
                if (!empty($resp)) {
                    return response("EL correo electronico ya se encuentra asociado a otro cliente", 500);
                }

                $user = User::create([
                    "name" => $nombre_d_form2,
                    "email" => $correo_d_form2,
                    "password" => rand() . now(),
                    "identificacion" => $identificacion_d_form2,
                    "telefono" => "",
                    "instagram" => "",
                    "pais_d_form1" => "",
                    "rol_id" => 2,
                ]);
            }

            $nombre_b_form2 = $request->all()["nombre_b_form2"];
            $cedula_b_form2 = $request->all()["cedula_b_form2"];
            $banco_b_form2 = $request->all()["banco_b_form2"];
            $nro_cuenta_form2 = $request->all()["nro_cuenta_form2"];
            $radioNoLabel2 = $request->all()["radioNoLabel2"];
            $radioTypeBC = $request->all()["radioTypeBC"];
            $monto_enviar_d_form2 = $request->all()["monto_enviar_d_form2"];

            // obtenemos los datos relacionados al formulario
            $id_moneda = TipoMoneda::find(2);
            $id_entidad = TipoEntidad::find(2)->id;
            $id_formulario = TipoFormulario::find(2)->id;

            $formulario = Formulario::create([
                "nombre_beneficiario" => $nombre_b_form2,
                "cedula_beneficiario" => $cedula_b_form2,
                "banco_beneficiario" => $banco_b_form2,
                "telefono_beneficiario" => "N/A",
                "nro_cuenta" => $nro_cuenta_form2,
                "tipo_persona" => $radioNoLabel2,
                "tipo_cuenta" => $radioTypeBC,
                "monto_enviar" => $monto_enviar_d_form2,
                "imagen_comprobante" => "",
                "terminos_comprobante" => "OK",
                "email_comprobante" => "N/A",
                "id_moneda" => $id_moneda->id,
                "id_entidad" => $id_entidad,
                "id_formulario" => $id_formulario,
                "id_user" => $user->id,
                "id_estado" => 1,
                "archivo" => ''
            ]);

            // enviamos el email de informacion
            $data = [
                "nombre" => $nombre_d_form2,
                "id" => $user->id,
                "estadoEnvio" => "EN PROCESO",
                "cedula" => $identificacion_d_form2,
                "telefono" => $telefono_d_form2,
                "MontoEnviar" => $monto_enviar_d_form2,
                "nombreBeneficiario" => $nombre_b_form2,
                "cedulaBeneficiario" => $cedula_b_form2,
                "banco" => $banco_b_form2,
                "tipoCuenta" => $radioTypeBC,
                "numeroCuenta" => $nro_cuenta_form2,
                "moneda" => $id_moneda->tipo,
            ];

            $file_d_form2 = $request->all()["archivo"];
            $filename = uniqid() . '.' . $file_d_form2->getClientOriginalExtension();
            $path = 'comprobantes/USER' . $formulario->id . 'F' . uniqid();

            // Guardamos el archivo
            $isSaved = Formulario::where("id", $formulario->id)->update([
                "imagen_comprobante" => 'storage/' . $path . '/' . $filename
            ]);
            if (!$isSaved) {
                throw new \Exception("No se encontro el registro", 202);
            }

            $file_d_form2->storeAs('public/' . $path, $filename);

            Mail::to($correo_d_form2)->send(new NotificationsEmail($data));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('App\Controllers\FormController::save_form_bolivares_colven' . $e);
            return response("", 500);
        }

        return response()->json(true);
    }


    // FORM3 BolivaresPeruVen
    function save_form_bolivares_peruven(Request $request)
    {
        DB::beginTransaction();

        Log::debug($request->all());

        try {
            # Ecribimos logs de la información a procesar
            Log::debug('App\Controllers\FormController::save_form_bolivares_peruven');

            // Validar el archivo
            $validator = Validator::make($request->all(), [
                'archivo' => 'nullable|file|max:5720' // tamaño máximo en kilobytes
            ]);

            if ($validator->fails()) {
                return response('El archivo no es válido.', 400);
            }

            if (empty($request->all()["identificacion_d_form3"])) return response("EL campo identificacion debe contener un valor", 500);

            $identificacion_d_form3 = $request->all()["identificacion_d_form3"];
            $nombre_d_form3 = $request->all()["nombre_d_form3"];
            $correo_d_form3 = $request->all()["correo_d_form3"];
            $telefono_d_form3 = $request->all()["telefono_d_form3"];

            $user = User::where("identificacion", $identificacion_d_form3)->first();
            // si el usuario ya existe lo asociamos al formulario
            if (empty($user)) {
                // verficamos la integridad del email
                $resp = User::where("email", $correo_d_form3)->first();
                if (!empty($resp)) {
                    return response("EL correo electronico ya se encuentra asociado a otro cliente", 500);
                }

                $user = User::create([
                    "name" => $nombre_d_form3,
                    "email" => $correo_d_form3,
                    "password" => rand() . now(),
                    "identificacion" => $identificacion_d_form3,
                    "telefono" => "",
                    "instagram" => "",
                    "pais_d_form1" => "",
                    "rol_id" => 2,
                ]);
            }

            $nombre_b_form3 = $request->all()["nombre_b_form3"];
            $cedula_b_form3 = $request->all()["cedula_b_form3"];
            $banco_b_form3 = $request->all()["banco_b_form3"];
            $telefono_b_form3 = (isset($request->all()["telefono_b_form3"]) ? $request->all()["telefono_b_form3"] : "N/A");
            $nro_cuenta_form3 = $request->all()["nro_cuenta_form3"];
            $radioLabelBol = $request->all()["radioLabelBol"];
            $radioCuenta = $request->all()["radioCuenta"];
            $monto_b_form3 = $request->all()["monto_b_form3"];
            $radioMoneda = $request->all()["radioMoneda"];

            // obtenemos los datos relacionados al formulario
            $id_moneda = TipoMoneda::find(1);
            $id_entidad = TipoEntidad::find(3)->id;
            $id_formulario = TipoFormulario::find(3)->id;

            $formulario = Formulario::create([
                "nombre_beneficiario" => $nombre_b_form3,
                "cedula_beneficiario" => $cedula_b_form3,
                "banco_beneficiario" => $banco_b_form3,
                "telefono_beneficiario" => $telefono_b_form3,
                "nro_cuenta" => $nro_cuenta_form3,
                "tipo_persona" => $radioLabelBol,
                "tipo_cuenta" => $radioCuenta,
                "monto_enviar" => $monto_b_form3 . " - " . $radioMoneda,
                "imagen_comprobante" => "",
                "terminos_comprobante" => "OK",
                "email_comprobante" => "N/A",
                "id_moneda" => $id_moneda->id,
                "id_entidad" => $id_entidad,
                "id_formulario" => $id_formulario,
                "id_user" => $user->id,
                "id_estado" => 1,
                "archivo" => ''
            ]);

            // enviamos el email de informacion
            $data = [
                "nombre" => $nombre_d_form3,
                "id" => $user->id,
                "estadoEnvio" => "EN PROCESO",
                "cedula" => $identificacion_d_form3,
                "telefono" => $telefono_d_form3,
                "MontoEnviar" => $monto_b_form3,
                "nombreBeneficiario" => $nombre_b_form3,
                "cedulaBeneficiario" => $cedula_b_form3,
                "banco" => $banco_b_form3,
                "tipoCuenta" => $radioCuenta,
                "numeroCuenta" => $nro_cuenta_form3,
                "moneda" => $id_moneda->tipo,
            ];

            $file_form3_b = $request->all()["archivo"];
            $filename = uniqid() . '.' . $file_form3_b->getClientOriginalExtension();
            $path = 'comprobantes/USER' . $formulario->id . 'F' . uniqid();

            // Guardamos el archivo
            $isSaved = Formulario::where("id", $formulario->id)->update([
                "imagen_comprobante" => 'storage/' . $path . '/' . $filename
            ]);
            if (!$isSaved) {
                throw new \Exception("No se encontro el registro", 202);
            }

            $file_form3_b->storeAs('public/' . $path, $filename);

            Mail::to($correo_d_form3)->send(new NotificationsEmail($data));
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('App\Controllers\FormController::save_form_bolivares_colven' . $e);
            return response("", 500);
        }

        return response()->json(true);
    }
}
