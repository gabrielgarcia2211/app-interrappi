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

    <section id="overview" class="parallax-section">
        <div class="container">
            <center>
                <div class="politicaparrafo">
                    <br>
                    <h2>TÉRMINOS Y CONDICIONES DE NUESTROS SERVICIOS
                        CAMBIOS DE SALDO PAYPAL A VENEZUELA
                    </h2>
                    <h3 class="texto">
                        Servicio
                    </h3>
                    <ul class="item">

                        <p> Metodología del servicio:</p><br>
                        <li> PayPal: para procesar una solicitud de Dólares PayPal a Bolívares en Venezuela deberá ingresar
                            en nuestro sitio web y llenar el formulario de cambio de Pedido de Bolívares tomando en cuenta
                            que al llenar el campo “Monto a cambiar” el sistema le desplegará dos campos que indican: 1. El
                            monto a pagar para poder cambiar la cantidad especificada. 2. El monto que recibirá el
                            beneficiario en Venezuela. Al ser enviado el formulario se le asignará un ID de Solicitud que
                            deberá guardar en caso de cualquier consulta o reclamo </li><br>
                        <li> Pago: para realizar el pago de su cambio desde PayPal, deberá esperar a que nuestra página le
                            redirija a la plataforma de pago, allí tendrá que llenar el formulario de pago y elegir los
                            servicios que den el monto exacto del monto de cambio. En caso de que su pago no haya podido ser
                            realizado y haya pasado 30 minutos de haber enviado el formulario principal de Pedido de
                            Bolívares, deberá solicitar nuevamente el pedido. </li><br>
                        <br>
                        <li> Monto Mínimo y comisión: </li><br>
                        <li> PayPal: CAMBIARRR+ Comisión por transacción de PayPal = $ 5,60 USD </li><br>

                        <br>
                        <li> Montos Máximo y comisión: </li><br>
                        <li> PayPal: CAMBIARRR+ Comisión por transacción de PayPal = $ 5,60 USD </li><br>
                        <p>*Nota: para cambios mayores a dicha cantidad deberá consultar la disponibilidad bancaria del
                            momento indicando el banco y la cantidad que desea cambiar a través de nuestras vías de
                            comunicación oficiales en redes sociales Instagram y Facebook </p><br>
                        <br>
                        <li>Horarios de atención de solicitudes y consultas:</li> <br>
                        <li>Lunes a viernes: 10:00 AM a 8:00 PM (VE)</li><br>
                        <li>Sábados y domingos: 10:00 AM a 5:00 PM (VE)</li>
                    </ul>
                    <h3 class="texto">
                        PAGOS
                    </h3>
                    <ul class="item">

                        <li> Transferencias a Beneficiarios</li><br>
                        <li> Tiempo de procesamiento: el tiempo de espera para el proceso exitoso de su solicitud variará de
                            acuerdo a la posición en la que figura su solicitud dentro de la cola de transferencia al
                            momento de ser recibida en nuestro sistema. Es realizada en un intervalo de tiempo máximo de 8
                            horas laborales </li><br>
                        <li> Efectividad de la transferencia: deberá tomar en cuenta que en caso de no haber disponibilidad
                            para hacer el envío con pago de manera directa a la cuenta del banco que ha suministrado,
                            realizaremos una transferencia interbancaria con efectividad del día siguiente hábil bancario
                            después de la 1PM según las normativas bancarias Venezolanas.</li><br>
                        <br>
                        <p>*Nota: puede consultar la disponibilidad bancaria del momento indicando el banco y la cantidad
                            que desea cambiar a través de nuestras vías de comunicación oficiales en redes sociales
                            Instagram y Facebook</p><br>

                        <li>Bancos con los que trabajamos. De manera directa Banesco y Banco de Venezuela. Contamos con el
                            servicio de Pago Móvil pero deberá consultar la disponibilidad mediante nuestras redes sociales.
                            De manera interbancaria trabajamos con todos los bancos de Venezuela. </li><br>
                    </ul>
                    <h3 class="texto">
                        Consultas y/o Reclamos
                    </h3>
                    <ul class="item">
                        <li> Sus consultas y/o reclamos deberán ser realizadas a través de la mensajería directa de nuestro
                            Instagram</li>
                        <li> Al consultar o reclamar por una solicitud deberá suministrar el ID de operación que nuestra
                            página le haya asignado a su formulario, si no lo posee suministre la cédula del beneficiario
                            seguido de su consulta.</li><br>
                    </ul>
                    <h3 class="texto">
                        Reembolsos por seguridad u otros motivos
                    </h3>
                    <ul class="item">
                        <li>Nuestros clientes para cambios de Saldo PayPal tendrán opción de Reembolso del dinero si el pago
                            ha sido retenido por la plataforma durante 24 horas o 7 días. Deberá comunicarse a través de
                            nuestras redes sociales una vez reciba el correo en notificación de retención para informar que
                            desea el reembolso del dinero.
                        </li><br>
                        <li>Nuestros clientes en general tendrán opción de devolución del dinero cuando exista una falla o
                            demora mayor a la indicada en nuestras normativas.</li><br>
                        <li>Se reembolsará el dinero recibido en caso de que la cuenta PayPal de pago colocada en el
                            Formulario principal de Intergiros no coincida con la indicada en el formulario de pago o no
                            corresponda a la cuenta PayPal desde la que se ha realizado el pago.</li><br>
                        <li>Se reembolsará el dinero recibido en caso de que el número de documento de identidad colocado en
                            el formulario de pago no coincida al del titular de la cuenta PayPal desde la que se realiza el
                            pago.</li><br>
                        <li>No se realizarán reembolsos por parte de INTERRAPPI si el cliente luego de realizar la solicitud
                            desea que la misma ya no sea realizada o una vez procesada la solicitud, desea devolver el
                            dinero.</li>
                    </ul>




                    <h2>TÉRMINOS Y CONDICIONES DE NUESTROS SERVICIOS
                        ENVÍO DE BOLÍVARES DE PERÚ A VENEZUELA
                    </h2>
                    <h3 class="texto">
                        Servicio
                    </h3>
                    <ul class="item">
                        <p> Metodología del servicio:</p><br>
                        <li> Para realizar un envío de dinero desde Perú a Venezuela en Soles o Dólares deberá ingresar en
                            nuestra web y ubicar las cuentas bancarias disponibles al momento de querer realizar la
                            solicitud para poder realizar el pago de su envío (Verificar antes de realizar cualquier pago).
                            Habiendo realizado el pago, llene el formulario en nuestra web y adjunte dicho voucher. Una vez
                            realizado esto solo deberá esperar el tiempo estipulado en la sección de pagos de los términos
                            para recibir el correo en notificación del procesamiento de su solicitud al beneficiario en
                            Venezuela. Al ser enviado el formulario se le asignará un ID de Solicitud que deberá guardar en
                            caso de cualquier consulta o reclamo.</li><br>
                        <li> Cargos adicionales: al realizar pagos a través de ventanilla o desde provincia (Esto último a
                            excepción de Scotiabank) el banco generará una comisión que debe ser asumida por el cliente, por
                            lo cual, si ha efectuado un pago que posea un cargo adicional deberá ser restado al momento de
                            llenar el formulario para colocar el monto exacto a enviar sin dicha comisión. </li><br>
                        <br>
                        <li> Monto Mínimo y comisión: </li><br>
                        <li> PayPal: CAMBIARRR+ Comisión por transacción de PayPal = $ 5,60 USD </li><br>

                        <br>
                        <li> Montos Máximo y comisión: </li><br>
                        <li> PayPal: CAMBIARRR+ Comisión por transacción de PayPal = $ 5,60 USD </li><br>
                        <p>*Nota: para cambios mayores a dicha cantidad deberá consultar la disponibilidad bancaria del
                            momento indicando el banco y la cantidad que desea cambiar a través de nuestras vías de
                            comunicación oficiales en redes sociales Instagram y Facebook </p><br>
                        <br>
                        <li>Horarios de atención de solicitudes y consultas:</li> <br>
                        <li>Lunes a viernes: 9:00 AM a 7:00 PM (PE)</li><br>
                        <li>Sábados y domingos: 9:00 AM a 4:00 PM (PE)</li>
                    </ul>
                    <h3 class="texto">
                        PAGOS
                    </h3>
                    <ul class="item">
                        <p> Transferencias a Beneficiarios</p><br>
                        <li><b>Tiempo de procesamiento:</b> el tiempo de espera para el proceso exitoso de su solicitud
                            variará de acuerdo a la posición en la que figura su solicitud dentro de la cola de
                            transferencia al momento de ser recibida en nuestro sistema. Es realizada en un intervalo de
                            tiempo máximo de 8 horas laborales.</li><br>
                        <li><b>Efectividad de la transferencia:</b> dependerá de la disponibilidad bancaria del momento, se
                            debe tomar en cuenta que las transferencias efectuadas desde otros bancos tendrán una
                            efectividad del día siguiente hábil bancario después de la 1:00 PM, mientras que las efectuadas
                            desde el mismo banco o a través del servicio de pago móvil tendrán una efectividad inmediata.
                        </li><br>
                        <br>
                        <p>*Nota: puede consultar la disponibilidad bancaria del momento indicando el banco y la cantidad
                            que desea cambiar a través de nuestras vías de comunicación oficiales en redes sociales
                            Instagram y Facebook </p><br>
                        <br><br>
                        <li><b>Bancos disponibles:</b> trabajamos con los bancos Banesco, Banco de Venezuela y el método de
                            pago Pago Móvil. Cualquier otro banco para el que no suministre datos de Pago Móvil será
                            atendido como una transferencia a Otros bancos con una efectividad del día siguiente hábil
                            bancario después de la 1PM.</li><br>
                        <li><b>Tipos de cuenta:</b> Se atenderán cambios y envíos a cualquier banco de Venezuela que sea
                            cuenta tipo corriente o ahorro, tomando en cuenta que para algunos bancos las cuentas tipo
                            ahorro poseen un límite diario. Siendo el caso en el que no sea posible efectuar su solicitud,
                            podrá cambiar de cuenta o solicitar la devolución de su dinero.</li>
                    </ul>
                    <h3 class="texto">
                        Consultas y/o Reclamos
                    </h3>
                    <ul class="item">
                        <li> Sus consultas y/o reclamos deberán ser realizadas a través de la mensajería directa de nuestro
                            Instagram</li>
                        <li> Al consultar o reclamar por una solicitud deberá suministrar el ID de operación que nuestra
                            página le haya asignado a su formulario, si no lo posee suministre la cédula del beneficiario
                            seguido de su consulta.</li><br>
                    </ul>
                    <h3 class="texto">
                        Reembolsos por seguridad u otros motivos
                    </h3>
                    <ul class="item">
                        <li>Nuestros clientes para cambios de Saldo PayPal tendrán opción de Reembolso del dinero si el pago
                            ha sido retenido por la plataforma durante 24 horas o 7 días. Deberá comunicarse a través de
                            nuestras redes sociales una vez reciba el correo en notificación de retención para informar que
                            desea el reembolso del dinero.
                        </li><br>
                        <li>No se realizarán reembolsos por parte de INTERRAPPI si el cliente luego de realizar la solicitud
                            desea que la misma ya no sea realizada o una vez procesada la solicitud, desea devolver el
                            dinero.</li>
                    </ul>


                    <h2>TÉRMINOS Y CONDICIONES DE NUESTROS SERVICIOS
                        ENVÍO DE BOLÍVARES DE COLOMBIA A VENEZUELA

                    </h2>
                    <h3 class="texto">
                        Servicio
                    </h3>
                    <ul class="item">
                        <p> Metodología del servicio:</p><br>
                        <li> Para realizar un envío de dinero desde Colombia a Venezuela en Pesos Colombianos deberá
                            ingresar en nuestra web y ubicar las cuentas bancarias disponibles al momento de querer realizar
                            la solicitud para poder realizar el pago de su envío (Verificar antes de realizar cualquier
                            pago). Habiendo realizado el pago, llene el formulario en nuestra web y adjunte dicho voucher.
                            Una vez realizado esto solo deberá esperar el tiempo estipulado en la sección de pagos de los
                            términos para recibir el correo en notificación del procesamiento de su solicitud al
                            beneficiario en Venezuela. Al ser enviado el formulario se le asignará un ID de Solicitud que
                            deberá guardar en caso de cualquier consulta o reclamo.</li><br>
                        <br>
                        <li> Monto Mínimo</li><br>
                        <li> 10.000 COP </li><br>

                        <br>
                        <li> Montos Máximo </li><br>
                        <li> 350.000 COP </li><br>
                        <p>*Nota: para cambios mayores a dicha cantidad deberá consultar la disponibilidad bancaria del
                            momento indicando el banco y la cantidad que desea cambiar a través de nuestras vías de
                            comunicación oficiales en redes sociales Instagram y Facebook </p><br>
                        <br>
                        <li>Horarios de atención de solicitudes y consultas:</li> <br>
                        <li>Lunes a viernes: 9:00 AM a 7:00 PM (CO)</li><br>
                        <li>Sábados y domingos: 9:00 AM a 4:00 PM (CO)</li>
                    </ul>
                    <h3 class="texto">
                        PAGOS
                    </h3>
                    <ul class="item">
                        <p> Transferencias a Beneficiarios</p><br>
                        <li><b>Tiempo de procesamiento:</b> el tiempo de espera para el proceso exitoso de su solicitud
                            variará de acuerdo a la posición en la que figura su solicitud dentro de la cola de
                            transferencia al momento de ser recibida en nuestro sistema. Es realizada en un intervalo de
                            tiempo máximo de 8 horas laborales. </li><br>
                        <li><b>Efectividad de la transferencia:</b> dependerá de la disponibilidad bancaria del momento, se
                            debe tomar en cuenta que las transferencias efectuadas desde otros bancos tendrán una
                            efectividad del día siguiente hábil bancario después de la 1:00 PM, mientras que las efectuadas
                            desde el mismo banco o a través del servicio de pago móvil tendrán una efectividad inmediata.
                        </li><br>
                        <br>
                        <p>*Nota: puede consultar la disponibilidad bancaria del momento indicando el banco y la cantidad
                            que desea cambiar a través de nuestras vías de comunicación oficiales en redes sociales
                            Instagram y Facebook </p><br>
                        <br><br>
                        <li><b>Bancos disponibles:</b>trabajamos con los bancos Banesco, Banco de Venezuela y el método de
                            pago Pago Móvil. Cualquier otro banco para el que no suministre datos de Pago Móvil será
                            atendido como una transferencia a Otros bancos con una efectividad del día siguiente hábil
                            bancario después de la 1PM.</li><br>
                        <li><b>Tipos de cuenta:</b>Se atenderán cambios y envíos a cualquier banco de Venezuela que sea
                            cuenta tipo corriente o ahorro, tomando en cuenta que para algunos bancos las cuentas tipo
                            ahorro poseen un límite diario. Siendo el caso en el que no sea posible efectuar su solicitud,
                            podrá cambiar de cuenta o solicitar la devolución de su dinero.</li>
                    </ul>
                    <h3 class="texto">
                        Consultas y/o Reclamos
                    </h3>
                    <ul class="item">
                        <li> Sus consultas y/o reclamos deberán ser realizadas a través de la mensajería directa de nuestro
                            Instagram</li>
                        <li> Al consultar o reclamar por una solicitud deberá suministrar el ID de operación que nuestra
                            página le haya asignado a su formulario, si no lo posee suministre la cédula del beneficiario
                            seguido de su consulta.</li><br>
                    </ul>
                    <h3 class="texto">
                        Reembolsos por seguridad u otros motivos
                    </h3>
                    <ul class="item">
                        <li>Nuestros clientes en general tendrán opción de devolución del dinero cuando exista una falla o
                            demora mayor a la indicada en nuestras normativas.</li><br>
                        <li>No se realizarán reembolsos por parte de INTERRAPPI si el cliente luego de realizar la solicitud
                            desea que la misma ya no sea realizada o una vez procesada la solicitud, desea devolver el
                            dinero.</li>
                    </ul>


                    <h2>TÉRMINOS Y CONDICIONES DE NUESTROS SERVICIOS
                        VERIFICACIÓN DE CUENTAS PAYPAL
                    </h2>
                    <h3 class="texto">
                        Servicio
                    </h3>
                    <ul class="item">
                        <p> Metodología del servicio:</p><br>
                        <li> Para realizar la compra de una TDC virtual y verificar su cuenta PayPal deberá verificar la
                            disponibilidad de tarjetas en ese momento desde la sección de “Verificación de cuentas PayPal”
                            en nuestra web. Una vez conforme con la TDC que desea, consulte mediante la mensajería directa
                            de nuestras redes sociales la cuenta en Bolívares o la cuenta PayPal a la que puede realizar el
                            pago en ese momento. Seguido de esto proceda a llenar el formulario adjuntando la captura del
                            pago que ha hecho (Para pagos PayPal adjuntar la captura del detalle de la transacción). Y por
                            último deberá enviar los accesos de su cuenta al correo atencionalcliente@interrapi.com . Al ser
                            enviado el formulario se le asignará un ID de Solicitud que deberá guardar en caso de cualquier
                            consulta o reclamo.</li><br>
                        <br>
                        <li><b>Tiempo de procesamiento:</b> El tiempo de espera para el proceso exitoso de su solicitud
                            variará de acuerdo a la posición en la que figura su solicitud dentro de la cola de espera al
                            momento de ser recibida en nuestro sistema. Es realizada en un intervalo de tiempo máximo de 3
                            días.</li><br>
                        <li><b>Tarjetas disponibles:</b> Trabajamos con tarjetas de 3 meses, 6 meses, 1 año y 5 años. La
                            disponibilidad de tarjetas la puede observar desde la sección de “Verificación de cuentas
                            PayPal” en nuestra web.</li><br>
                        <br>
                        <li>Horarios de atención de solicitudes y consultas:</li> <br>
                        <li>Lunes a viernes: 10:00 AM a 8:00 PM (VE)</li><br>
                        <li>Sábados y domingos: 10:00 AM a 5:00 PM (VE)</li>
                    </ul>
                    <h3 class="texto">
                        Consultas y/o Reclamos
                    </h3>
                    <ul class="item">
                        <li> Sus consultas y/o reclamos deberán ser realizadas a través de la mensajería directa de nuestro
                            Instagram</li>
                        <li> Al consultar o reclamar por una solicitud deberá suministrar el ID de operación que nuestra
                            página le haya asignado a su formulario, si no lo posee suministre la cédula del beneficiario
                            seguido de su consulta.</li><br>
                    </ul>
                    <h3 class="texto">
                        Reembolsos por seguridad u otros motivos
                    </h3>
                    <ul class="item">
                        <li>Nuestros clientes en general tendrán opción de devolución del dinero cuando exista una falla o
                            demora mayor a la indicada en nuestras normativas.</li><br>
                        <li>No se realizarán reembolsos por parte de INTERRAPPI si el cliente luego de realizar la solicitud
                            desea que la misma ya no sea realizada o una vez procesada la solicitud, desea devolver el
                            dinero.</li>
                    </ul>


                    <h2>TÉRMINOS Y CONDICIONES DE NUESTROS SERVICIOS
                        RECARGA DE SALDO PAYPAL
                    </h2>
                    <h3 class="texto">
                        Servicio
                    </h3>
                    <ul class="item">
                        <p> Metodología del servicio:</p><br>
                        <li> Para solicitar la recarga de saldo PayPal deberá llenar el formulario de la pestaña “Recarga de
                            saldo PayPal” suministrando toda la información que allí se solicita y adjuntando la captura del
                            pago de su recarga. Luego de esto solo deberá esperar a que su solicitud sea procesada de
                            acuerdo al tiempo de espera máximo indicado en la sección de tiempo de procesamiento en los
                            términos y condiciones del servicio. Al ser enviado el formulario se le asignará un ID de
                            Solicitud que deberá guardar en caso de cualquier consulta o reclamo.</li><br>
                        <li>Pago: para realizar el pago de su cambio desde Venezuela deberá consultar mediante la mensajería
                            directa de nuestras redes sociales la cuenta disponible del banco con el cual desea trabajar.
                            Trabajamos con Banesco, Banco de Venezuela y Pago Móvil.</li><br>
                        <li>¿Cómo saber el monto exacto a pagar según la tasa del día incluyendo la comisión?: para esto
                            puede apoyarse nuestro formulario de recarga de saldo PayPal, ya que al llenarlo se desplegará
                            un campo que le indica el total a pagar para recibir el monto que ha especificado en el campo
                            “Monto a recargar”.</li><br>
                        <br>
                        <li> Monto Mínimo y comisión: </li><br>
                        <li> $ 5 USD.</li><br>

                        <br>
                        <li> Montos Máximo y comisión: </li><br>
                        <li> $ 100 USD. </li><br>
                        <p>comisiones</p><br>
                        <li>El servicio de recarga PayPal posee un cobro de comisión del 18% sobre el monto a recargar. Esta
                            comisión incluye la comisión por transacción que cobra PayPal.</li><br>
                        <br>
                        <li>Horarios de atención de solicitudes y consultas:</li> <br>
                        <li>Lunes a viernes: 10:00 AM a 8:00 PM (VE)</li><br>
                        <li>Sábados y domingos: 10:00 AM a 5:00 PM (VE)</li>
                    </ul>


                    <h2> RECARGAS </h2>
                    <h3 class="texto">
                        Tiempo de procesamiento y efectividad de la transacción:
                    </h3>
                    <ul class="item">
                        <li><b>Tiempo de procesamiento:</b> el tiempo de espera para el proceso exitoso de su solicitud
                            variará de acuerdo a la posición en la que figura su solicitud dentro de la cola de espera al
                            momento de ser recibida en nuestro sistema. Es realizada en un intervalo de tiempo máximo de 8
                            horas laborables.</li><br>
                        <li><b>Efectividad de la transacción: </b>dependerá de la cuenta PayPal que recibe la recarga. Debe
                            tomar en cuenta que PayPal, para algunos casos en los que la cuenta que recibe el dinero no
                            posee muchas transacciones en la plataforma o posee un estado específico dentro de ella, podría
                            retener la transacción por 24 a 48 horas. En caso de que esto ocurra, por favor comuníquese a
                            través de la mensajería directa de nuestras redes sociales para informarlo e indicarle el
                            procedimiento a seguir.</li><br>
                    </ul>
                    <h3 class="texto">
                        Consultas y/o Reclamos
                    </h3>
                    <ul class="item">
                        <li> Sus consultas y/o reclamos deberán ser realizadas a través de la mensajería directa de nuestro
                            Instagram</li>
                        <li> Al consultar o reclamar por una solicitud deberá suministrar el ID de operación que nuestra
                            página le haya asignado a su formulario, si no lo posee suministre la cédula del beneficiario
                            seguido de su consulta.</li><br>
                    </ul>
                    <h3 class="texto">
                        Reembolsos por seguridad u otros motivos
                    </h3>
                    <ul class="item">
                        <li>Nuestros clientes en general tendrán opción de devolución del dinero cuando exista una falla o
                            demora mayor a la indicada en nuestras normativas.</li><br>
                        <li>No se realizarán reembolsos por parte de INTERRAPPI si el cliente luego de realizar la solicitud
                            desea que la misma ya no sea realizada o una vez procesada la solicitud, desea devolver el
                            dinero.</li>
                    </ul>


                    <h2>RECARGA DE SALDO SKRILL
                    </h2>
                    <h3 class="texto">
                        Servicio
                    </h3>
                    <ul class="item">
                        <p> Metodología del servicio:</p><br>
                        <li> Para solicitar la recarga de saldo Skrill deberá llenar el formulario de la pestaña “Recarga de
                            saldo Skrill” suministrando toda la información que allí se solicita y adjuntando la captura del
                            pago de su recarga. Luego de esto solo deberá esperar a que su solicitud sea procesada de
                            acuerdo al tiempo de espera máximo indicado en la sección de tiempo de procesamiento en los
                            términos y condiciones del servicio. Al ser enviado el formulario se le asignará un ID de
                            Solicitud que deberá guardar en caso de cualquier consulta o reclamo.</li><br>
                        <li>Pago: para realizar el pago de su cambio desde Venezuela deberá consultar mediante la mensajería
                            directa de nuestras redes sociales la cuenta disponible del banco con el cual desea trabajar.
                            Trabajamos con Banesco, Banco de Venezuela y Pago Móvil.</li><br>
                        <li>¿Cómo saber el monto exacto a pagar según la tasa del día incluyendo la comisión?: para esto
                            puede apoyarse nuestro formulario de recarga de saldo Skrill, ya que al llenarlo se desplegará
                            un campo que le indica el total a pagar para recibir el monto que ha especificado en el campo
                            “Monto a recargar”.</li><br>
                        <br>
                        <li> Monto Mínimo y comisión: </li><br>
                        <li> $ 5 USD.</li><br>

                        <br>
                        <li> Montos Máximo y comisión: </li><br>
                        <li> $ 100 USD. </li><br>
                        <p>Comisiones</p><br>
                        <li>El servicio de recarga Skrill posee un cobro de comisión del 18% sobre el monto a recargar. Esta
                            comisión incluye la comisión por transacción que cobra Skrill.</li><br>
                        <br>
                        <li>Horarios de atención de solicitudes y consultas:</li> <br>
                        <li>Lunes a viernes: 10:00 AM a 8:00 PM (VE)</li><br>
                        <li>Sábados y domingos: 10:00 AM a 5:00 PM (VE)</li>
                    </ul>
                    <h2> RECARGAS </h2>
                    <h3 class="texto">
                        Tiempo de procesamiento y efectividad de la transacción:
                    </h3>
                    <ul class="item">
                        <li><b>Tiempo de procesamiento:</b> el tiempo de espera para el proceso exitoso de su solicitud
                            variará de acuerdo a la posición en la que figura su solicitud dentro de la cola de espera al
                            momento de ser recibida en nuestro sistema. Es realizada en un intervalo de tiempo máximo de 8
                            horas laborables.</li><br>
                        <li><b>Efectividad de la transacción: </b>inmediata. </li><br>
                        <li><b>Proveniencia de los fondos: </b>las recargas realizadas por Intergiros son efectuadas a
                            través de fondos provenientes de pagos recibidos de clientes. Es decir, no controlamos que los
                            fondos de nuestros clientes provengan de pagos recibidos de Skrill a Skrill o recargas de saldo
                            desde Tarjetas de Crédito. Si usted solicita una recarga, estará aceptando recibir los fondos
                            sin importar si provienen desde Tarjetas de Crédito (Esto solo afecta a casos en los que
                            requieran realizar pagos y las plataformas no acepten el uso de saldo proveniente de Tarjetas de
                            Crédito). </li><br>
                    </ul>
                    <h3 class="texto">
                        Consultas y/o Reclamos
                    </h3>
                    <ul class="item">
                        <li> Sus consultas y/o reclamos deberán ser realizadas a través de la mensajería directa de nuestro
                            Instagram</li>
                        <li> Al consultar o reclamar por una solicitud deberá suministrar el ID de operación que nuestra
                            página le haya asignado a su formulario, si no lo posee suministre la cédula del beneficiario
                            seguido de su consulta.</li><br>
                    </ul>
                    <h3 class="texto">
                        Reembolsos por seguridad u otros motivos
                    </h3>
                    <ul class="item">
                        <li>Nuestros clientes en general tendrán opción de devolución del dinero cuando exista una falla o
                            demora mayor a la indicada en nuestras normativas.</li><br>
                        <li>No se realizarán reembolsos por parte de INTERRAPPI si el cliente luego de realizar la solicitud
                            desea que la misma ya no sea realizada o una vez procesada la solicitud, desea devolver el
                            dinero.</li>
                    </ul>


                    <h2>COMPRAMOS TUS BOLÍVARES EN PERÚ
                    </h2>
                    <h3 class="texto">
                        Servicio
                    </h3>
                    <ul class="item">
                        <p> Metodología del servicio:</p><br>
                        <li> Para procesar una solicitud de venta de Bolívares por Soles o Dólares en Perú deberá ingresar
                            en nuestro sitio web y llenar el formulario de cambio desde la pestaña “Compramos tus
                            Bolívares”, tomando en cuenta que al llenar el campo “Monto a recibir en Soles” el sistema le
                            desplegará dos campos que indican: 1. La tasa de cambio actualizada. 2. El monto que deberá
                            pagar en Bolívares. Al ser enviado el formulario se le asignará un ID de Solicitud que deberá
                            guardar en caso de cualquier consulta o reclamo.</li><br>
                        <li>Pago: para realizar el pago de su cambio desde Venezuela deberá consultar mediante la mensajería
                            directa de nuestras redes sociales la cuenta disponible del banco con el cual desea trabajar.
                            Trabajamos con Banesco, Banco de Venezuela y Pago Móvil.</li><br>
                        <br>
                        <li> Monto Mínimo y comisión: </li><br>
                        <li> soles: S/20 USD.</li><br>
                        <li> $ 5 USD.</li><br>

                        <br>
                        <li> Montos Máximo y comisión: </li><br>
                        <li> $ 100 USD. </li><br>
                        <br>
                        <p>*Nota: puede consultar la disponibilidad bancaria del momento indicando el banco y la cantidad
                            que desea cambiar a través de nuestras vías de comunicación oficiales en redes sociales
                            Instagram y Facebook </p><br>
                        <br>
                        <br>
                        <li>Horarios de atención de solicitudes y consultas:</li> <br>
                        <li>Lunes a viernes: 9:00 AM a 7:00 PM (PE)</li><br>
                        <li>Sábados y domingos: 9:00 AM a 4:00 PM (PE)</li>
                    </ul>
                    <h2> Pagos </h2>
                    <h3 class="texto">
                        Transferencias a Beneficiarios
                    </h3>
                    <ul class="item">
                        <li><b>Tiempo de procesamiento:</b> el tiempo de espera para el proceso exitoso de su solicitud
                            variará de acuerdo a la posición en la que figura su solicitud dentro de la cola de espera al
                            momento de ser recibida en nuestro sistema. Es realizada en un intervalo de tiempo máximo de 8
                            horas laborables.</li><br>
                        <li><b>Efectividad de la transacción: </b>deberá tomar en cuenta que en caso de no haber
                            disponibilidad para hacer el envío con pago de manera directa a la cuenta del banco que ha
                            suministrado, realizaremos una transferencia interbancaria a su CCI y esta para algunos bancos
                            es inmediata, mientras que para otros la efectividad podría ser al día siguiente hábil bancario.
                        </li><br>
                        <br>
                        <p>*Nota: puede consultar la disponibilidad bancaria del momento indicando el banco y la cantidad
                            que desea cambiar a través de nuestras vías de comunicación oficiales en redes sociales
                            Instagram y Facebook </p><br>
                        <br>
                        <li><b>Bancos con los que trabajamos:</b>BBVA Continental, Interbank, Banco de Crédito BCP,
                            Scotiabank, BanBif, Banco Pichincha y Banco de la Nación. Pero las transferencias directas serán
                            realizadas solo desde Interbank y BCP, para cualquier otro banco que no sean estos últimos
                            mencionados deberá suministrar datos de CCI, de lo contrario no podrá ser atendida la solicitud
                            hasta comunicarse mediante nuestras redes sociales oficiales para proveer la información. </li>
                    </ul>
                    <h3 class="texto">
                        Consultas y/o Reclamos
                    </h3>
                    <ul class="item">
                        <li> Sus consultas y/o reclamos deberán ser realizadas a través de la mensajería directa de nuestro
                            Instagram</li>
                        <li> Al consultar o reclamar por una solicitud deberá suministrar el ID de operación que nuestra
                            página le haya asignado a su formulario, si no lo posee suministre la cédula del beneficiario
                            seguido de su consulta.</li><br>
                    </ul>
                    <h3 class="texto">
                        Reembolsos por seguridad u otros motivos
                    </h3>
                    <ul class="item">
                        <li>Nuestros clientes en general tendrán opción de devolución del dinero cuando exista una falla o
                            demora mayor a la indicada en nuestras normativas.</li><br>
                        <li>No se realizarán reembolsos por parte de INTERRAPPI si el cliente luego de realizar la solicitud
                            desea que la misma ya no sea realizada o una vez procesada la solicitud, desea devolver el
                            dinero.</li>
                    </ul>







                </div>
            </center>
        </div>
    </section>

    @include('dash.footer')

    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
@endsection
