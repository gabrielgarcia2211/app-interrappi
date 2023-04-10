var $validator_form_paypal;
var $validator_status_formu;
var tasa_cambio = "";
// VALIDACION DE CAMPOS
$(document).ready(function () {
    // Validamos los campos importantes
    $validator_form_paypal = $("#pay-paypal-form").validate({
        rules: {
            nombre_b_form1: {
                required: true,
                maxlength: 100,
            },
            cedula_b_form1: {
                required: true,
                digits: true,
                maxlength: 11,
            },
            banco_b_form1: {
                required: true,
            },
            nro_cuenta_form1: {
                required: true,
                digits: true,
                minlength: 20,
                maxlength: 20
            },
            nombre_d_form1: {
                required: true,
                maxlength: 100,
            },
            telefono_d_form1: {
                required: true,
                digits: true,
                maxlength: 20,
            },
            correo_d_form1: {
                required: true,
                email: true,
                maxlength: 50,
            },
            pais_d_form1: {
                required: true,
                maxlength: 100,
            },
            monto_enviar_d_form1: {
                required: true,
            },
            email_d_form1: {
                required: true,
                email: true,
                maxlength: 100,
            },
            file_form1_b: {
                required: true,
            },
            identificacion_d_form1: {
                required: true,
                digits: true,
                maxlength: 20,
            },
            telefono_b_form1: {
                required: true,
                digits: true,
                maxlength: 20,
            },
        },
    });
    $validator_status_formu = $("#status-formu-form").validate({
        rules: {
            status_identificacion: {
                required: true,
                digits: true,
            },
        },
    });
    $("#monto_enviar_d_form1").prop("disabled", true);
});

$(".group-bolivares").click(function () {
    const containt = document.querySelector(".group-bolivares-view");
    var ongkir = $(this).val();
    if (ongkir == "check_h_si") {
        containt.innerHTML = `<h4 class="sub-descripction-label">
        Ingrese el Teléfono vinculado a Pago Móvil:
          </h4>
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              id="telefono_b_form1"
              name="telefono_b_form1"
              placeholder="NUMERO DE TELEFONO"
            />
          </div>`;
    } else {
        containt.innerHTML = "";
    }
});

// CAPTURAMOS EL TIPO DE MONEDA PARA LA CONVERSION - FORM1
/**
 * key ->
 * pay-paypal
 * pay-skrill
 * pay-bitcoin
 * pay-tehther
 *
 */
