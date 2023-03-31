@extends('layouts.admin')
@section('content')
    <div class="display-table" style="width: 100%;">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a href="{{ route('site.welcome') }}"><img src="{{ asset('assets/images/INTERRAPPI.png') }}"
                            alt="merkery_logo" class="hidden-xs hidden-sm" style="width: 90px;">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span
                                    class="hidden-xs hidden-sm">Inicio</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-12">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs">
                                        <button-tasa-component></button-tasa-component>
                                    </li>
                                    <li>
                                        <form id="logout-form" action="{{ url('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-link">Cerrar Sesion</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="container">
                    <dash-component></dash-component>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div id="add_tasa" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Tasa Paypal</h4>
                </div>
                <div class="modal-body">
                    <form action="" id="tasa-paypal-form">
                        <div class="form-group">
                            <h4>Tasa Anterior</h4>
                            <br>
                            <label for="tasa_old_valor" style="display: block;">Valor Actual</label>
                            <input type="text" class="form-control" id="tasa_old_valor" placeholder="Valor" readonly>
                            <label for="tasa_old_descripcion" style="display: block;">Descripcion Actual</label>
                            <input type="text" class="form-control" id="tasa_old_descripcion" placeholder="Descripcion"
                                readonly>
                        </div>
                        <hr>
                        <div class="form-group">
                            <h4>Tasa Nueva</h4>
                            <br>
                            <label for="tasa_new_valor" style="display: block;">Valor Nuevo</label>
                            <input type="text" class="form-control" id="tasa_new_valor" name="tasa_new_valor"
                                placeholder="Valor" required>
                            <label for="tasa_new_descripcion" style="display: block;">Descripcion Nueva</label>
                            <input type="text" class="form-control" id="tasa_new_descripcion" name="tasa_new_descripcion"
                                placeholder="Descripcion" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="add-project" onclick="guardar_tasa()">Guardar</button>
                </div>
                </form>
            </div>

        </div>
    </div>
@endsection
