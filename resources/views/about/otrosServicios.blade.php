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

    <div class="otraSecc1">
        <div class="cuadrointer"><br><br><br><br><br><br><br><br><br><br><br>
            <center>
                <h1>NETFLIX EN VENEZUELA</h1>
                <h5 style="color: white">Solicita hoy tu Perfil de Netflix y págalo en bolívares</h5>

            </center>
        </div>
    </div>
    <br><br>
    <center>
        <div class="netflix">

            <div class="row">
                <div class="wow fadeInUp col-md-6 col-sm-5" data-wow-delay="0.3s">
                    <div class="contact_des">
                        <p style="color: black;">Adquiere tu perfil de Netflix en Venezuela y obtén los siguientes
                            beneficios:</p>
                        <ul class="item">
                            <li> Págalo en tu moneda local, bolívares. </li><br>
                            <li> Películas y programas ilimitados.</li>
                            <li> Perfil Premium en Calidad Ultra HD (4K).</li>
                            <li> Renuévalo cada 30 días, sin contratos.</li>
                        </ul><br><br><br><br>
                        <img src="{{ asset('assets/images/netflix-ultra-hd-191x99.jpg') }}">
                    </div>
                </div>
                <div class="wow fadeInUp col-md-4 col-sm-3" data-wow-delay="0.3s">
                    <div class="contact_des">
                        <img width="550px" src="{{ asset('assets/images/netflix-1.jpg') }}">
                    </div>
                </div>
            </div>

        </div>
    </center>
    <br>
    <div class="tasaNetflix">
        <br>
        <center>
            <h2 style="color: red;">TASA NETFLIX</h2>
            <h3 style="color: yellow;">1 Dólar = 24.20 Bs.S</h3>
            <h2>Adquiere Hoy tu Perfil Netflix</h2>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!--      Wizard container        -->
                    <div class="wizard-container" style="margin-bottom: 50px; margin-top: 20px;">
                        <div class="card-wiz wizard-card" data-color="red" id="wizard">
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
                                        <div class="containt-formu v3">
                                            <div class="row">
                                                <h4 class="sub-descripction">
                                                    DATOS A TRANSFERIR:
                                                </h4>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        SOLICITANTE:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="SOLICITANTE" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        DIRECCION EMAIL:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="EMAIL" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        NUMERO DE TELEFONO:
                                                    </h4>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id=""
                                                            placeholder="NRO TELEFONO" />
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>
                                            <div class="row">
                                                <h4 class="sub-descripction">
                                                    DATOS A TRANSFERIR:
                                                </h4>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        Cantidad de Perfiles:
                                                    </h4>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option disabled="" selected="">
                                                                - SELECCIONAR -
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
                                                        País donde usará su Perfil de Netflix:
                                                    </h4>
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id=""
                                                                placeholder="TU PAIS" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="sub-descripction-label">
                                                        Dispositivo(s) donde usará Netflix:
                                                    </h4>
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option disabled="" selected="">
                                                                - SELECCIONAR -
                                                            </option>
                                                            <option value="0" data-num="">Teléfono con Android
                                                            </option>
                                                            <option value="1" data-num="">iPhone</option>
                                                            <option value="2" data-num="">Tablet con Android
                                                            </option>
                                                            <option value="3" data-num="">Tablet con Windows
                                                            </option>
                                                            <option value="4" data-num="">iPad</option>
                                                            <option value="5" data-num="">Laptop/PC con Windows
                                                            </option>
                                                            <option value="6" data-num="">Macbook</option>
                                                            <option value="7" data-num="">Smart TV</option>
                                                            <option value="others"
                                                                data-condid="ipt_fsqm_form_63_mcq_1_others_wrap">Otro(s)
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p style="padding: 10px;">Monto a Pagar en Bolivares:</p>
                                                    </p>
                                                    <div class="input-group">
                                                        <span class="input-group-addon input-cant">$</span>
                                                        <input type="text" class="form-control"
                                                            aria-label="Amount (to the nearest dollar)">
                                                        <span class="input-group-addon input-cant-fin">.00</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <p style="text-align: justify;">Cóntáctese a nuestras Redes Sociales,
                                                        Facebook o Instagram, para solicitar nuestros números de cuentas,
                                                        donde deberá realizar el pago. Nos encuentra como:
                                                        <b>@intergiros.oficial</b></p>
                                                </div>
                                                <div class="col-sm-5" style="text-align: left;">
                                                    <p style="text-align: justify;"><i class="fa-solid fa-image"></i> Si
                                                        ya Realizó el Pago Adjunte el Comprobante</p>
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
                                                    <button type="button" class="btn btn-danger" style="width: 100%;">
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
        </center>
    </div>
    <div id="mascara"></div>
    <br>
    <!-- =========================
        FOOTER SECTION
    ============================== -->
    @include('dash.footer')

    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

    <!-- =========================
         SCRIPTS
    ============================== -->
@endsection