function cap_type_pay(key) {
    const gridSpaces = document.querySelector(".container-type-pay");
    const gridInfo = document.querySelector(".container-type-pay-info");

    var newHtml = "";
    var infoHtml = "";
    var cHtml = `<div class="form-check">
        <input
          class="form-check-input radio-p"
          type="radio"
          value="check_terminos"
          id="check_terminos"
          style="display: inline-block;"
        />
        <label class="form-check-label" for="check_terminos" style="display: inline-block;">
          Al enviar este formulario, usted está aceptando nuestros <a href="../sites/politicas" target="_blank">Terminos y Condiciones</a>
        </label>
      </div> </div>
      <div class="row" style="margin-top: 80px">`;

    if (key == "pay-paypal") {
        newHtml = `<div class="content"><h4 class="sub-descripction-pay" style="font-size: 15px !important;">Email de Paypal:</h4>
      <p style="text-align: left;">Email de su cuenta de Paypal desde donde realizará el pago:</p>
      <div class="form-group">
        <input
          type="text"
          class="form-control"
          id="email_d_form1"
          name="email_d_form1"
          placeholder="CORREO ELECTRONICO"
        />
      </div>`;

        cHtml += `<button type="button" onclick="send_form_paypal()" class="btn btn-primary">
            Enviar
        </button></div>`;

        infoHtml = `<p style="text-align: justify;">Una vez que des clic en el botón ENVIAR <b>se le redirigirá a una nueva página de pago donde deberá pagar el valor exacto de su cambio.</b> Si tiene dudas por favor <b>comuníquese antes con nosotros</b> y le ayudaremos con mucho gusto <b>a guiarle en completar este proceso de pago.</b></p>`;
    } else if (key == "pay-skrill") {
        infoHtml = `<div class="content"><p style="text-align: justify;">Adjunte el pago realizado a nuestra nueva cuenta Skrill:</p>
      <p style="text-align: justify;"><b>silfredocuetocoronado@gmail.com.</b></p>
      <p style="text-align: justify;"><i class="fa-solid fa-image"></i> Subir Comprobante</p>
      <hr>
      <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo de archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de archivo: 1 | Cantidad minima de archivo: 1</p>
      <hr>
      <input type="file" class="form-control" id="file_form1_b" name="file_form1_b"/></div>`;
        cHtml += `<button type="button" class="btn btn-primary">
            Enviar
        </button></div>`;
    } else if (key == "pay-bitcoin") {
        infoHtml = `<div class="content"><p>Wallet ID a Pagar:</p>
      <p><b>13zsx55DfCQmFgMHQZzEVD4khUzxQEytLp</b></p>
      <img src="../assets/images/pays/QRBTC.png" style="width: 30%; padding: 10px;">
      <p style="padding: 4px;background: yellow;text-align: center;color:black">Importante: El monto a cambiar será el monto recibido en nuestra cuenta. Además la transacción será validada una vez que tenga 3 confirmaciones en la blockchain.</p>
      <br>
      <p style="text-align: justify;"><i class="fa-solid fa-image"></i> Subir Comprobante</p>
      <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo de archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de archivo: 1 | Cantidad minima de archivo: 1</p>
      <hr>
      <input type="file" class="form-control" id="customFile" />`;
        cHtml += `<button type="button" class="btn btn-primary">
            Enviar
        </button></div>`;
    } else if (key == "pay-tehther") {
        infoHtml = `<div class="content"><p>Wallet ID a Pagar (TRC20):</p>
      <p><b>TDsZ9w4fSB2iHxnSC7deQc7KDrNhxXjRiU</b></p>
      <img src="../assets/images/pays/QRBINANCE.png" style="width: 30%; padding: 10px;">
      <p style="text-align: center;color:black">Recuerde que TRC20 por lo general cobra 1 USDT por transacción.</p>
      <br>
      <p style="text-align: left;color:black">También puede pagar a través de Binance Pay y evitar pago de comisión:</p>
      <br>
      <img src="../assets/images/pays/BinancePayQR.png" style="width: 40%;">
      <br>
      <br>
      <p style="text-align: justify;"><i class="fa-solid fa-image"></i> Subir Comprobante</p>
      <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo de archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de archivo: 1 | Cantidad minima de archivo: 1</p>
      <hr>
      <input type="file" class="form-control" id="customFile" /></div>`;
        cHtml += `<button type="button" class="btn btn-primary">
            Enviar
        </button></div>`;
    }

    newHtml = newHtml + cHtml;

    gridSpaces.innerHTML = newHtml;
    gridInfo.innerHTML = infoHtml;

    // Elimina la clase "pay-selected" de todas las filas
    var rows = document.querySelectorAll(".bg-pay");
    rows.forEach(function (row) {
        row.classList.remove("pay-selected");
    });

    // Añade la clase "pay-selected" a la fila que se ha hecho clic
    var clickedRow = document.getElementById(key);
    $("#monto_enviar_d_form1").prop("disabled", false);
    tasa_cambio = key;
    clickedRow.querySelector(".bg-pay").classList.add("pay-selected");
}

