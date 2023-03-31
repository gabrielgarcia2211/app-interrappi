<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formulario extends Model
{
    use HasFactory;

    protected $table = "formulario";

    protected $fillable = [
        "nombre_beneficiario",
        "cedula_beneficiario",
        "banco_beneficiario",
        "telefono_beneficiario",
        "nro_cuenta",
        "tipo_persona",
        "tipo_cuenta",
        "monto_enviar",
        "imagen_comprobante",
        "terminos_comprobante",
        "email_comprobante",
        "id_moneda",
        "id_entidad",
        "id_formulario",
        "id_user",
        "id_estado",
        "archivo",
    ];

    public static function get_form_id($id)
    {
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
            DB::raw('(CASE WHEN formulario.id_estado = 1 THEN "EN ESPERA" ELSE "REALIZADO" END) AS id_estado')
        )
            ->join("users", "users.id", "formulario.id_user")
            ->join("tipo_moneda", "tipo_moneda.id", "formulario.id_moneda")
            ->join("tipo_entidad", "tipo_entidad.id", "formulario.id_entidad")
            ->join("tipo_formulario", "tipo_formulario.id", "formulario.id_formulario")
            ->where("formulario.id", $id)
            ->get()->toArray();

        return  $response;
    }
}
