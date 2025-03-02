<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario con jQuery</title>
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
    <script src="{{ asset('js/jquery-3.7.1.min.js')}}"></script>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="{{ asset('img/daarshipping.png') }}" alt="DaarShipping">
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="#">ENSs ICS2</a></li>
                <li><a href="#">MCs</a></li>
            </ul>
        </nav>
        <button class="logout-button">Desconectar</button>
    </header>

    <!-- Contenedor para centrar el formulario -->
    <div class="form-container">
        <!-- Formulario -->
        <form id="miFormulario">
            <h2>Edición del MC 1 del formulario para ENSs ICS2 137/2025</h2>

            <div class="form-layout">
                <!-- Sección 1: PARTES PARA EL MC -->
                <div class="section">
                    <h3>PARTES PARA EL MC</h3>
                    <div class="section-container">

                        <div class="row">
                            <label for="transportista">Transportista:</label>
                            <div class="search-container">
                                <input type="text" id="searchTransportista" name="searchTransportista" placeholder="Buscar..." />
                            </div>
                            <select id="selectTransportista" class="selectSect1" name="selectTransportista">
                                <option value="">Seleccione</option>
                                <option value="transportista1">Transportista 1</option>
                                <option value="transportista2">Transportista 2</option>
                                <option value="transportista3">Transportista 3</option>
                            </select>
                        </div>
                        <div class="row">
                            <label for="shipper">Shipper:</label>
                            <div class="search-container">
                                <input type="text" id="searchShipper" name="searchShipper" placeholder="Buscar..." />
                            </div>
                            <select id="selectShipper" class="selectSect1" name="selectShipper">
                                <option value="">Seleccione</option>
                                <option value="shipper1">Shipper 1</option>
                                <option value="shipper2">Shipper 2</option>
                                <option value="shipper3">Shipper 3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Sección 2: VALORES GENERALES PARA EL MC -->
                <div class="section">
                    <h3>INFORMACIONES ADICIONALES</h3>
                    <div class="section-container">
                        <div class="row">
                            <label for="codigo">1. Código:</label>
                            <select id="codigo" class="selectSect2" name="codigo">
                                <option value="">Seleccione</option>
                            </select>
                            <label for="texto">Texto:</label>
                            <textarea id="texto" name="texto"></textarea>
                        </div>
                        <div class="row">
                            <label for="eliminar">Eliminar:</label>
                            <input type="checkbox" id="eliminar" name="eliminar">
                        </div>
                        <div class="row">
                            <button type="button">Añadir Información</button>
                            <input type="number" id="cantidadInfo" name="cantidadInfo" min="1">
                            <button type="button">Eliminar Informaciones Marcadas</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sección de botones de acción -->
            <div class="form-actions">
                <button type="submit" class="btn-guardar">Guardar</button>
                <button type="reset" class="btn-cancelar">Cancelar</button>
            </div>

            <!-- Modal de opciones de guardar -->
            <div id="guardarModal" class="modal">
                <div class="modal-content">
                    <h3>Selecciona una opción</h3>
                    <button class="guardar-opcion" data-action="guardar">Guardar</button>
                    <button class="guardar-opcion" data-action="guardarSalir">Guardar y salir</button>
                    <button class="guardar-opcion" data-action="guardarMaster">Guardar y nueva partida de máster</button>
                    <button class="guardar-opcion" data-action="guardarHouse">Guardar y nuevo house</button>
                    <button class="guardar-opcion" data-action="guardarMC">Guardar y nuevo MC</button>
                    <button id="cerrarModal">Cancelar</button>
                </div>
            </div>

        </form>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>