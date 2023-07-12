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

    <!-- =========================
                                    INTRO SECTION
                                    ============================== -->

    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="2000" id="bs-carousel">
        <!-- Overlay -->
        <div class="overlay"></div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bs-carousel" data-slide-to="1"></li>
            <li data-target="#bs-carousel" data-slide-to="2"></li>
            <li data-target="#bs-carousel" data-slide-to="3"></li>
            <li data-target="#bs-carousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item slides active">
                <div class="slide-1"></div>
                <div class="hero">
                    <hgroup></hgroup>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">
                    <hgroup></hgroup>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-3"></div>
                <div class="hero">
                    <hgroup></hgroup>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-4"></div>
                <div class="hero">
                    <hgroup></hgroup>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-5"></div>
                <div class="hero">
                    <hgroup></hgroup>
                </div>
            </div>
        </div>
    </div>

    <!-- =========================
                                    OVERVIEW SECTION
                                    ============================== -->
    <section id="overview" class="parallax-section">
        <div class="container">
            <center>
                <div class="statusInfo">
                    <div id="status-button" class="row" style="width: 40%">
                        <div class="col-sm-6" style="margin-top: 5px">
                            <button class="btn btn-success">
                                <a href="{{ route('site.verificarPaypal') }}">Verifica Tu Cuenta de PayPal</a>
                            </button>
                        </div>
                        <div class="col-sm-6" style="margin-top: 5px">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#status_formus">
                                Revisar Status
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bancoInfo">
                    Hoy transferimos a todos los bancos de Venezuela desde:
                    <br />
                    <b>BANESCO Y BANCO VENEZUELA</b>
                    <br />
                    (pago móvil a otros bancos según disponibilidad, Terminada nuestra
                    disponibilidad PM, todas las transferencias serán realizadas desde
                    banesco)
                </div>
            </center>
            <br />
            <div id="owl-speakers" class="owl-carousel">
                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
                    <div class="speakers-wrapper" style="text-align: center;">
                        <img src="{{ asset('assets//images/paypal.png') }}" class="img-responsive" alt="paypal"
                            style="margin: 0 auto;" />
                        <div class="speakers-thumb">
                            <h3>TASA PAYPAL</h3>
                            <h2>{{ 'US $1.00 = ' . (optional(App\Models\TasaCambio::where('descripcion', 'pay-paypal')->first())->valor ?? 'N/A') . ' Bs' }}
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
                    <div class="speakers-wrapper" style="text-align: center;">
                        <img src="{{ asset('assets/images/skrill.png') }}" class="img-responsive" alt="skrill"
                            style="margin: 0 auto;" />
                        <div class="speakers-thumb">
                            <h3>TASA SKRILL</h3>
                            <h2>{{ 'US $1.00 = ' . (optional(App\Models\TasaCambio::where('descripcion', 'pay-skrill')->first())->valor ?? 'N/A') . ' Bs' }}</h2>
                        </div>
                    </div>
                </div>

                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.9s">
                    <div class="speakers-wrapper" style="text-align: center;">
                        <img src="{{ asset('assets/images/1.png') }}" class="img-responsive" alt="BITCOIN"
                            style="margin: 0 auto;" />
                        <div class="speakers-thumb">
                            <h3>TASA BITCOIN</h3>
                            {{-- <h6>Web Specialist</h6> --}}
                        </div>
                    </div>
                </div>

                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
                    <div class="speakers-wrapper" style="text-align: center;">
                        <img src="{{ asset('assets/images/usdt.png') }}" class="img-responsive" alt="USDT"
                            style="margin: 0 auto;" />
                        <div class="speakers-thumb">
                            <h3>TASA USDT</h3>
                            {{-- <h6>Frontend Dev</h6> --}}
                        </div>
                    </div>
                </div>

                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
                    <div class="speakers-wrapper" style="text-align: center;">
                        <img src="{{ asset('assets/images/323273.png') }}" class="img-responsive" alt="PERU"
                            style="margin: 0 auto;" />
                        <div class="speakers-thumb">
                            <h3>TASA PERU</h3>
                            <h2>{{ '1 Dólar = ' . (optional(App\Models\TasaCambio::where('descripcion', 'pay-bolivares-peruven (dolar)')->first())->valor ?? 'N/A') . ' Bs' }}
                            </h2>
                            {{-- <h6>Marketing Guru</h6> --}}
                        </div>
                    </div>
                </div>

                <div class="item wow fadeInUp col-md-3 col-sm-3" data-wow-delay="0.6s">
                    <div class="speakers-wrapper" style="text-align: center;">
                        <img src="{{ asset('assets/images/COLOMBIA.png') }}" class="img-responsive" alt="COLOMBIA"
                            style="margin: 0 auto;" />
                        <div class="speakers-thumb">
                            <h3>TASA COLOMBIA</h3>
                            <h2>{{ '$10.000 = ' . (optional(App\Models\TasaCambio::where('descripcion', 'pay-bolivares-colven')->first())->valor ?? 'N/A') . ' Bs' }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================
                                    DETAIL SECTION
                                    ============================== -->
    @include('dash.form')

    <!-- =========================
                                    CONTACT SECTION
                                    ============================== -->
    <section id="contact" class="parallax-section">
        <div class="container" data-wow-delay="0.6s">
            <p class="elegirIntergiros">¿POR QUÉ ELEGIR INTERRAPPI?</p>

            <center>
                <p><b> Dos razones importantes para elegirnos.</b></p>
            </center>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6" data-wow-delay="0.3s" style="width: 100%;">
                                <div class="contact_des">
                                    <h2 class="elegirIntergiros1">1. Rapidez en su Envío</h2>

                                    <p class="elegirIntergiros1p">
                                        Comprendemos lo importante que es para usted tener el efectivo
                                        en su cuenta bancaria. Recibido su envío, y una vez verificado;
                                        lo procesaremos inmediatamente. Si dispone de cuenta en los
                                        bancos que tenemos disponible en el día, su dinero se reflejará
                                        mucho más rápido.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6" data-wow-delay="0.3s" style="text-align: center; width: 100%;">
                                <img class="happi" src="{{ asset('assets/images/happiness.png') }}"
                                    style="margin-left: 0px;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6" data-wow-delay="0.3s" style="width: 100%;">
                                <div class="contact_des">
                                    <h2 class="elegirIntergiros1">2. Súper Tasa</h2>

                                    <p class="elegirIntergiros1p">
                                        Nuestra tasa es de las mejores en el mercado. No tenemos tarifas
                                        o comisiones escondidas. Puede usar el formulario de pedido de
                                        bolívares, y obtener el monto justo que pagar para enviar la
                                        cantidad de dinero que usted necesita.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6" data-wow-delay="0.3s" style="text-align: center; width: 100%;">
                                <img class="dinero"
                                    src="{{ asset('assets/images/intergiros-envios-de-dinero-250x250.png') }}"
                                    style="margin-left: 0px; margin-top: 80px;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="status_formus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <form action="../form/status" method="POST" id="status-formu-form">
            @csrf
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Estado de Peticiones</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="group">
                            <label for="email" class="label">Cedula</label>
                            <input type="number" class="input" id="status_identificacion"
                                onkeydown="if(event.keyCode === 13) return false;" name="status_identificacion"
                                style="margin-right: 5px !important;">
                        </div>
                        <br>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped w-auto" id="table_status_formu">
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-success" onclick="get_form_user()">Consultar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- =========================
                                    FOOTER SECTION
                                    ============================== -->
    @include('dash.footer')

    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
@endsection
