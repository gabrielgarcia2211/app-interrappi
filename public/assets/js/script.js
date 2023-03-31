var $validator_form1;
var $validator_form_login;
var $validator_status_formu;

$(document).ready(function () {
  /** validamos los campos importantes */

  $validator_form1 = $("#pay-paypal-form1").validate({
    rules: {
      nombre_b_form1: {
        required: true,
      },
      cedula_b_form1: {
        required: true,
        digits: true,
      },
      banco_b_form1: {
        required: true,
      },
      nro_cuenta_form1: {
        required: true,
        digits: true,
      },
      nombre_d_form1: {
        required: true,
      },
      telefono_d_form1: {
        required: true,
        digits: true,
      },
      correo_d_form1: {
        required: true,
        email: true,
      },
      pais_d_form1: {
        required: true,
      },
      monto_enviar_d_form1: {
        required: true,
      },
      email_d_form1: {
        required: true,
        email: true,
      },
      file_form1_b: {
        required: true,
      },
      identificacion_d_form1: {
        required: true,
        digits: true,
      },
      telefono_b_form1: {
        required: true,
        digits: true,
      },
    },
  });

  $validator_form_login = $("#login-form").validate({
    rules: {
      login_email: {
        required: true,
        email: true,
      },
      login_password: {
        required: true,
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
});

(function ($) {
  //* ESTRUCTURACION DE FORMULARIOS *//

  $(".group-credencials").click(function () {
    const containt = document.querySelector(".bolivares-otro-view");
    var ongkir = $(this).val();
    if (ongkir == "check_otro") {
      containt.innerHTML = `<h4 class="sub-descripction-label">
         CUAL?:
          </h4>
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              id=""
              placeholder="ESCRIBE AQUI!"
            />
          </div>`;
    } else {
      containt.innerHTML = "";
    }
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
              placeholder="NUMERO DE TELEFONO"
            />
          </div>`;
    } else {
      containt.innerHTML = "";
    }
  });

  $(".group-identificacion").click(function () {
    const containt = document.querySelector(".paypal-otro-view");
    var ongkir = $(this).val();
    if (ongkir == "check_otro_paypal") {
      containt.innerHTML = `<h4 class="sub-descripction-label">
         CUAL?:
          </h4>
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              id=""
              placeholder="ESCRIBE AQUI!"
            />
          </div>`;
    } else {
      containt.innerHTML = "";
    }
  });

  $(".group-moneda").click(function () {
    const containt = document.querySelector(".moneda-otro-view");
    var ongkir = $(this).val();
    if (ongkir == "check_moneda_soles") {
      containt.innerHTML = `<h4 class="sub-descripction-label">
          MONTO EN SOLES:
        </h4>
        <div class="form-group">
          <input type="number" class="form-control" id=""
            placeholder="CUENTA" />
        </div>
        <p style="text-align: left; display: inline-block;">Conversión a Bolívares:</p>
        <p style="text-align: left; display: inline-block;"><b>$ 00:</b></p>`;
    } else if (ongkir == "check_moneda_dolares") {
      containt.innerHTML = `<h4 class="sub-descripction-label">
          MONTO EN USD:
        </h4>
        <div class="form-group">
          <input type="number" class="form-control" id=""
            placeholder="CUENTA" />
        </div>
        <p style="text-align: left; display: inline-block;">Conversión a Bolívares:</p>
        <p style="text-align: left; display: inline-block;"><b>$ 00:</b></p>`;
    } else {
      containt.innerHTML = "";
    }
  });

  $(".group-bolivares-bp").click(function () {
    const containt = document.querySelector(".group-bolivares-view-bp");
    var ongkir = $(this).val();
    if (ongkir == "check_h_bolivares_si") {
      containt.innerHTML = `<h4 class="sub-descripction-label">
        Ingrese el Teléfono vinculado a Pago Móvil:
          </h4>
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              id=""
              placeholder="NUMERO DE TELEFONO"
            />
          </div>`;
    } else {
      containt.innerHTML = "";
    }
  });

  $(".group-paypal-pago").click(function () {
    const containt = document.querySelector(".group-paypal-pago-bp");
    var ongkir = $(this).val();
    if (ongkir == "check_verificar_paypalb") {
      containt.innerHTML = `<div class="col-sm-4">
      <h4 class="sub-descripction-pay" style="font-size: 15px !important;">Email de Paypal:</h4>
      <p style="text-align: left;">Email de su cuenta de Paypal desde donde realizará el pago:</p>
      <div class="form-group">
      <input
        type="number"
        class="form-control"
        id=""
        placeholder="CORREO ELECTRONICO"
      />
      </div>
      <p>Pago Dolares: $ 0</p>
    </div>
    <div class="col-sm-4">
      <p style="padding: 10px 2px">Monto a Pagar:</p>													</p>
      <div class="input-group"> 
      <span class="input-group-addon input-cant">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-addon input-cant-fin">.00</span>
      </div>
    </div>`;
    } else if (ongkir == "check_verificar_paypald") {
      containt.innerHTML = `<div class="col-sm-4">
        <p style="padding: 10px; text-align: justify;">
          Comuníquese por favor con nosotros a través de nuestro Facebook o Instagram (@intergiros.oficial), 
          para poder indicarle nuestra cuenta bancaria a transferir.
          TC referencial: 1$ = 24.20 Bs.S
        </p>
        <p style="padding: 10px;">Pago Bolivares: 0 B.s</p>
      </div>`;
    } else {
      containt.innerHTML = "";
    }
  });
})(jQuery);

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
        Al enviar este formulario, usted está aceptando nuestros <a href="politicas.html" target="_blank">Terminos y Condiciones</a>
      </label>
    </div> </div>
    <div class="row" style="margin-top: 80px">
    <button type="button" onclick="send_form1('${key}')" class="btn btn-primary">
       Enviar
    </button></div>`;

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

    infoHtml = `<p style="text-align: justify;">Una vez que des clic en el botón ENVIAR <b>se le redirigirá a una nueva página de pago donde deberá pagar el valor exacto de su cambio.</b> Si tiene dudas por favor <b>comuníquese antes con nosotros</b> y le ayudaremos con mucho gusto <b>a guiarle en completar este proceso de pago.</b></p>`;
  } else if (key == "pay-skrill") {
    infoHtml = `<div class="content"><p style="text-align: justify;">Adjunte el pago realizado a nuestra nueva cuenta Skrill:</p>
    <p style="text-align: justify;"><b>silfredocuetocoronado @gmail.com.</b></p>
    <p style="text-align: justify;"><i class="fa-solid fa-image"></i> Subir Comprobante</p>
    <hr>
    <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo de archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de archivo: 1 | Cantidad minima de archivo: 1</p>
    <hr>
    <input type="file" class="form-control" id="file_form1_b" name="file_form1_b"/></div>`;
  } else if (key == "pay-bitcoin") {
    infoHtml = `<div class="content"><p>Wallet ID a Pagar:</p>
    <p><b>13zsx55DfCQmFgMHQZzEVD4khUzxQEytLp</b></p>
    <img src="images/pays/QR-Ronald-BTC.png" style="width: 30%; padding: 10px;">
    <p style="padding: 4px;background: yellow;text-align: center;color:black">Importante: El monto a cambiar será el monto recibido en nuestra cuenta. Además la transacción será validada una vez que tenga 3 confirmaciones en la blockchain.</p>
    <br>
    <p style="text-align: justify;"><i class="fa-solid fa-image"></i> Subir Comprobante</p>
    <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo de archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de archivo: 1 | Cantidad minima de archivo: 1</p>
    <hr>
    <input type="file" class="form-control" id="customFile" />`;
  } else if (key == "pay-tehther") {
    infoHtml = `<div class="content"><p>Wallet ID a Pagar (TRC20):</p>
    <p><b>TDsZ9w4fSB2iHxnSC7deQc7KDrNhxXjRiU</b></p>
    <img src="images/pays/QR-TRC20-BINANCE-RONALD.png" style="width: 30%; padding: 10px;">
    <p style="text-align: center;color:black">Recuerde que TRC20 por lo general cobra 1 USDT por transacción.</p>
    <br>
    <p style="text-align: left;color:black">También puede pagar a través de Binance Pay y evitar pago de comisión:</p>
    <br>
    <img src="images/pays/BinancePayQR.png" style="width: 40%;">
    <br>
    <br>
    <p style="text-align: justify;"><i class="fa-solid fa-image"></i> Subir Comprobante</p>
    <p style="text-align: left;">Tamaño maximo del archivo: 5.72 MB. | Tipo de archivos permitidos: gif, jpeg, png, jpg | Cantidad maxima de archivo: 1 | Cantidad minima de archivo: 1</p>
    <hr>
    <input type="file" class="form-control" id="customFile" /></div>`;
  }

  newHtml = newHtml + cHtml;

  gridSpaces.innerHTML = newHtml;
  gridInfo.innerHTML = infoHtml;
}

function info_pais(pais) {
  // REPAINT TEXT
  const gp = document.querySelector(".group-bolivares-pais");
  const gpt = document.querySelector(".group-bolivares-pais-text");
  const gpc = document.querySelector(".group-bolivares-count");

  var selectBox = document.getElementById("select_box");
  var selectedValue = selectBox.options[selectBox.selectedIndex].value;
  var pHtml = "";
  var infoHtml = "";
  var countHtml = "";

  if (selectedValue == "id_peru") {
    pHtml = `<h4 class="sub-descripction-label">
        BANCO A PAGAR
      </h4>
      <div class="form-group">
        <select class="form-control">
          <option disabled="" selected="">
            - SELECCIONAR BANCO -
          </option>
          <option>BANESCO</option>
          <option>MERCANTIL</option>
          <option>BBVA PROVINCIAL</option>
          <option>BANCO DE VENEZUELA</option>
          <option>BOD</option>
        </select>
      </div>`;

    infoHtml = `<p style="text-align: left;"> Solo hacemos transferencias directas a <b style="background: yellow;">BCP e Interbank;</b> si elige otro banco haremos 
      transferencia interbancaria y tiene que ingresar el CCI.</p>`;

    countHtml = `<hr><h4 class="sub-descripction-label" style="margin-top: 2px !important;">
                TIPO DE CUENTA:
              </h4>
              <div class="form-check">
                <input
                  class="form-check-input radio-p"
                  name="radioNoLabel"
                  type="radio"
                  value="check_cuenta_ah_s"
                  id="check_cuenta_ah_s"
                  onclick="type_count(id)"
                />
                <label class="form-check-label" for="check_cuenta_ah_s">
                  AHORROS SOLES
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input radio-p"
                  name="radioNoLabel"
                  type="radio"
                  value="check_cuenta_ah_d"
                  id="check_cuenta_ah_d"
                  onclick="type_count(id)"
                />
                <label class="form-check-label" for="check_cuenta_ah_d">
                  AHORROS DOLARES
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input radio-p"
                  name="radioNoLabel"
                  type="radio"
                  value="check_cuenta_cs"
                  id="check_cuenta_cs"
                  onclick="type_count(id)"
                />
                <label class="form-check-label" for="check_cuenta_cs">
                  CORRIENTE SOLES
                </label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input radio-p"
                  name="radioNoLabel"
                  type="radio"
                  value="check_cuenta_cd"
                  id="check_cuenta_cd"
                  onclick="type_count(id)"
                />
                <label class="form-check-label" for="check_cuenta_cd">
                  CORRIENTE DOLARES
                </label>
              </div>`;
  }

  gp.innerHTML = pHtml;
  gpt.innerHTML = infoHtml;
  gpc.innerHTML = countHtml;
}

function paypal_pais() {
  const gridSpaces = document.querySelector(".paypal-pais-view");
  var selectBox = document.getElementById("select_payapl_pais");
  var selectedValue = selectBox.options[selectBox.selectedIndex].value;

  var cHtml = "";
  var tHtml = `<div  id="group-money-paypal-view" class="col-sm-4" style="text-align: left;"></div> `;

  if (selectedValue == "paypal_venezuela") {
    cHtml = `<div class="col-sm-4" style="text-align: left;">
          <p>Contáctese a nuestras Redes Sociales, Facebook o Instagram, para solicitar nuestros números de cuentas, donde deberá realizar el pago, nos encuentra como @intergiros.oficial</p>
          <p style="background: yellow; padding: 5px;">Si ya usó nuestro servicio de recarga anteriormente, le informamos que hemos actualizado nuestras cuentas bancarias de Venezuela, por favor contáctese con nosotros antes de transferir.</p>
        </div>
        <div class="col-sm-4" style="text-align: left;">
          <p style="padding: 10px;">Monto a Pagar en Bolívares:</p>													</p>
          <div class="input-group"> 
            <span class="input-group-addon input-cant">$</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-addon input-cant-fin">.00</span>
          </div>
        </div>`;
  } else if (selectedValue == "paypal_peru") {
    cHtml = `											
    <div class="col-sm-4" style="text-align: left;">
      <h4 class="sub-descripction-label">
        Moneda a Pagar:
      </h4>
      <div class="form-check" style="display: block;">
        <input
          class="form-check-input radio-p group-money-paypal"
          name="radioNoLabel"
          type="radio"
          onclick="group_money_paypal(id)"
          value="check_soles"
          id="check_soles"
        />
        <label class="form-check-label" for="check_soles">
          SOLES
        </label>
      </div>
      <div class="form-check" style="display: block;">
        <input
          class="form-check-input radio-p group-money-paypal"
          name="radioNoLabel"
          type="radio"
          onclick="group_money_paypal(id)"
          value="check_dolares"
          id="check_dolares"
        />
        <label class="form-check-label" for="check_dolares">
          DOLARES
        </label>
      </div>
      <br>
      <br>
      <br>
      <p style="display: block;">Contáctese a nuestras Redes Sociales, Facebook o Instagram, para solicitar nuestros números de cuentas, donde deberá realizar el pago, nos encuentra como @intergiros.oficial</p>
      <p style="background: yellow; padding: 5px;">Si ya usó nuestro servicio de recarga anteriormente, le informamos que hemos actualizado nuestras cuentas bancarias de Venezuela, por favor contáctese con nosotros antes de transferir.</p>
    </div>`;
  }

  gridSpaces.innerHTML = cHtml + tHtml;
}

function group_money_paypal(id) {
  if (id == "check_soles") {
    $("#group-money-paypal-view")
      .html(`<p style="padding: 10px;">Monto a Pagar:</p>													</p>
    <div class="input-group"> 
      <span class="input-group-addon input-cant">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-addon input-cant-fin">.00</span>
    </div>`);
  } else if (id == "check_dolares") {
    $("#group-money-paypal-view")
      .html(`<p style="padding: 10px;">Monto a Pagar:</p>													</p>
    <div class="input-group">
      <span class="input-group-addon">S/</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-addon">.00</span>
    </div>`);
  }
}

function skirll_pais() {
  const gridSpaces = document.querySelector(".skirll-pais-view");
  var selectBox = document.getElementById("select_skirll_pais");
  var selectedValue = selectBox.options[selectBox.selectedIndex].value;

  var cHtml = "";
  var tHtml = `<div  id="group-money-skirll-view" class="col-sm-4" style="text-align: left;"></div> `;

  if (selectedValue == "skirll_venezuela") {
    cHtml = `<div class="col-sm-4" style="text-align: left;">
          <p>Contáctese a nuestras Redes Sociales, Facebook o Instagram, para solicitar nuestros números de cuentas, donde deberá realizar el pago, nos encuentra como @intergiros.oficial</p>
          <p style="background: yellow; padding: 5px;">Si ya usó nuestro servicio de recarga anteriormente, le informamos que hemos actualizado nuestras cuentas bancarias de Venezuela, por favor contáctese con nosotros antes de transferir.</p>
        </div>
        <div class="col-sm-4" style="text-align: left;">
          <p style="padding: 10px;">Monto a Pagar en Bolívares:</p>													</p>
          <div class="input-group"> 
            <span class="input-group-addon input-cant">$</span>
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <span class="input-group-addon input-cant-fin">.00</span>
          </div>
        </div>`;
  } else if (selectedValue == "skirll_peru") {
    cHtml = `											
    <div class="col-sm-4" style="text-align: left;">
      <h4 class="sub-descripction-label">
        Moneda a Pagar:
      </h4>
      <div class="form-check" style="display: block;">
        <input
          class="form-check-input radio-p group-money-skirll"
          name="radioNoLabel"
          type="radio"
          onclick="group_money_skirll(id)"
          value="check_soles"
          id="check_soles"
        />
        <label class="form-check-label" for="check_soles">
          SOLES
        </label>
      </div>
      <div class="form-check" style="display: block;">
        <input
          class="form-check-input radio-p group-money-skirll"
          name="radioNoLabel"
          type="radio"
          onclick="group_money_skirll(id)"
          value="check_dolares"
          id="check_dolares"
        />
        <label class="form-check-label" for="check_dolares">
          DOLARES
        </label>
      </div>
      <br>
      <br>
      <br>
      <p style="display: block;">Contáctese a nuestras Redes Sociales, Facebook o Instagram, para solicitar nuestros números de cuentas, donde deberá realizar el pago, nos encuentra como @intergiros.oficial</p>
      <p style="background: yellow; padding: 5px;">Si ya usó nuestro servicio de recarga anteriormente, le informamos que hemos actualizado nuestras cuentas bancarias de Venezuela, por favor contáctese con nosotros antes de transferir.</p>
    </div>`;
  }

  gridSpaces.innerHTML = cHtml + tHtml;
}

function group_money_skirll(id) {
  if (id == "check_soles") {
    $("#group-money-skirll-view")
      .html(`<p style="padding: 10px;">Monto a Pagar:</p>													</p>
    <div class="input-group"> 
      <span class="input-group-addon input-cant">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-addon input-cant-fin">.00</span>
    </div>`);
  } else if (id == "check_dolares") {
    $("#group-money-skirll-view")
      .html(`<p style="padding: 10px;">Monto a Pagar:</p>													</p>
    <div class="input-group">
      <span class="input-group-addon">S/</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-addon">.00</span>
    </div>`);
  }
}

function type_count(key) {
  const gridInfo = document.querySelector(".group-bolivares-dolares");
  var cHtml = "";
  if (key == "check_cuenta_ah_d" || key == "check_cuenta_cd") {
    cHtml = `<div class="col-sm-4">
        <h4 class="sub-descripction-label">
          MONTO A RECIBIR EN USD
        </h4>
        <div class="form-group">
          <input
            type="number"
            class="form-control"
            id=""
            placeholder="MONTO"
          />
        </div>
      </div>
      <div class="col-sm-4">
        <h4 class="sub-descripction-label">
          TASA DE PERU
        </h4>
        <div class="form-group">
          <input
            type="number"
            class="form-control"
            id=""
            placeholder="$ TASA INCIAL"
          />
        </div>
      </div>
      <div class="col-sm-4">
        <h4 class="sub-descripction-label">
          TASA DE CAMBIO
        </h4>
        <div class="form-group">
          <input
            type="number"
            class="form-control"
            id=""
            placeholder="$ TASA FINAL"
          />
        </div>
      </div>`;
  } else if (key == "check_cuenta_ah_s" || key == "check_cuenta_cs") {
    cHtml = `<div class="col-sm-4">
        <h4 class="sub-descripction-label">
          MONTO A RECIBIR EN SOLES
        </h4>
        <div class="form-group">
          <input
            type="number"
            class="form-control"
            id=""
            placeholder="MONTO"
          />
        </div>
      </div>
      <div class="col-sm-4">
        <h4 class="sub-descripction-label">
          TASA DE PERU
        </h4>
        <div class="form-group">
          <input
            type="number"
            class="form-control"
            id=""
            placeholder="$ TASA INCIAL"
          />
        </div>
      </div>
      <div class="col-sm-4">
        <h4 class="sub-descripction-label">
            YAPE / PLIN
        </h4>
        <p style="text-align:left">Si tiene un número telefónico vinculado a Yape (BCP), o Plin (Interbank, BBVA y Scotiabank) ingréselo debajo:</p>
        <div class="form-group">
          <input
            type="number"
            class="form-control"
            id=""
            placeholder="NRO TELEFONO"
          />
        </div>
      </div>`;
  }

  gridInfo.innerHTML = cHtml;
}

function test(key) {
  alert(key);
}

const PATH = "http://127.0.0.1:4001/";

/** ENVIO DE PETICIONES */

/**
 * Formulario 1 - FALTA PAIS
 */

function send_form1(key) {
  let elementoActivo = document.querySelector(
    'input[id="check_terminos"]:checked'
  );
  var url = $("#pay-paypal-form1").attr("action");

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

  /** beneficiario */
  var nombre_b_form1 = $("#nombre_b_form1").val();
  var cedula_b_form1 = $("#cedula_b_form1").val();
  var banco_b_form1 = $("#banco_b_form1").val();
  var nro_cuenta_form1 = $("#nro_cuenta_form1").val();
  var telefono_b_form1 = $("#telefono_b_form1").val();
  var tipo_persona = $("input[name=radioNoLabel]:checked").val();
  var tipo_cuenta = $("input[name='radioTypeCu']:checked").val();

  /** remitente */
  var nombre_d_form1 = $("#nombre_d_form1").val();
  var telefono_d_form1 = $("#telefono_d_form1").val();
  var correo_d_form1 = $("#correo_d_form1").val();
  var identificacion_d_form1 = $("#identificacion_d_form1").val();
  var pais_d_form1 = $("#pais_d_form1").val();
  var instagram_d_form1 = $("#instagram_d_form1").val();
  var monto_enviar_d_form1 = $("#monto_enviar_d_form1").val();

  /** validamos los campos importantes */
  var $valid = $("#pay-paypal-form1").valid();
  if (!$valid) {
    $validator_form1.focusInvalid();
    return false;
  }

  if (key == "pay-paypal") {
    /** campos personalizados */
    var email_d_form1 = $("#email_d_form1").val();

    var acceso = window.localStorage.getItem("acceso");
    /** enviamos la peticion */
    $.ajax({
      type: "POST",
      url: PATH + url,
      headers: {
        nombre_beneficiario: nombre_b_form1,
        cedula_beneficiario: cedula_b_form1,
        banco_beneficiario: banco_b_form1,
        telefono_beneficiario: telefono_b_form1,
        nro_cuenta: nro_cuenta_form1,
        tipo_persona: tipo_persona,
        tipo_cuenta: tipo_cuenta,
        nombre_depositante: nombre_d_form1,
        telefono_depositante: telefono_d_form1,
        correo_depositante: correo_d_form1,
        instagram_depositante: instagram_d_form1,
        monto_enviar: monto_enviar_d_form1,
        imagen_comprobante: "N/A",
        terminos_comprobante: "OK",
        email_comprobante: email_d_form1,
        cedula_depositante: identificacion_d_form1,
        id_moneda: 2,
        id_entidad: 1,
        id_formulario: 1,
        acceso: acceso,
      },
      success: function (msg) {
        Swal.fire({
          position: "top-end",
          icon: "success",
          title: msg,
          showConfirmButton: false,
          timer: 1500,
        });
        setTimeout(function () {
          //location.reload();
        }, 1600);
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Ah ocurrido un error",
          showConfirmButton: false,
          timer: 1500,
        });
      },
    });
  } else if (key == "pay-skrill") {
    return;

    /** campos personalizados */
    var file_form1_b = $("#file_form1_b").val();

    /** enviamos la peticion */

    $.ajax({
      type: "POST",
      url: PATH + url,
      headers: {
        nombre_beneficiario: nombre_b_form1,
        cedula_beneficiario: cedula_b_form1,
        banco_beneficiario: banco_b_form1,
        telefono_beneficiario: "N/A",
        nro_cuenta: nro_cuenta_form1,
        tipo_persona: tipo_persona,
        tipo_cuenta: tipo_cuenta,
        nombre_depositante: nombre_d_form1,
        telefono_depositante: telefono_d_form1,
        correo_depositante: correo_d_form1,
        instagram_depositante: instagram_d_form1,
        monto_enviar: monto_enviar_d_form1,
        imagen_comprobante: file_form1_b,
        terminos_comprobante: "OK",
        email_comprobante: "N/A",
        id_moneda: 2,
        id_entidad: 2,
        id_formulario: 2,
      },
      success: function (msg) {
        alert("Form Submitted: " + msg);
      },
    });
  }
}

/**
 * Formulario LOGIN
 */

function login() {
  var url = $("#login-form").attr("action");
  /** captura de datos */
  var login_email = $("input[name=login_email]").val();
  var login_password = $("input[name=login_password]").val();

  /** validamos los campos importantes */
  var $valid = $("#login-form").valid();
  if (!$valid) {
    $validator_form_login.focusInvalid();
    return false;
  }

  /** enviamos la peticion */
  $.ajax({
    type: "POST",
    url: PATH + url,
    headers: {
      correo: login_email,
      contrasena: login_password,
    },
    success: function (msg) {
      window.localStorage.setItem("acceso", true);
      sessionStorage.setItem("login", "admin");
      location.href = "../login/dashboard.html";
    },
    error: function (jqXHR, textStatus, errorThrown) {
      if (jqXHR.status == 403) {
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "Correo incorrecto!",
          showConfirmButton: false,
          timer: 1500,
        });
      } else if (jqXHR.status == 404) {
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "Contraseña incorrecta!",
          showConfirmButton: false,
          timer: 1500,
        });
      }
    },
  });
}

