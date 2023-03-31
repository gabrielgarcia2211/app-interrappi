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

    <div class="paypalSecc1">
        <div class="cuadrointer"><br><br><br><br><br><br><br><br><br><br><br>
            <center>
                <h1>CAMBIAMOS DE PAYPAL A TU BANCO LOCAL</h1>
                <h5 style="color: white">Cambiamos los dólares de tu cuenta Paypal a los bancos más importantes del Perú,
                </h5>
                <h5 style="color: white"> a una tasa atractiva, y a la rapidez que necesitas.
                </h5>
                <h5 style="color: white"> Tú eliges cambiarlo a soles o dólares, y lo transferimos a tu cuenta Bancaria.
                </h5>
            </center>
        </div>
    </div>
    <br><br>
    <div>
        <center>
            <h6 style="font-weight:bold;color:#0039a6;margin-bottom:12px;">
                Tarifas de Cambio de Paypal a Banco Local en Perú
            </h6>
            <p>Estimado cliente, revise en la siguiente tabla nuestras comisiones según el monto a enviar.</p>
            <p>Le depositaremos en máximo 24 horas una vez recibido su pago.</p>

            <div class="tablePeru">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Monto a Cambiar</th>
                            <th scope="col">Recibe por cada $1 (a$)</th>
                            <th scope="col">Recibe por cada $1(a S/)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">De $3 a $10</th>
                            <td>Mark</td>
                            <td>Otto</td>
                        </tr>
                        <tr>
                            <th scope="row">De $11 a $20</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <th scope="row">De $21 a $100</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                        </tr>
                        <tr>
                            <th scope="row">De $101 a $500</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                        </tr>
                        <tr>
                            <th scope="row">De $501 a $2500</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                        </tr>
                    </tbody>
                </table>
                <p><small>IMPORTANTE: El monto a cambiar es el monto exacto que recibiremos en nuestra cuenta, es decir, no
                        incluye comisión de Paypal</small></p>
                <br>
                <p>Transferimos a los siguientes bancos:</p>
                <img width="650px" src="{{ asset('assets/images/bancos.png') }}">
            </div>
        </center>
    </div>
    <br>
    <div class="formuPaypal">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!--      Wizard container        -->
                <div class="wizard-container" style="margin-bottom: 50px; margin-top: 20px;">
                    <div class="card-wiz wizard-card" data-color="azzure" id="wizard">
                        <form action="" method="">
                            <div class="wizard-navigation">
                                <ul>
                                    <li>
                                        <a href="#pedidos" data-toggle="tab">¡Haz hoy tu cambio de Paypal a tu banco
                                            local!</a><i class="icon fa-sharp fa-solid fa-money-bill"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="pedidos">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text">
                                                ¡Haz hoy tu cambio de Paypal a tu banco local!
                                            </h4>
                                            <h4 class="description">
                                                Monto mínimo de envío: $5. Transferencias directas a BCP, Interbank y BBVA.
                                                Otros bancos ingresar CCI.
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="containt-formu v1">
                                        <h4 class="info-text">
                                            FORMULARIO DE CAMBIO DESDE PAYPAL A SOLES O DÓLARES
                                            <br>
                                            <br>
                                            <p style="background: red;padding: 10px;color: white;float: right;">
                                                Ingrese cuidadosamente sus datos, para evitar retrasos. Haremos su pago en
                                                la moneda local que elija, máximo en 24 horas.
                                            </p>
                                            <br>
                                            <br>
                                        </h4>
                                        <div class="row">
                                            <h4 class="sub-descripction">
                                                DATOS DE LA CUENTA A TRANSFERIR:
                                            </h4>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="NOMBRE" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="NRO DOCUMENTO" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p group-identificacion"
                                                        name="radioNoLabel" type="radio" value="check_dni_paypal"
                                                        id="check_dni_paypal" />
                                                    <label class="form-check-label" for="check_dni_paypal">
                                                        DNI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p group-identificacion"
                                                        name="radioNoLabel" type="radio" value="check_ruc_paypal"
                                                        id="check_ruc_paypal" />
                                                    <label class="form-check-label" for="check_ruc_paypal">
                                                        RUC
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p group-identificacion"
                                                        name="radioNoLabel" type="radio" value="check_ce_paypal"
                                                        id="check_ce_paypal" />
                                                    <label class="form-check-label" for="check_ce_paypal">
                                                        C.E
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p group-identificacion"
                                                        name="radioNoLabel" type="radio" value="check_otro_paypal"
                                                        id="check_otro_paypal" />
                                                    <label class="form-check-label" for="check_otro_paypal">
                                                        OTRO
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 paypal-otro-view">

                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option disabled="" selected="">
                                                            - SELECCIONAR BANCO -
                                                        </option>
                                                        <option>BCP</option>
                                                        <option>INTERBANK</option>
                                                        <option>BBVA CONTINENTAL</option>
                                                        <option>SCOTIABANK</option>
                                                        <option>BANBIF</option>
                                                        <option>BANCO PICHINCHA</option>
                                                        <option>BANCO DE LA NACION</option>
                                                        <option>OTRO</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="NRO DE CUENTA" />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioTypeCu"
                                                        type="radio" value="check_ahorros_paypal"
                                                        id="check_ahorros_paypal" />
                                                    <label class="form-check-label" for="check_ahorros_paypal">
                                                        AHORROS SOLES
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioTypeCu"
                                                        type="radio" value="check_ahorrosd_paypal"
                                                        id="check_ahorrosd_paypal" />
                                                    <label class="form-check-label" for="check_ahorrosd_paypal">
                                                        AHORROS DOLARES
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioTypeCu"
                                                        type="radio" value="check_corriente_paypal"
                                                        id="check_corriente_paypal" />
                                                    <label class="form-check-label" for="check_corriente_paypal">
                                                        CORRIENTE SOLES
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioTypeCu"
                                                        type="radio" value="check_corriented_paypal"
                                                        id="check_corriented_paypal" />
                                                    <label class="form-check-label" for="check_corriented_paypal">
                                                        CORRIENTE DOLARES
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <br>
                                        <div class="row">
                                            <h4 class="sub-descripction">DATOS DEL SOLICITANTE:</h4>
                                            <div class="col-sm-3">
                                                <h4 class="sub-descripction-label">
                                                    TU NOMBRE:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="NOMBRE" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <h4 class="sub-descripction-label">
                                                    CORREO ELECTRONICO:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" id=""
                                                        placeholder="EMAIL" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <h4 class="sub-descripction-label">
                                                    TELEFONO:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" id=""
                                                        placeholder="NRO TELEFONO" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <h4 class="sub-descripction-label">
                                                    PAIS:
                                                </h4>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option disabled="" selected="">
                                                            - PAIS DONDE RESIDE -
                                                        </option>
                                                        <option>VENEZUELA</option>
                                                        <option>COLOMBIA</option>
                                                        <option>ECUADOR</option>
                                                        <option>PERÚ</option>
                                                        <option>PANAMÁ</option>
                                                        <option>ARGENTINA</option>
                                                        <option>CHILE</option>
                                                        <option>BOLIVIA</option>
                                                        <option>BRASIL</option>
                                                        <option>URUGUAY</option>
                                                        <option>PARAGUAY</option>
                                                        <option>MEXICO</option>
                                                        <option>USA</option>
                                                        <option>ESPAÑA</option>
                                                        <option>OTRO</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <h4 class="sub-descripction">DATOS DE ENVIO:</h4>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    MONTO A CAMBIAR $:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="MONTO" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4" style="text-align: left;">
                                                <p style="padding: 10px;">Monto a Pagar en Pyapal:</p>
                                                </p>
                                                <div class="input-group">
                                                    <span class="input-group-addon input-cant">$</span>
                                                    <input type="text" class="form-control"
                                                        aria-label="Amount (to the nearest dollar)">
                                                    <span class="input-group-addon input-cant-fin">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p style="text-align: left;">► Una vez que des clic en el botón ENVIAR se
                                                    le redirigirá a una nueva página para completar el proceso de pago. Si
                                                    tiene dudas por favor comuníquese antes con nosotros y le ayudaremos con
                                                    mucho gusto a guiarle en completar este nuevo proceso de pago.</p>
                                            </div>
                                            <div class="col-sm-4" style="text-align: left;">
                                                <h4 class="sub-descripction-label">
                                                    Email de Paypal*
                                                </h4>
                                                <p>Email de la cuenta de Paypal desde donde realizará el pago:</p>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id=""
                                                        placeholder="EMAIL" />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="form-check">
                                                <input class="form-check-input radio-p" type="radio"
                                                    value="check_terminos" id="check_terminos"
                                                    style="display: inline-block;" />
                                                <label class="form-check-label" for="check_terminos"
                                                    style="display: inline-block;">
                                                    Al enviar este formulario, usted está aceptando nuestros <a
                                                        href="../politicas.html" target="_blank">Terminos y
                                                        Condiciones</a>
                                                </label>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="row" style="text-align: center;">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-danger">
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

    <!-- =========================
        FOOTER SECTION
    ============================== -->
    @include('dash.footer')

    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
@endsection
