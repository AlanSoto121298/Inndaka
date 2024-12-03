<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DashBoard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="breadcrumb-item">
                        DashBoard
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/categorias.php')">
                    <i class="fas fa-home"></i> Categorias
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/equipos.php')">
                    <i class="fas fa-user"></i> Equipos
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/impresoras.php')">
                    <i class="fas fa-cog"></i> Impresoras
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/celulares.php')">
                    <i class="fas fa-envelope"></i> Celulares
                </a>
            </div>
            <!-- Agrega aquí los demás botones con los iconos y enlaces correspondientes -->
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/monitores.php')">
                    <i class="fas fa-desktop"></i> Monitores
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/alexas.php')">
                    <i class="fas fa-chart-bar"></i> Alexas
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/teclados.php')">
                    <i class="fas fa-keyboard"></i> Teclados
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/mouses.php')">
                    <i class="fas fa-mouse"></i> Mouses
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/radios.php')">
                    <i class="fas fa-microphone"></i> Radios
                </a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="#" class="btn btn-primary btn-lg btn-block rounded-pill" onclick="cargarContenido('content-wrapper','vistas/modulos/tablets.php')">
                    <i class="fas fa-tablet-alt"></i> Tablets
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    function cargarContenido(contenedor, archivo) {
        // Aquí deberías cargar el contenido del archivo en el contenedor especificado
        console.log('Cargando contenido del archivo ' + archivo + ' en el contenedor ' + contenedor);
        // Aquí puedes utilizar AJAX para cargar el contenido si lo deseas
    }
</script>