/**
 * Formulario Estado de la peticion del usuario
 */

function get_form_user() {
  var url = "API/v1/general/SearchFormularioClient";
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
    type: "GET",
    url: PATH + url,
    headers: {
      identificacion: identificacion,
    },
    success: function (response) {
      console.log(response.data);
      if (response.data.length > 0) {
        let template = "";
        template = `<thead>
            <tr>
              <th>Nombre Beneficiario</th>
              <th>Cedula Beneficiario</th>
              <th>Telefono Beneficiario</th>
              <th>Creado</th>
              <th>Estado</th>
            </tr>
          </thead><tbody>`;
        response.data.forEach((ta) => {
          template += `
            <tr>
                <td>${ta.nombre_beneficiario}</td>
                <td>${ta.cedula_beneficiario}</td>
                <td>${ta.telefono_beneficiario}</td>
                <td>${new Date(ta.createdAt).toLocaleDateString("en-US")}</td>`;

          if (ta.id_estado == 0) {
            template += `<td style="text-align: center;" onclick="return status_ok(${ta.id})"><i class="fa fa-pause iconw" aria-hidden="true"></i></td> </tr>`;
          } else {
            template += ` <td style="text-align: center; onclick="return status_decline(${ta.id})" "><i class="fa fa-check iconv" aria-hidden="true"></i></td> </tr>`;
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
          timer: 1500,
        });
      } else {
        Swal.fire({
          position: "center",
          icon: "error",
          title: "Ah ocurrido un error",
          showConfirmButton: false,
          timer: 1500,
        });
      }
      $("#table_status_formu").html("");
    },
  });
}

/** FUNCIONES EXTRAS */

function dev_formato_moneda(id, value) {
  var convert = number_format(value);
  $("#" + id).val(convert);
}

function number_format(amount, decimals) {
  amount += ""; // por si pasan un numero en vez de un string
  amount = parseFloat(amount.replace(/[^0-9]/g, "")); // elimino cualquier cosa que no sea numero o punto

  decimals = decimals || 0; // por si la variable no fue fue pasada

  // si no es un numero o es igual a cero retorno el mismo cero
  if (isNaN(amount) || amount === 0) return parseFloat(0).toFixed(decimals);

  // si es mayor o menor que cero retorno el valor formateado como numero
  amount = "" + amount.toFixed(decimals);

  var amount_parts = amount.split("."),
    regexp = /(\d+)(\d{3})/;

  while (regexp.test(amount_parts[0]))
    amount_parts[0] = amount_parts[0].replace(regexp, "$1" + "." + "$2");

  return amount_parts.join(".");
}