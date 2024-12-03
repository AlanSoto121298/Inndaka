<!-- CONTENT-HEADER -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Alexas</h1>
            </div>

            <div class="col-sm-6">

                <!--                 <ol class="breakcrumb float-sm-right">

                    <li class="breakcrumb-item"><a href="index,php">Inicio</a></li>

                    <li class="breakcrumb-item active">Gestor Alexas</li>

                </ol> -->
            </div>
        </div>
    </div>

</section>
<!-- END CONTENT-HEADER -->

<!-- CONTENT -->

<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-Alexas btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-actualizar-Alexas" data-dismiss="modal">
                <i class="fas fa-plus-square"> Agregar Alexas</i>
            </button>
        </div>

        <table id="tablaAlexas" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="btn-info">
                <tr>
                    <td>Id</td>
                    <td>Sku</td>
                    <td>Departamento</td>
                    <td>Piso</td>
                    <td>Detalles</td>
                    <td>Red Wifi</td>
                    <td>Ubicacion</td>
                    <td>Estado</td>
                    <td style="width:10%;">Acciones</td>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</section>

<!-- ./ CONTENT -->


<!-- VENTANA MODAL PARA REGISTRAR Y ACTUALIZAR -->

<!-- Button trigger modal -->

<div class="modal fade" id="modal-actualizar-Alexas">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- MODAL HEADER -->

            <div class="modal-header">
                <h4 class="modal-title big-info">Gestionar Alexas</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- MODAL BODY -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id="idalexas" name="idalexas" value="">
                            <label for="txtsku">Sku</label>
                            <input type="text" class="form-control" name="sku" id="txtsku" placeholder="Ingrese la categoria">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtdepartamento">Departamento</label>
                            <input type="text" class="form-control" name="departamento" id="txtdepartamento" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtpiso">Piso</label>
                            <input type="text" class="form-control" name="piso" id="txtpiso" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtdetalles">Detalles</label>
                            <input type="text" class="form-control" name="detalles" id="txtdetalles" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtredwifi">Red Wifi</label>
                            <input type="text" class="form-control" name="redwifi" id="txtredwifi" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtubicacion">Ubicación</label>
                            <input type="text" class="form-control" name="ubicacion" id="txtubicacion" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="ddlEstado">Estado</label>
                            <select name="estado" id="ddlEstado" class="form-control select2bs4">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <!-- MODAL FOOTER -->

            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>


<!-- END VENTANA MODAL PARA REGISTRAR Y ACTUALIZAR -->


<script>
    $(document).ready(function() {

        var accion = "";
        var toast = swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        var table = $("#tablaAlexas").DataTable({
            "ajax": {
                "url": "ajax/alexas.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "columnDefs": [{
                    "targets": 7,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        if (data == 1) {
                            return "<button type='button' class='btn btn-block btn-primary btn-sm'>ACTIVO</button>";
                        } else {
                            return "<button type='button' class='btn btn-block btn-danger btn-sm'>INACTIVO</button>";
                        }
                    }
                },
                {
                    "targets": 8,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        return "<center><button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-actualizar-Impresoras'> <i class='fas fa-pencil-alt'></i> </button>" +
                            "<button type='button' class='btn btn-danger btn-sm btnEliminar'> <i class='fas fa-trash'></i> </button></center>";
                    }
                }
            ],
            "columns": [{
                    "data": "idalexas"
                },
                {
                    "data": "sku"
                },
                {
                    "data": "departamento"
                },
                {
                    "data": "piso"
                },
                {
                    "data": "detalles"
                },
                {
                    "data": "redwifi"
                },
                {
                    "data": "ubicacion"
                },
                {
                    "data": "estado"
                },
                {
                    "data": "acciones"
                }
            ],
            "language": {
                // definición del lenguaje
            }
        });

        $('.btn-agregar-Alexas').on('click', function() {
            accion = "registrar";
        });

        $('#tablaAlexas tbody').on('click', '.btnEliminar', function() {
            var data = table.row($(this).parents('tr')).data();

            var idalexas = data["idalexas"];

            var datos = new FormData();
            datos.append('accion', 'eliminar');
            datos.append('idalexas', idalexas);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "Estás seguro que deseas eliminar la alexa?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, eliminar",
                cancelButtonText: "Cancelar",

            }).then(resultado => {

                if (resultado.value) {

                    $.ajax({
                        url: "ajax/alexas.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {

                            console.log(respuesta);

                            table.ajax.reload(null, false);

                            toast.fire({
                                icon: 'success',
                                title: respuesta
                            });
                        }
                    });
                } else {
                    // Aquí no hay ningún código, por lo que puedes eliminar este bloque
                }
            });
        });

        $('#tablaAlexas tbody').on('click', '.btnEditar', function() {
            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            $('#idalexas').val(data["idalexas"]);
            $('#txtsku').val(data["sku"]);
            $('#txtdepartamento').val(data["departamento"]);
            $('#txtpiso').val(data["piso"]);
            $('#txtdetalles').val(data["detalles"]); // Corrección aquí
            $('#txtredwifi').val(data["redwifi"]);
            $('#txtubicacion').val(data["ubicacion"]);
            $('#ddlEstado').val(data["estado"]);

            // Abre la ventana modal manualmente
            $('#modal-actualizar-Alexas').modal('show');
        });

        $('#modal-actualizar-Alexas').on('hidden.bs.modal', function() {
            $('#idalexas').val("");
            $('#txtsku').val("");
            $('#txtdepartamento').val("");
            $('#txtpiso').val("");
            $('#txtdetalles').val("");
            $('#txtredwifi').val("");
            $('#txtubicacion').val("");
            $('#ddlEstado').val([1]); // Ajusta el valor por defecto según necesites
        });





        /*   GUARDAR LA INFORMACION DE Celulares DESDE LA VENTANA    */

        $('#btnGuardar').on('click', function() {
            // Aquí deberías definir la variable datos

            var idalexas = $('#idalexas').val(),
                sku = $('#txtsku').val(),
                departamento = $('#txtdepartamento').val(),
                piso = $('#txtpiso').val(),
                detalles = $('#txtdetalles').val(),
                redwifi = $('#txtredwifi').val(),
                ubicacion = $('#txtubicacion').val(),
                estado = $('#ddlEstado').val();

            var datos = new FormData();

            datos.append('idalexas', idalexas);
            datos.append('sku', sku);
            datos.append('departamento', departamento);
            datos.append('piso', piso);
            datos.append('detalles', detalles);
            datos.append('redwifi', redwifi);
            datos.append('ubicacion', ubicacion);
            datos.append('estado', estado);
            datos.append('accion', accion);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "Estás seguro que deseas registrar la alexa?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, deseo registrar",
                cancelButtonText: "Cancelar",

            }).then(resultado => {
                if (resultado.value) {

                    $.ajax({
                        url: "ajax/alexas.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {

                            /* console.log(respuesta);  */

                            $("#modal-actualizar-Alexas").modal('hide');

                            table.ajax.reload(null, false);


                            $('#idalexas').val(),
                                $('#txtsku').val(),
                                $('#txtdepartamento').val(),
                                $('#txtpiso').val(),
                                $('#txtdetalles').val(),
                                $('#txtredwifi').val(),
                                $('#txtubicacion').val(),
                                $('#ddlEstado').val([1]);

                            toast.fire({
                                icon: 'success',
                                title: respuesta
                            });
                        }
                    });


                } else {


                }
            });


        });
    });
</script>




























<!-- check poin -->