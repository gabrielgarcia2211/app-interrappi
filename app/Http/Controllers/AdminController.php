<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Formulario;
use App\Models\TipoMoneda;
use App\Models\TipoEntidad;
use Illuminate\Http\Request;
use App\Models\TipoFormulario;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin.dashboard");
    }
}
