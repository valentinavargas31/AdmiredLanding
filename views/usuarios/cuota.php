<link rel="stylesheet" href="/assets/cuotas.css">
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Cuota de Administración</h4>
                        <a href="?c=principal&m=principal" class="volver">←Volver</a>
                        <div class="containerr">
                            <h1>Recibo de Pago</h1>
                            <form id="formulario">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" required>

                                <label for="apellido">Apellido:</label>
                                <input type="text" id="apellido" name="apellido" required>
                                <label for="documento">Número de Documento:</label>
                                <input type="text" id="documento" name="documento" required>
                                <label for="correo">Correo Electrónico:</label>
                                <input type="text" id="correo" name="correo" required>
                                <button type="button" onclick="generarRecibo()">Generar Recibo</button>
                            </form>

                            <div id="recibo">
                                <h2>Recibo de Pago</h2>
                                <p>Nombre: <span id="reciboNombre"></span></p>
                                <p>Apellido: <span id="reciboApellido"></span></p>
                                <p>Número de Documento: <span id="reciboDocumento"></span></p>
                                <p>Correo Electrónico: <span id="reciboCorreo"></span></p>
                                <button type="button" onclick="realizarPago()">Realizar Pago</button>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- end container-fluid -->

        </div> <!-- end content -->
        <script src="./assets/js/cuota.js"></script>