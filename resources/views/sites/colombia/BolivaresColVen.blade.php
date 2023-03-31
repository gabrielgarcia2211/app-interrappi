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
            <h3>Valor al 11th febrero 2023</h3>
            <h1>´´´´´´´´´´´´´´´´´´´´´´´´</h1>
            <h1>Tasa = 220</h1>
            <h1>10,000 Pesos = 45.454 Bs.S</h1>
        </center>
    </div>
    <center>
        <div class="numCuentas">

            <h3>NUESTROS NÚMEROS DE CUENTAS</h3>
            <ul class="item">

                <li> Deposite o transfiera a nuestro siguiente número de cuenta. El monto mínimo a depositar es 10,000
                    pesos. Dudas o consultas, escríbanos a nuestras redes sociales (Facebook o Instagram).</li><br>
                <br>
            </ul>
            <h2>esperando la cuenta </h2>

        </div>
    </center>
    <div>
        <div class="formuPayCol">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container" style="margin-bottom: 50px; margin-top: 20px;">
                        <div class="card-wiz wizard-card" data-color="azzure" id="wizard">
                            <form action="" method="">
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
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="NOMBRE" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        CEDULA DEL BENEFICIARIO:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="NRO DOCUMENTO" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        BANCO
                                                    </h4>
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
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        NUMERO DE CUENTA:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="NRO DE CUENTA" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        TIPO DE PERSONA:
                                                    </h4>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioNoLabel"
                                                            type="radio" value="check_v_bc" id="check_v_bc" />
                                                        <label class="form-check-label" for="check_v_bc">
                                                            V
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioNoLabel"
                                                            type="radio" value="check_e_bc" id="check_e_bc" />
                                                        <label class="form-check-label" for="check_e_bc">
                                                            E
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioNoLabel"
                                                            type="radio" value="check_j_bc" id="check_j_bc" />
                                                        <label class="form-check-label" for="check_j_bc">
                                                            J
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioNoLabel"
                                                            type="radio" value="check_p_bc" id="check_p_bc" />
                                                        <label class="form-check-label" for="check_p_bc">
                                                            P
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        TIPO DE CUENTA
                                                    </h4>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioTypeBC"
                                                            type="radio" value="check_ahorros_bc"
                                                            id="check_ahorros_bc" />
                                                        <label class="form-check-label" for="check_ahorros_bc">
                                                            AHORROS
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input radio-p" name="radioTypeBC"
                                                            type="radio" value="check_corriente_bc"
                                                            id="check_corriente_bc" />
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
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="NOMBRE" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        CORREO ELECTRONICO:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" id=""
                                                            placeholder="EMAIL" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        TELEFONO:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" id=""
                                                            placeholder="NRO TELEFONO" />
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
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="MONTO" />
                                                    </div>
                                                    <p style="text-align: left; display: inline-block;">Conversión a
                                                        Bolívares:</p>
                                                    <p style="text-align: left; display: inline-block;"><b>$ 00:</b></p>
                                                </div>
                                                <div class="col-sm-5" style="text-align: left;">
                                                    <p style="text-align: justify;"><i class="fa-solid fa-image"></i>
                                                        Adjuntar Vocuher</p>
                                                    <hr>
                                                    <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo
                                                        de archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de
                                                        archivo: 1 | Cantidad minima de archivo: 1</p>
                                                    <hr>
                                                    <input type="file" class="form-control" id="customFile" />
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row" style="text-align: center;">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn btn-primary" style="width: 100%;">
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
