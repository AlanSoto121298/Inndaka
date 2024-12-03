<!-- CONTENT-HEADER -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Impresoras</h1>
            </div>

            <div class="col-sm-6">

                <!--                 <ol class="breakcrumb float-sm-right">

                    <li class="breakcrumb-item"><a href="index,php">Inicio</a></li>

                    <li class="breakcrumb-item active">Gestor Impresoras</li>

                </ol> -->
            </div>
        </div>
    </div>

</section>
<!-- END CONTENT-HEADER -->

<!-- CONTENT -->

<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-Impresoras btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-actualizar-Impresoras" data-dismiss="modal">
                <i class="fas fa-plus-square"> Agregar impresora</i>
            </button>
        </div>

        <table id="tablaImpresora" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="btn-info">
                <tr>
                    <td>Id</td>
                    <td>Sku</td>
                    <td>Departamento</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Color</td>
                    <td>Cable/Wifi</td>
                    <td>Ip</td>
                    <td>Tipo</td>
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

<div class="modal fade" id="modal-actualizar-Impresoras">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- MODAL HEADER -->

            <div class="modal-header">
                <h4 class="modal-title big-info">Gestionar Impresoras</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- MODAL BODY -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id="idimpresora" name="idimpresora" value="">
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
                            <label for="txtmarca">Marca</label>
                            <input type="text" class="form-control" name="marca" id="txtmarca" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtmodelo">Modelo</label>
                            <input type="text" class="form-control" name="modelo" id="txtmodelo" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtcolor">Color</label>
                            <input type="text" class="form-control" name="color" id="txtcolor" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtcableWifi">Cable/Wifi</label>
                            <input type="text" class="form-control" name="cable_wifi" id="txtcableWifi" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtip">Ip</label>
                            <input type="text" class="form-control" name="ip" id="txtip" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txttipo">Tipo</label>
                            <input type="text" class="form-control" name="tipo" id="txttipo" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtubicacion">Ubicacion</label>
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

        var table = $("#tablaImpresora").DataTable({
            "ajax": {
                "url": "ajax/impresoras.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "columnDefs": [{
                    "targets": 10,
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
                    "targets": 11,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        return "<center><button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-actualizar-Impresoras'> <i class='fas fa-pencil-alt'></i> </button>" +
                            "<button type='button' class='btn btn-danger btn-sm btnEliminar'> <i class='fas fa-trash'></i> </button></center>";
                    }
                }
            ],
            "columns": [{
                    "data": "idimpresora"
                },
                {
                    "data": "Sku"
                },
                {
                    "data": "Departamento"
                },
                {
                    "data": "Marca"
                },
                {
                    "data": "Modelo"
                },
                {
                    "data": "Color"
                },
                {
                    "data": "Cable_Wifi"
                },
                {
                    "data": "Ip"
                },
                {
                    "data": "Tipo"
                },
                {
                    "data": "Ubicacion"
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

        $('.btn-agregar-Impresoras').on('click', function() {
            accion = "registrar";
        });

        $('#tablaImpresora tbody').on('click', '.btnEliminar', function() {
            var data = table.row($(this).parents('tr')).data();

            var idimpresora = data["idimpresora"];

            var datos = new FormData();
            datos.append('accion', 'eliminar');
            datos.append('idimpresora', idimpresora);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "Estás seguro que deseas eliminar la categoria?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, eliminar",
                cancelButtonText: "Cancelar",

            }).then(resultado => {

                if (resultado.value) {

                    $.ajax({
                        url: "ajax/impresoras.ajax.php",
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

        $('#tablaImpresora tbody').on('click', '.btnEditar', function() {

            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            $('#idimpresora').val(data["idimpresora"]);
            $('#txtsku').val(data["Sku"]);
            $('#txtdepartamento').val(data["Departamento"]);
            $('#txtmarca').val(data["Marca"]);
            $('#txtmodelo').val(data["Modelo"]);
            $('#txtcolor').val(data["Color"]);
            $('#txtcableWifi').val(data["Cable_Wifi"]);
            $('#txtip').val(data["Ip"]);
            $('#txttipo').val(data["Tipo"]);
            $('#txtubicacion').val(data["Ubicacion"]);
            $('#ddlEstado').val(data["estado"]);

            // Abre la ventana modal manualmente
            $('#modal-actualizar-Impresoras').modal('show');
        });

        $('#modal-actualizar-Impresoras').on('hidden.bs.modal', function() {
            $('#idimpresora').val("");
            $('#txtsku').val("");
            $('#txtdepartamento').val("");
            $('#txtmarca').val("");
            $('#txtmodelo').val("");
            $('#txtcolor').val("");
            $('#txtcableWifi').val("");
            $('#txtip').val("");
            $('#txttipo').val("");
            $('#txtubicacion').val("");
            $('#ddlEstado').val([1]); // Ajusta el valor por defecto según necesites
        });



        /*   GUARDAR LA INFORMACION DE IMPRESORAS DESDE LA VENTANA    */

        $('#btnGuardar').on('click', function() {
            // Aquí deberías definir la variable datos

            var idimpresora = $('#idimpresora').val(),
                sku = $('#txtsku').val(),
                departamento = $('#txtdepartamento').val(),
                marca = $('#txtmarca').val(),
                modelo = $('#txtmodelo').val(),
                color = $('#txtcolor').val(),
                cable_wifi = $('#txtcableWifi').val(),
                ip = $('#txtip').val(),
                tipo = $('#txttipo').val(),
                ubicacion = $('#txtubicacion').val(),
                estado = $('#ddlEstado').val();

            var datos = new FormData();

            datos.append('idimpresora', idimpresora);
            datos.append('sku', sku);
            datos.append('departamento', departamento);
            datos.append('marca', marca);
            datos.append('modelo', modelo);
            datos.append('color', color);
            datos.append('cable_wifi', cable_wifi);
            datos.append('ip', ip);
            datos.append('tipo', tipo);
            datos.append('ubicacion', ubicacion);
            datos.append('estado', estado);
            datos.append('accion', accion);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "Estás seguro que deseas registrar la impresora?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, deseo registrar",
                cancelButtonText: "Cancelar",

            }).then(resultado => {
                if (resultado.value) {

                    $.ajax({
                        url: "ajax/impresoras.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {

                            /* console.log(respuesta);  */

                            $("#modal-actualizar-Impresoras").modal('hide');

                            table.ajax.reload(null, false);

                            $('#idimpresora').val("");
                            $('#txtsku').val("");
                            $('#txtdepartamento').val("");
                            $('#txtmarca').val("");
                            $('#txtmodelo').val("");
                            $('#txtcolor').val("");
                            $('#txtcable_wifi').val("");
                            $('#txtip').val("");
                            $('#txttipo').val("");
                            $('#txtubicacion').val("");
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