<div class="navbar navbar-fixed-top custom-navbar " role="navigation">
    <div class="row">
        <div class="col-sm-6" style="text-align: center;">
            <img class="infoHeader" src="{{ asset('assets/icon/clock.svg') }}" width="20px" style="margin: 0px;" />
            &nbsp;
            &nbsp;
            <a class="hour" style="color: white">
                Lunes - Viernes 10 AM - 8 PM | Sábados y Domingos 10 AM - 5PM
            </a>
        </div>
        &nbsp;
        <div class="col-sm-6" style="text-align: center;">
            <div class="row">
                <div class="col-sm-4">
                    <button type="button" class="btn btn-success"
                        style="background-color: transparent; color: yellowgreen; white-space: normal;">
                        <a href="{{ route('site.verificarPaypal') }}">Verifica Tu Cuenta de PayPal</a>
                    </button>
                </div>
                &nbsp;
                <div class="col-sm-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#status_formus">
                        Revisar Status
                    </button>
                    <a href="https://www.facebook.com/Interrappi.co"><img src="{{ asset('assets/icon/facebook.svg') }}"
                            width="20px" /></a>
                    <a href="https://www.instagram.com/interrappi/"><img src="{{ asset('assets/icon/instagram.svg') }}"
                            width="20px" /></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- navbar header -->
        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            &nbsp;
            <a href="#" class="img-fluid"><img src="{{ asset('assets/images/INTERRAPPI.png') }}" width="150px"
                    height="60px" /></a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('site.welcome') }}" class="smoothScroll">INICIO</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        PERÚ
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('site.CamPayPeru') }}"> Cambiar Paypal en Perú</a>
                        <br />
                        <a class="dropdown-item" href="{{ route('site.BolivaresPeruVen') }}">
                            Enviar Bolivares de Perú a Venezuela</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        ECUADOR
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"> Cambiar Paypal en Ecuador</a>
                        <br />
                        <a class="dropdown-item" href="#">
                            Enviar Bolivares de Ecuador a Venezuela</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        COLOMBIA
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('site.BolivaresColVen') }}">
                            Enviar Bolivares de Colombia a Venezuela</a>
                    </div>
                </li>
                <li>
                    <a href="{{ route('site.otrosServicios') }}" class="smoothScroll">OTROS SERVICIOS</a>
                </li>
                <li><a href="{{ route('site.contacto') }}" class="smoothScroll">CONTACTO</a></li>
                <li><a class="init-sesion" href="{{ route('site.login') }}">
                        <button type="button" class="btn btn-primary"
                            style="
                            background-color: transparent;
                            color: white;
                        ">
                            Iniciar Sesión <img src="{{ asset('assets/icon/people.svg') }}" width="20px" />
                        </button></a>
                </li>
                <!-- <li><a href="#sponsors" class="smoothScroll">Sponsors</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li> -->
            </ul>
        </div>
    </div>
</div>
