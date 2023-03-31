<?php

namespace App\Http\Controllers;

class SitesController extends Controller
{

    public function index()
    {
        return view("welcome");
    }

    public function index_login()
    {
        return view("admin.login");
    }

    public function index_bolivares_peru_ven()
    {
        return view("sites.peru.BolivaresPeruVen");
    }

    public function index_cam_pay_peru()
    {
        return view("sites.peru.CamPayPeru");
    }

    public function index_bolivares_col_ven()
    {
        return view("sites.colombia.BolivaresColVen");
    }

    public function index_contacto()
    {
        return view("about.contacto");
    }

    public function index_politicas()
    {
        return view("about.politicas");
    }

    public function index_verificar_paypal()
    {
        return view("about.verificarPaypal");
    }

    public function index_otros_servicios()
    {
        return view("about.otrosServicios");
    }
}
