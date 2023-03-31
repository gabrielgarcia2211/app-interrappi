<table style="width: 700px; max-width: 100%; display: block; margin: auto">
    <tr>
        <td>
            <img src="{{ $message->embed('assets/images/INTERRAPPI.png') }}" style="width: 80%; display: block; margin: auto" />
        </td>
    </tr>
    <tr>
        <td
            style="
				color: #757575;
				font-family: verdana;
				font-size: 20px;
				text-align: center;
				padding-top: 40px;
				padding-bottom: 40px;
			">
            Hola {{ $data["nombre"] }},
        </td>
    </tr>
    <tr>
        <td
            style="
				color: #757575;
				font-family: verdana;
				font-size: 25px;
				font-weight: bold;
				text-align: center;
				padding-top: 20px;
				padding-bottom: 20px;
			">
            La solicitud No.{{ $data["id"] }}a sido generada con exito. <br />
            Tu Giro esta en estado {{ $data["estadoEnvio"] }}<br />
            Gracias por confiar en INTERRAPPI <br />
        </td>
    </tr>
    <tr>
        <td
            style="
				color: #757575;
				font-family: verdana;
				font-size: 20px;
				text-align: center;
				padding-top: 40px;
				padding-bottom: 40px;
			">
            <h3 style="text-align: center;top:5px">Datos del remitente</h3>
            <br />
            Nombre:{{ $data["nombre"] }}<br />
            Cedula:{{ $data["cedula"] }}<br />
            Telefono:{{ $data["telefono"] }}<br />
            Monto: {{ $data["MontoEnviar"] }}<br />
        </td>
    </tr>
    <tr>
        <td
            style="
				color: #757575;
				font-family: verdana;
				font-size: 20px;
				text-align: center;
				padding-top: 40px;
				padding-bottom: 40px;
			">
            <h3 style="text-align: center;top:5px">Datos del Destinatario</h3>
            <br />
            Nombre:{{ $data["nombreBeneficiario"] }}<br />
            Cedula:{{ $data["cedulaBeneficiario"] }}<br />
            Banco:{{ $data["banco"] }}<br />
            Tipo de Cuenta: {{ $data["tipoCuenta"] }}<br />
            Numero de Cuenta: {{ $data["numeroCuenta"] }}<br />
            Moneda:{{ $data["moneda"] }}<br />
        </td>
    </tr>

    <tr>
        <td
            style="
				color: #757575;
				font-family: verdana;
				font-size: 20px;
				text-align: center;
				padding-top: 40px;
				padding-bottom: 40px;
			">
            Gracias por confiar en nosotros.
        </td>
    </tr>

    <tr>
        <td style="height: 1px; background: #00609c"></td>
    </tr>
    <tr></tr>
    <tr>
        <td
            style="
				color: #757575;
				font-family: verdana;
				font-size: 20px;
				text-align: center;
				padding-top: 40px;
				padding-bottom: 40px;
			">
            Para tus dudas y/o sugerencias puedes contactarte a nuestras líneas de
            atención y te ayudaremos, nos preocupamos por ti y los tuyos.
        </td>
    </tr>
</table>
