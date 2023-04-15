<div class="navbar navbar-fixed-top custom-navbar" role="navigation" style="padding-bottom: 0px;">
    <div>
        <a href="#" class="navbar-brand" style="padding-top: 10px;"><img
                src="{{ asset('assets/images/INTERRAPPI.png') }}" width="100px" height="40px" /></a>
        <img class="infoHeader" src="{{ asset('assets/icon/clock.svg') }}" style="margin-left: 0px;" width="20px" />
        &nbsp;
        &nbsp;
        <a class="hour" style="color: white" style="text-align: center;">
            Lunes - Viernes 10 AM - 8 PM | Sábados y Domingos 10 AM - 5PM
        </a>
    </div>
    <div class="container">
        <!-- navbar header -->
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <p href="#" class="smoothScroll"
                        style="cursor: pointer; color: #67c6dc; padding: 15px; margin: 0px;" id="inicio">INICIO</p>
                </li>
                <li class="nav-item">
                    <p class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"
                        style="cursor: pointer; color: #67c6dc; padding: 15px; margin: 0px;" id="peru">
                        PERÚ
                        <span class="fa fa-angle-down"></span>
                    </p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('site.CamPayPeru') }}"> Cambiar Paypal en Perú</a>
                        <br />
                        <a class="dropdown-item" href="{{ route('site.BolivaresPeruVen') }}">
                            Enviar Bolivares de Perú a Venezuela</a>
                    </div>
                </li>
                <li class="nav-item">
                    <p class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="cursor: pointer; color: #67c6dc; padding: 15px; margin: 0px;"
                        id="menus">
                        ECUADOR
                        <span class="fa fa-angle-down"></span>
                    </p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"> Cambiar Paypal en Ecuador</a>
                        <br />
                        <a class="dropdown-item" href="#">
                            Enviar Bolivares de Ecuador a Venezuela</a>
                    </div>
                </li>
                <li class="nav-item">
                    <p class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" style="cursor: pointer; color: #67c6dc; padding: 15px; margin: 0px;"
                        id="menus">
                        COLOMBIA
                        <span class="fa fa-angle-down"></span>
                    </p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('site.BolivaresColVen') }}">
                            Enviar Bolivares de Colombia a Venezuela</a>
                    </div>
                </li>
                <li>
                    <p href="#" class="smoothScroll"
                        style="cursor: pointer; color: #67c6dc; padding: 15px; margin: 0px;" id="otros_servicios">OTROS
                        SERVICIOS</p>
                </li>
                <li>
                    <p href="#" class="smoothScroll"
                        style="cursor: pointer; color: #67c6dc; padding: 15px; margin: 0px;" id="contacto">CONTACTO</p>
                </li>
                {{-- <li><a class="init-sesion" href="{{ route('site.login') }}">
                        <button type="button" class="btn btn-primary"
                            style="
                            background-color: transparent;
                            color: white;
                        ">
                            Iniciar Sesión <img src="{{ asset('assets/icon/people.svg') }}" width="20px" />
                        </button></a>
                </li> --}}
                <!-- <li><a href="#sponsors" class="smoothScroll">Sponsors</a></li>
            <li><a href="#contact" class="smoothScroll">Contact</a></li> -->
            </ul>
        </div>
    </div>
</div>

<script>
    // Obtener el elemento p por su ID
    var inicio = document.getElementById("inicio");
    var otros = document.getElementById("otros_servicios");
    var contacto = document.getElementById("contacto");

    // Agregar un controlador de eventos de clic al elemento p
    inicio.addEventListener("click", function() {
        // Redirigir a la página de inicio
        window.location.href = "{{ route('site.welcome') }}";
    });
    otros.addEventListener("click", function() {
        // Redirigir a la página de inicio
        window.location.href = "{{ route('site.otrosServicios') }}";
    });
    contacto.addEventListener("click", function() {
        // Redirigir a la página de inicio
        window.location.href = "{{ route('site.contacto') }}";
    });
</script>
