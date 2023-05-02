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

    <div class="bolperuven">
        <div class="cuadrointer"><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <center>
                <h1>ENVÍO DE BOLÍVARES DE PERÚ A VENEZUELA</h1>
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
            <h1>TASA DEL BOLÍVAR EN PERÚ</h1>
            <h2>Valor al 10th febrero 2023</h2>
            <h1>´´´´´´´´´´´´´´´´´´´´´´´´</h1>
            <h1>1 Sol = 6.00 Bs.S</h1>
            <h1>1 Dólar = 23.10 Bs.S</h1>
        </center>
    </div>
    <center>
        <div class="numCuentas">

            <h3>NUESTROS NÚMEROS DE CUENTAS</h3>
            <ul class="item">

                <li> Deposite o transfiera a cualquiera de nuestros números de cuentas. Por favor evite realizar depósitos
                    por ventanilla del banco para evitar cargos adicionales</li><br>
                <li> A quienes se encuentren en provincia (fuera de Lima), recuerde que, a excepción de Scotiabank, el banco
                    cobrará una comisión adicional, el cuál será descontado manualmente una vez corroboremos el dinero en
                    nuestra cuenta (puede averiguar en su agencia bancaria la comisión que se cobra por depósitos de
                    provincia a Lima)
                </li><br>
                <li> El monto mínimo a depositar o transferir es 20 soles o 10 dólares, le recordamos que <u>no cobramos
                        comisiones</u> por nuestros servicios.</li><br>
                <br>
            </ul>
            <div class="row">
                <div class="wow fadeInUp col-md-6 col-sm-5" data-wow-delay="0.3s">
                    <div class="contact_des">
                        <img src="{{ asset('assets/images/LogoBCP-300x80.png') }}" class="img-responsive" alt="paypal" />
                        <div class="speakers-thumb">
                            <h6>BCP Soles es 19493818616076.</h6>
                            <h6>BCP Dólares es 19496026960127</h6>
                            <h6>A nombre de Mawir Ruiz</h6>
                        </div>
                    </div>
                </div>
                <div class="wow fadeInUp col-md-4 col-sm-3" data-wow-delay="0.3s">
                    <div class="contact_des">
                        <img width="150px" src="{{ asset('assets/images/codQr.jpeg') }}" class="img-responsive"
                            alt="paypal" />
                        <div class="speakers-thumb">
                            <h3>Qr yamper</h3>
                            <h6>987919513</h6>
                            <h6>A nombre de Brandy Mejía</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
    <div class="formubolPeru">
        <br>
        <center>
            <h2>FORMULARIO DE PEDIDO DE BOLÍVARES</h2>
            <p>Por favor ingrese con cuidado sus datos a través del siguiente formulario. En Monto ingrese el monto exacto
                de su voucher de depósito o transferencia.</p>
        </center>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!--      Wizard container        -->
                <div class="wizard-container" style="margin-bottom: 50px; margin-top: 20px;">
                    <div class="card-wiz wizard-card" data-color="azzure" id="wizard">
                        <form action="../form/save/BolivaresPeruVen" method="POST" id="BolivaresPeruVen-form">
                            @csrf
                            <div class="wizard-navigation">
                                <ul>
                                    <li>
                                        <a href="#pedidos" data-toggle="tab">¡DILIGENCIAMIENTO DE FORMUALRIO!</a><i
                                            class="icon fa-sharp fa-solid fa-money-bill"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="pedidos">
                                    <div class="containt-formu v2">
                                        <div class="row">
                                            <h4 class="sub-descripction">
                                                DATOS DEL BENEFICIARIO:
                                            </h4>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    NOMBRE DEL BENEFICIARIO:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="nombre_b_form3"
                                                    name="nombre_b_form3" placeholder="NOMBRE" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    CEDULA DEL BENEFICIARIO:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" id="cedula_b_form3"
                                                    name="cedula_b_form3" placeholder="NOMBRE" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    TIPO DE IDENTIFICACION:
                                                </h4>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioLabelBol"
                                                        type="radio" value="check_v_bolivares" id="check_v_bolivares" />
                                                    <label class="form-check-label" for="check_v_bolivares">
                                                        V
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioLabelBol"
                                                        type="radio" value="check_e_bolivares" id="check_e_bolivares" />
                                                    <label class="form-check-label" for="check_e_bolivares">
                                                        E
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioLabelBol"
                                                        type="radio" value="check_j_bolivares" id="check_j_bolivares" />
                                                    <label class="form-check-label" for="check_j_bolivares">
                                                        J
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioLabelBol"
                                                        type="radio" value="check_p_bolivares" id="check_p_bolivares" />
                                                    <label class="form-check-label" for="check_p_bolivares">
                                                        P
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    BANCO:
                                                </h4>
                                                <div class="form-group">
                                                    <select class="form-control" id="banco_b_form3">
                                                        <option disabled="" selected="">
                                                            - SELECCIONAR BANCO -
                                                        </option>
                                                        <option value="0" data-num="">Banesco Banco Universal
                                                        </option>
                                                        <option value="1" data-num="">Banco de Venezuela</option>
                                                        <option value="2" data-num="">Banco Provincial</option>
                                                        <option value="3" data-num="">Banco Mercantil</option>
                                                        <option value="4" data-num="">Banco Occidental de
                                                            Descuento</option>
                                                        <option value="5" data-num="">Bancaribe</option>
                                                        <option value="6" data-num="">Banco Exterior</option>
                                                        <option value="7" data-num="">Venezolano de Crédito
                                                        </option>
                                                        <option value="8" data-num="">Banco Central de Venezuela
                                                        </option>
                                                        <option value="9" data-num="">Banco Industrial de
                                                            Venezuela</option>
                                                        <option value="10" data-num="">Banco Caroní</option>
                                                        <option value="11" data-num="">Banco Sofitasa</option>
                                                        <option value="12" data-num="">Banco Plaza Banco Universal
                                                        </option>
                                                        <option value="13" data-num="">Banco de la Gente
                                                            Emprendedora</option>
                                                        <option value="14" data-num="">Banco del Pueblo Soberano
                                                        </option>
                                                        <option value="15" data-num="">Banco Fondo Común</option>
                                                        <option value="16" data-num="">100% Banco</option>
                                                        <option value="17" data-num="">DelSur Banco Universal
                                                        </option>
                                                        <option value="18" data-num="">Banco del Tesoro</option>
                                                        <option value="19" data-num="">Banco Agrícola de Venezuela
                                                        </option>
                                                        <option value="20" data-num="">Bancrecer, Banco
                                                            Microfinanciero</option>
                                                        <option value="21" data-num="">Mi Banco Banco
                                                            Microfinanciero</option>
                                                        <option value="22" data-num="">Banco Activo</option>
                                                        <option value="23" data-num="">Bancamiga Banco
                                                            Microfinanciero</option>
                                                        <option value="24" data-num="">Banco Internacional de
                                                            Desarrollo</option>
                                                        <option value="25" data-num="">Banplus Banco Universal
                                                        </option>
                                                        <option value="26" data-num="">Banco Bicentenario Banco
                                                            Universal</option>
                                                        <option value="27" data-num="">Banco Espirito Santo
                                                        </option>
                                                        <option value="28" data-num="">Banco de la Fuerza Armada
                                                            Nacional Bolivariana</option>
                                                        <option value="29" data-num="">Citibank</option>
                                                        <option value="30" data-num="">Banco Nacional de Crédito
                                                        </option>
                                                        <option value="31" data-num="">Instituto Municipal de
                                                            Crédito Popular</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    NUMERO DE CUENTA:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" id="nro_cuenta_form3"
                                                    name="nro_cuenta_form3" placeholder="CUENTA" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4 moneda-otro-view">
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    TIPO DE CUENTA:
                                                </h4>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioCuenta"
                                                        type="radio" value="check_ahorros_bolivares"
                                                        id="check_ahorros_bolivares" />
                                                    <label class="form-check-label" for="check_ahorros_bolivares">
                                                        AHORROS
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioCuenta"
                                                        type="radio" value="check_corriente_bolivares"
                                                        id="check_corriente_bolivares" />
                                                    <label class="form-check-label" for="check_corriente_bolivares">
                                                        CORRIENTE
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    MONEDA:
                                                </h4>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p group-moneda"
                                                        name="radioMoneda" type="radio" value="check_moneda_soles"
                                                        id="check_moneda_soles" />
                                                    <label class="form-check-label" for="check_moneda_soles">
                                                        SOLES
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p group-moneda"
                                                        name="radioMoneda" type="radio" value="check_moneda_dolares"
                                                        id="check_moneda_dolares" />
                                                    <label class="form-check-label" for="check_moneda_dolares">
                                                        DOLARES
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    MONTO A CAMBIAR $:
                                                </h4>
                                                <div class="form-group">
                                                    <input
                                                        type="number"
                                                        class="form-control"
                                                        id="monto_b_form3"
                                                        name="monto_b_form3"
                                                        placeholder="MONTO"
                                                        onkeyup="changeValue(this.value)"
                                                    />
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label>Monto BS</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <p id="para"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-6" style="margin-right: 8px;">
                                                <p class="descripcion-formu">
                                                    ¿Su cuenta bancaria tiene habilitada la opción de
                                                    Pago Móvil?
                                                </p>
                                                <p style="text-align: justify;">
                                                    En caso no tengamos disponibilidad en el banco que
                                                    ha elegido y nos brinda sus datos de pago móvil, le
                                                    realizaremos su transferencia por medio de este
                                                    método.
                                                </p>
                                                <div class="form-check" style="margin-left: 10px">
                                                    <input class="form-check-input radio-p group-bolivares-bp"
                                                        name="radioTypeH" type="radio" value="check_h_bolivares_si"
                                                        id="check_h_bolivares_si" />
                                                    <label class="form-check-label" for="check_h_bolivares_si">
                                                        SI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p group-bolivares-bp"
                                                        name="radioTypeH" type="radio" value="check_h_bolivares_no"
                                                        id="check_h_bolivares_no" />
                                                    <label class="form-check-label" for="check_h_bolivares_no">
                                                        NO
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-5 group-bolivares-view-bp">

                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    NOMBRE DEL DEPOSITANTE:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="nombre_d_form3"
                                                    name="nombre_d_form3" placeholder="NOMBRE" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    EMAIL DEL DEPOSITANTE:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="correo_d_form3"
                                                    name="correo_d_form3" placeholder="EMAIL" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    CELULAR DEL DEPOSITANTE:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" id="telefono_d_form3"
                                                    name="telefono_d_form3" placeholder="CELULAR" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    TU IDENTIFICACION:
                                                </h4>
                                                <div class="form-group">
                                                    <input type="number" class="form-control"
                                                        id="identificacion_d_form3" name="identificacion_d_form3"
                                                        placeholder="IDENTIFICACION" />
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo de
                                                    archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de archivo: 1
                                                    | Cantidad minima de archivo: 1</p>
                                                <hr>
                                                <input type="file" class="form-control" id="file_form3_b" nameid="file_form3_b" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
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

    <!-- =========================
        FOOTER SECTION
    ============================== -->
    @include('dash.footer')

    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
@endsection
