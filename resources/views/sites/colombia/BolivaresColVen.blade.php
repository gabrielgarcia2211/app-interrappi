@extends('layouts.app')

@section('content')
    <!-- =========================
             PRE LOADER
        ============================== -->
    <div class="preloader">
        <div class="sk-rotating-plane"></div>
    </div>

    <!-- =========================
             NAVIGATION LINKS
        ============================== -->
    @include('dash.nav')

    <div class="bolColven">
        <div class="cuadrointer"><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <center>
                <h1>ENVÍO DE BOLÍVARES DE COLOMBIA A VENEZUELA</h1>
                <h5 style="color: white">POR DEPÓSITO O TRANSFERENCIA BANCARIA
                </h5>
            </center>
        </div>
    </div>
    <br><br>
    <br>
    <div class="seccion1bolPeru">
        <br> <br>
        <center>
            <h1>TASA DEL BOLÍVAR EN COLOMBIA</h1>
            <h3>{{ \Carbon\Carbon::now()->format('jS F Y') }}</h3>
            <h1>´´´´´´´´´´´´´´´´´´´´´´´´</h1>
            <h1>Tasa = 220</h1>
            <h2>{{ '$10.000 Pesos = ' . (optional(App\Models\TasaCambio::where('descripcion', 'pay-bolivares-colven')->first())->valor ?? 'N/A') . ' Bs' }}
            </h2>
        </center>
    </div>
    <center>
        <div class="numCuentas" >
            <h3>NUESTROS NÚMEROS DE CUENTAS</h3>
            <ul class="item">
                <li> Deposite o transfiera a nuestro siguiente número de cuenta. El monto mínimo a depositar es 10,000
                    pesos. Dudas o consultas, escríbanos a nuestras redes sociales (Facebook o Instagram).</li><br>
                <br>
            </ul>
            <h2>Bancolombia: Mawir Ruiz</h2>
            <h3><b>08800011815</b> - Ahorros</h3>
            <h3>PASAPORTE 5005328728</h3>
        </div>
        <br>
    </center>
    <div>
        <div class="formuPayCol" id="formuPayCol">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container" style="margin-bottom: 50px; margin-top: 20px;">
                        <div class="card-wiz wizard-card" data-color="azzure" id="wizard">
                            <form action="../form/save/BolivaresColVen" method="POST" id="BolivaresColVen-form">
                                @csrf
                                <div class="wizard-navigation">
                                    <ul>
                                        <li>
                                            <a href="#pedidos" data-toggle="tab">¡PROCESO DE REGISTRO!</a><i
                                                class="icon fa-sharp fa-solid fa-money-bill"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="pedidos">
                                        <div class="containt-formu v1">
                                            <h4 class="info-text">
                                                FORMULARIO DE PEDIDO DE BOLÍVARES
                                                <br>
                                                <br>
                                                <p style="padding: 10px;color: white;float: right;">
                                                    Por favor ingrese con cuidado sus datos a través del siguiente
                                                    formulario. En Monto ingrese el monto exacto de su voucher de depósito o
                                                    transferencia.
                                                </p>
                                                <br>
                                                <br>
                                            </h4>
                                            <div class="row">
                                                <h4 class="sub-descripction">
                                                    DATOS DE LA CUENTA A TRANSFERIR:
                                                </h4>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        NOMBRE DEL BENEFICIARIO:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="nombre_b_form2"
                                                            name="nombre_b_form2" placeholder="NOMBRE" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        CEDULA DEL BENEFICIARIO:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="cedula_b_form2"
                                                            name="cedula_b_form2" placeholder="NRO DOCUMENTO" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        BANCO
                                                    </h4>
                                                    <div class="form-group">
                                                        <select class="form-control" id="banco_b_form2"
                                                            name="banco_b_form2">
                                                            <option disabled="" selected="">
                                                                - SELECCIONAR BANCO -
                                                            </option>
                                                            <option>Banesco Banco Universal</option>
                                                            <option>Banco de Venezuela</option>
                                                            <option>Banco Provincial</option>
                                                            <option>Banco Mercantil</option>
                                                            <option>Banco Occidental de Descuento</option>
                                                            <option>Bancaribe</option>
                                                            <option>Banco Exterior</option>
                                                            <option>Venezolano de Crédito</option>
                                                            <option>Banco Central de Venezuela</option>
                                                            <option>Banco Industrial de Venezuela</option>
                                                            <option>Banco Caroní</option>
                                                            <option>Banco Sofitasa</option>
                                                            <option>Banco Plaza Banco Universal</option>
                                                            <option>Banco de la Gente Emprendedora</option>
                                                            <option>Banco del Pueblo Soberano</option>
                                                            <option>Banco Fondo Común</option>
                                                            <option>100% Banco</option>
                                                            <option>DelSur Banco Universal</option>
                                                            <option>Banco del Tesoro</option>
                                                            <option>Banco Agrícola de Venezuela</option>
                                                            <option>Bancrecer, Banco Microfinanciero</option>
                                                            <option>Mi Banco Banco Microfinanciero</option>
                                                            <option>Banco Activo</option>
                                                            <option>Bancamiga Banco Microfinanciero</option>
                                                            <option>Banco Internacional de Desarrollo</option>
                                                            <option>Banplus Banco Universal</option>
                                                            <option>Banco Bicentenario Banco Universal</option>
                                                            <option>Banco Espirito Santo</option>
                                                            <option>Banco de la Fuerza Armada Nacional Bolivariana</option>
                                                            <option>Citibank</option>
                                                            <option>Banco Nacional de Crédito</option>
                                                            <option>Instituto Municipal de Crédito Popular</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        NUMERO DE CUENTA:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="nro_cuenta_form2"
                                                            name="nro_cuenta_form2" placeholder="NRO DE CUENTA" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h4 class="sub-descripction-label">
                                                        TIPO DE PERSONA:
                                                    </h4>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioNoLabel2"
                                                            type="radio" value="V" id="check_v_bc" checked />
                                                        <label class="form-check-label" for="check_v_bc">
                                                            V
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioNoLabel2"
                                                            type="radio" value="E" id="check_e_bc" />
                                                        <label class="form-check-label" for="check_e_bc">
                                                            E
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioNoLabel2"
                                                            type="radio" value="J" id="check_j_bc" />
                                                        <label class="form-check-label" for="check_j_bc">
                                                            J
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioNoLabel2"
                                                            type="radio" value="P" id="check_p_bc" />
                                                        <label class="form-check-label" for="check_p_bc">
                                                            P
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h4 class="sub-descripction-label">
                                                        TIPO DE CUENTA
                                                    </h4>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioTypeBC"
                                                            type="radio" value="ahorros" id="check_ahorros_bc"
                                                            checked />
                                                        <label class="form-check-label" for="check_ahorros_bc">
                                                            AHORROS
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioTypeBC"
                                                            type="radio" value="corriente" id="check_corriente_bc" />
                                                        <label class="form-check-label" for="check_corriente_bc">
                                                            CORRIENTE
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <h4 class="sub-descripction">DATOS DEL SOLICITANTE:</h4>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        TU NOMBRE:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="nombre_d_form2"
                                                            name="nombre_d_form2" placeholder="NOMBRE" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        TU IDENTIFICACION:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control"
                                                            id="identificacion_d_form2" name="identificacion_d_form2"
                                                            placeholder="IDENTIFICACION" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        CORREO ELECTRONICO:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="correo_d_form2"
                                                            name="correo_d_form2" placeholder="EMAIL" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        TELEFONO:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" id="telefono_d_form2"
                                                            name="telefono_d_form2" placeholder="NRO TELEFONO" />
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <h4 class="sub-descripction">DATOS DE ENVIO:</h4>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        MONTO A CAMBIAR $:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            id="monto_enviar_d_form2" name="monto_enviar_d_form2"
                                                            placeholder="MONTO"
                                                            onkeyup="dev_formato_moneda_form2(id, value)" />
                                                        <div id="alerta_monto_form2" class="alert alert-danger"
                                                            style="display: none">El valor minimo es $10.000*</div>
                                                    </div>
                                                    <p style="text-align: left; display: inline-block;">Conversión a
                                                        Bolívares:</p>
                                                    <p style="text-align: left; display: inline-block;"
                                                        id="conversion_form2"><b>$</b>00</p>
                                                </div>
                                                <div class="col-sm-5" style="text-align: left;">
                                                    <p style="text-align: justify;"><i class="fa-solid fa-image"></i>
                                                        Adjuntar Vocuher</p>
                                                    <hr>
                                                    <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo
                                                        de archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de
                                                        archivo: 1 | Cantidad minima de archivo: 1</p>
                                                    <hr>
                                                    <input type="file" class="form-control" id="file_d_form2"
                                                        name="file_d_form2" />
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row" style="margin-left: 10px">
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input radio-p"
                                                        type="radio"
                                                        value="check_terminos_bolivares_colven"
                                                        id="check_terminos_bolivares_colven"
                                                        style="display: inline-block;"
                                                    />
                                                    <label class="form-check-label" for="check_terminos_bolivares_colven" style="display: inline-block;">
                                                        Al enviar este formulario, usted está aceptando nuestros <a href="../sites/politicas" target="_blank">Terminos y Condiciones</a>
                                                    </label>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row" style="text-align: center;">
                                                <div class="col-md-12">
                                                    <button type="button" onclick="send_form_bolivares_colven()"
                                                        class="btn btn-primary" style="width: 100%;">
                                                        Enviar
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- wizard container -->
            </div>
        </div>
    </div>

    <!-- =========================
            FOOTER SECTION
        ============================== -->
    @include('dash.footer')

    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
@endsection
