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
    <section id="verificar" class="parallax-section">
        <div class="container">
            <br /><br /><br /><br /><br />

            <center>
                <h2 class="wow fadeInUp" data-wow-delay="0.6s">
                    VERIFICACIÓN DE CUENTAS PAYPAL
                </h2>
                <p class="wow fadeInUp" data-wow-delay="0.6s">
                    Inicio / Verificación de Cuentas PayPal
                </p>
            </center>
        </div>
    </section>
    <div class="infoVerificar">

        <p>
            Ofrecemos el servicio de verificación de cuentas de PayPal, cuentas de
            distintos países como Venezuela, Colombia, Chile, Argentina, Perú,
            Ecuador, Panamá, Bolivia, etc.
        </p>
        <p>
            Si tienes dificultad al momento de verificar tu cuenta, nosotros te
            podemos ayudar a verificarlo, y así poder quitar las limitaciones en
            pagos, en ciertas páginas que requieren una tarjeta asociada; es
            decir, requieren de una cuenta verificada para poder proseguir con tus
            compras.
        </p>
    </div>
    <section id="overview" class="parallax-section">
        <div class="container">
            <center>
                <h2>TARJETAS DISPONIBLES</h2>
                <div id="owl-speakers" class="owl-carousel">
                    <div class="tarjetas" data-wow-delay="0.3s">
                        <div>
                            <img style="right: 150px;" src="{{ asset('assets/images/TARJETA_3MESES.png') }}" alt="paypal" />
                        </div>
                    </div>
                    <div class="tarjetas" data-wow-delay="0.9s">
                        <div>
                            <img style="right: 150px;" src="{{ asset('assets/images/TARJETAS_6MESES.png') }}" alt="paypal" />

                        </div>
                    </div>
                    <div class="tarjetas" data-wow-delay="0.9s">
                        <div>
                            <img style="right: 150px;" src="{{ asset('assets/images/TARJETAS_1A.png') }}" alt="paypal" />

                        </div>
                    </div>
                    <div class="tarjetas" data-wow-delay="0.9s">
                        <div>
                            <img style="right: 150px;"src="{{ asset('assets/images/TARJETAS_5A.png') }}" alt="paypal" />

                        </div>
                    </div>

                </div>

            </center>
        </div>
    </section>
    <div class="formuVeri">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <!--      Wizard container        -->
                <div class="wizard-container" style="margin-bottom: 50px; margin-top: 20px;">
                    <div class="card-wiz wizard-card" data-color="azzure" id="wizard">
                        <form action="" method="">
                            <div class="wizard-navigation">
                                <ul>
                                    <li>
                                        <a href="#pedidos" data-toggle="tab">¡FORMULARIO DE SOLICITUD DE VERIFICACIÓN DE
                                            CUENTA DE PAYPAL!</a><i class="icon fa-sharp fa-solid fa-money-bill"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="pedidos">
                                    <div class="containt-formu">
                                        <div class="row">
                                            <h4 class="sub-descripction">
                                                DATOS DEL BENEFICIARIO:
                                            </h4>
                                            <div class="col-sm-4">
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
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    NUMERO DE CUENTAS A VERIFICAR:
                                                </h4>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option disabled="" selected="">
                                                            - CANTIDAD DE CUENTAS -
                                                        </option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    DURACION DE TARJETA:
                                                </h4>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option disabled="" selected="">
                                                            - TIEMPO -
                                                        </option>
                                                        <option>3 MESES</option>
                                                        <option>6 MESES</option>
                                                        <option>1 AÑO</option>
                                                        <option>5 AÑO</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <h4 class="sub-descripction">
                                                FORMA DE PAGO:
                                            </h4>
                                            <div class="col-sm-4">
                                                <h4 class="sub-descripction-label">
                                                    TIPO:
                                                </h4>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p group-paypal-pago"
                                                        name="radioVpaypal" type="radio" value="check_verificar_paypalb"
                                                        id="check_verificar_paypalb" />
                                                    <label class="form-check-label" for="check_verificar_paypalb">
                                                        BOLIVARES
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p group-paypal-pago"
                                                        name="radioVpaypal" type="radio" value="check_verificar_paypald"
                                                        id="check_verificar_paypald" />
                                                    <label class="form-check-label" for="check_verificar_paypald">
                                                        DOLARES PAYPAL
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="group-paypal-pago-bp" style="margin-top: -60px !important"></div>
                                        </div>
                                        <br>
                                        <hr>
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
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="content">
                                                    <p style="text-align: justify;"><i class="fa-solid fa-image"></i>
                                                        Adjuntar Voucher</p>
                                                    <hr>
                                                    <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo
                                                        de archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de
                                                        archivo: 1 | Cantidad minima de archivo: 1</p>
                                                    <hr>
                                                    <input type="file" class="form-control" id="customFile" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="padding: 10px;">
                                                <p style="text-align: justify;">
                                                    ¿Tu cuenta PayPal se usará para pagar publicidad?
                                                    ¿Vas a verificar tu cuenta PayPal para pagar publicidad en Facebook,
                                                    Instagram, Google Ads, etc ?
                                                </p>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioValidatepaypal"
                                                        type="radio" value="check_verificar_paypal_si"
                                                        id="check_verificar_paypal_si" />
                                                    <label class="form-check-label" for="check_verificar_paypal_si">
                                                        SI
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input radio-p" name="radioValidatepaypal"
                                                        type="radio" value="check_verificar_paypal_no"
                                                        id="check_verificar_paypal_no" />
                                                    <label class="form-check-label" for="check_verificar_paypal_no">
                                                        NO
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
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
                        </form>
                    </div>
                </div>
            </div>
            <!-- wizard container -->
        </div>
    </div>

    @include('dash.footer')
    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
@endsection