function send_form_paypal() {
    event.preventDefault();
    var url = $("#pay-paypal-form").attr("action");

    var $valid = $("#pay-paypal-form").valid();
    if (!$valid) {
        $validator_form_paypal.focusInvalid();
        return false;
    }
    let elementoActivo = document.querySelector(
        'input[id="check_terminos"]:checked'
    );
    if (!elementoActivo) {
        Swal.fire({
            position: "center",
            icon: "warning",
            title: "Debe aceptar los terminos y condiciones",
            showConfirmButton: false,
            timer: 1500,
        });
        return;
    }

    var parametros = $("#pay-paypal-form").serializeArray();

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        method: "POST",
        url: url,
        data: parametros,
        beforeSend: function () {
            Swal.fire({
                title: "Cargando",
                text: "Creando solicitud...",
                imageUrl: "https://img.webme.com/pic/a/andwas/cargando5.gif",
                imageWidth: 200,
                imageHeight: 180,
                imageAlt: "Creando solicitud",
                showCancelButton: false,
                showConfirmButton: false,
            });
        },
        success: function (response) {
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Solicitud Guardada",
                showConfirmButton: false,
                timer: 1500,
            });
        },
        complete: function (res) {},
        error: function (res) {
            Swal.fire({
                position: "center",
                icon: "error",
                title: res.responseText,
                showConfirmButton: false,
                timer: 5000,
            });
        },
    });
    return false;
}

/**
 * FORMULARIO DE ESTADO DE PETICIONES DEL USUARIO
 */

function get_form_user(event) {
    var url = $("#status-formu-form").attr("action");
    /** captura de datos */
    var identificacion = $("#status_identificacion").val();

    /** validamos los campos importantes */
    var $valid = $("#status-formu-form").valid();
    if (!$valid) {
        $validator_status_formu.focusInvalid();
        return false;
    }
    /** enviamos la peticion */
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "POST",
        url: url,
        data: {
            identificacion: identificacion,
        },
        success: function (response) {
            if (response.length > 0) {
                let template = "";
                template = `<thead>
              <tr>
                <th>Nombre Beneficiario</th>
                <th>Cedula Beneficiario</th>
                <th>Telefono Beneficiario</th>
                <th>Creado</th>
                <th>Estado</th>
                <th>Comporbante</th>
              </tr>
            </thead><tbody>`;
                response.forEach((ta) => {
                    template += `
              <tr>
                  <td>${ta.nombre_beneficiario}</td>
                  <td>${ta.cedula_beneficiario}</td>
                  <td>${ta.telefono_beneficiario}</td>
                  <td>${new Date(ta.created_at).toLocaleDateString(
                      "en-US"
                  )}</td>`;
                    if (ta.id_estado == 1) {
                        template += `<td style="text-align: center;"><button type="button" class="btn btn-danger"><i class="fa fa-pause" aria-hidden="true"></i></button></td>`;
                    } else {
                        template += `<td style="text-align: center;"><button type="button" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button></td>`;
                    }
                    if (ta.comprobante) {
                        template += `<td style="text-align: center;"><button type="button" onclick="get_comprobante('${ta.comprobante}')" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></button></td></tr>`;
                    } else {
                        template += `<td style="text-align: center;"><button type="button" class="btn btn-danger"><i class="fa fa-eye-slash" aria-hidden="true"></i></button></td></tr>`;
                    }
                });
                template += `</tbody>`;
                $("#table_status_formu").html(template);
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            if (jqXHR.status == 403) {
                Swal.fire({
                    position: "center",
                    icon: "warning",
                    title: "No hay informacion",
                    showConfirmButton: false,
                    timer: 5000,
                });
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: jqXHR.responseText,
                    showConfirmButton: false,
                    timer: 5000,
                });
            }
            $("#table_status_formu").html("");
        },
    });
}

/** MOSTRAR EL COMPROBANTE */

function get_comprobante(path) {
    Swal.fire({
        title: "Comprobante Cargado",
        imageUrl: path,
        imageWidth: 300,
        imageHeight: 300,
    });
}

/** FUNCIONES TASA DE CAMBIO */

function dev_formato_moneda(id, value) {
    var url = "../tasa/get/data";
    $("#" + id).val(value);
    if (value < 5) {
        $("#alerta_monto").show();
        return;
    } else {
        $("#alerta_monto").hide();
    }
    // Obtener la tasa de cambio
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "POST",
        url: url,
        data: {
            tasa: tasa_cambio,
            monto: value,
        },
        success: function (response) {
            $("#monto_pagar_d_form1").val(response.monto_a_pagar);
            $("#monto_recibir_d_form1").val(response.monto_a_recibir);
        },
        error: function (error) {},
    });
}
