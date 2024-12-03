<!-- CONTENT-HEADER -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Celulares</h1>
            </div>

            <div class="col-sm-6">

                <!--                 <ol class="breakcrumb float-sm-right">

                    <li class="breakcrumb-item"><a href="index,php">Inicio</a></li>

                    <li class="breakcrumb-item active">Gestor Celulares</li>

                </ol> -->
            </div>
        </div>
    </div>

</section>
<!-- END CONTENT-HEADER -->

<!-- CONTENT -->

<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-Celulares btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-actualizar-Celulares" data-dismiss="modal">
                <i class="fas fa-plus-square"> Agregar Celular</i>
            </button>
        </div>

        <table id="tablaCelulares" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="btn-info">
                <tr>
                    <td>Id</td>
                    <td>Sku</td>
                    <td>Responsable</td>
                    <td>Responsable Ant.</td>
                    <td>Departamento</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Color</td>
                    <td>RAM</td>
                    <td>Almacenamiento</td>
                    <td>IMEI</td>
                    <td>Ubicación</td>
                    <td>Detalles</td>
                    <td>Extras</td>
                    <td>Empresa</td>
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

<div class="modal fade" id="modal-actualizar-Celulares">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- MODAL HEADER -->

            <div class="modal-header">
                <h4 class="modal-title big-info">Gestionar Celulares</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- MODAL BODY -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id="idcelulares" name="idcelulares" value="">
                            <label for="txtsku">Sku</label>
                            <input type="text" class="form-control" name="sku" id="txtsku" placeholder="Ingrese la categoria">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtresponsable">Responsable</label>
                            <input type="text" class="form-control" name="responsable" id="txtresponsable" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtresponsableAnt">Responsable Ant.</label>
                            <input type="text" class="form-control" name="responsableAnt" id="txtresponsableAnt" placeholder="Ingrese la ruta">
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
                            <label for="txtram">RAM</label>
                            <input type="text" class="form-control" name="ram" id="txtram" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtalmacenamiento">Almacenamiento</label>
                            <input type="text" class="form-control" name="almacenamiento" id="txtalmacenamiento" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtimei">Imei</label>
                            <input type="text" class="form-control" name="imei" id="txtimei" placeholder="Ingrese la ruta">
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
                            <label for="txtdetalles">Detalles</label>
                            <input type="text" class="form-control" name="detalles" id="txtdetalles" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtextras">Extras</label>
                            <input type="text" class="form-control" name="extras" id="txtextras" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtempresa">Empresa</label>
                            <input type="text" class="form-control" name="empresa" id="txtempresa" placeholder="Ingrese la ruta">
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

        var table = $("#tablaCelulares").DataTable({
            "ajax": {
                "url": "ajax/celulares.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "columnDefs": [{
                    "targets": 15,
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
                    "targets": 16,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        return "<center><button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-actualizar-Impresoras'> <i class='fas fa-pencil-alt'></i> </button>" +
                            "<button type='button' class='btn btn-danger btn-sm btnEliminar'> <i class='fas fa-trash'></i> </button></center>";
                    }
                }
            ],
            "columns": [{
                    "data": "idcelulares"
                },
                {
                    "data": "sku"
                },
                {
                    "data": "responsable"
                },
                {
                    "data": "responsableAnt"
                },
                {
                    "data": "departamento"
                },
                {
                    "data": "marca"
                },
                {
                    "data": "modelo"
                },
                {
                    "data": "color"
                },
                {
                    "data": "ram"
                },
                {
                    "data": "almacenamiento"
                },
                {
                    "data": "imei"
                },
                {
                    "data": "ubicacion"
                },
                {
                    "data": "detalles"
                },
                {
                    "data": "extras"
                },
                {
                    "data": "empresa"
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

        $('.btn-agregar-Celulares').on('click', function() {
            accion = "registrar";
        });

        $('#tablaCelulares tbody').on('click', '.btnEliminar', function() {
            var data = table.row($(this).parents('tr')).data();

            var idcelulares = data["idcelulares"];

            var datos = new FormData();
            datos.append('accion', 'eliminar');
            datos.append('idcelulares', idcelulares);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "Estás seguro que deseas eliminar el celular?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, eliminar",
                cancelButtonText: "Cancelar",

            }).then(resultado => {

                if (resultado.value) {

                    $.ajax({
                        url: "ajax/celulares.ajax.php",
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

        $('#tablaCelulares tbody').on('click', '.btnEditar', function() {
            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            $('#idcelulares').val(data["idcelulares"]);
            $('#txtsku').val(data["sku"]);
            $('#txtresponsable').val(data["responsable"]);
            $('#txtresponsableAnt').val(data["responsableAnt"]); // Corrección aquí
            $('#txtdepartamento').val(data["departamento"]);
            $('#txtmarca').val(data["marca"]);
            $('#txtmodelo').val(data["modelo"]);
            $('#txtcolor').val(data["color"]);
            $('#txtram').val(data["ram"]);
            $('#txtalmacenamiento').val(data["almacenamiento"]);
            $('#txtimei').val(data["imei"]);
            $('#txtubicacion').val(data["ubicacion"]);
            $('#txtdetalles').val(data["detalles"]);
            $('#txtextras').val(data["extras"]);
            $('#txtempresa').val(data["empresa"]);
            $('#ddlEstado').val(data["estado"]);

            // Abre la ventana modal manualmente
            $('#modal-actualizar-Celulares').modal('show');
        });

        $('#modal-actualizar-Celulares').on('hidden.bs.modal', function() {
            $('#idcelulares').val("");
            $('#txtsku').val("");
            $('#txtresponsable').val("");
            $('#txtresponsableAnt').val("");
            $('#txtdepartamento').val("");
            $('#txtmarca').val("");
            $('#txtmodelo').val("");
            $('#txtcolor').val("");
            $('#txtram').val("");
            $('#txtalmacenamiento').val("");
            $('#txtimei').val("");
            $('#txtubicacion').val("");
            $('#txtdetalles').val("");
            $('#txtextras').val("");
            $('#txtempresa').val("");
            $('#ddlEstado').val([1]); // Ajusta el valor por defecto según necesites
        });




        /*   GUARDAR LA INFORMACION DE Celulares DESDE LA VENTANA    */

        $('#btnGuardar').on('click', function() {
            // Aquí deberías definir la variable datos

            var idcelulares = $('#idcelulares').val(),
                sku = $('#txtsku').val(),
                responsable = $('#txtresponsable').val(),
                responsableAnt = $('#txtresponsableAnt').val(),
                departamento = $('#txtdepartamento').val(),
                marca = $('#txtmarca').val(),
                modelo = $('#txtmodelo').val(),
                color = $('#txtcolor').val(),
                ram = $('#txtram').val(),
                almacenamiento = $('#txtalmacenamiento').val(),
                imei = $('#txtimei').val(),
                ubicacion = $('#txtubicacion').val(),
                detalles = $('#txtdetalles').val(),
                extras = $('#txtextras').val(),
                empresa = $('#txtempresa').val(),
                estado = $('#ddlEstado').val();

            var datos = new FormData();

            datos.append('idcelulares', idcelulares);
            datos.append('sku', sku);
            datos.append('responsable', responsable);
            datos.append('responsableAnt', responsableAnt);
            datos.append('departamento', departamento);
            datos.append('marca', marca);
            datos.append('modelo', modelo);
            datos.append('color', color);
            datos.append('ram', ram);
            datos.append('almacenamiento', almacenamiento);
            datos.append('imei', imei);
            datos.append('ubicacion', ubicacion);
            datos.append('detalles', detalles);
            datos.append('extras', extras);
            datos.append('empresa', empresa);
            datos.append('estado', estado);
            datos.append('accion', accion);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "Estás seguro que deseas registrar el celular?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, deseo registrar",
                cancelButtonText: "Cancelar",

            }).then(resultado => {
                if (resultado.value) {

                    $.ajax({
                        url: "ajax/celulares.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {

                            /* console.log(respuesta);  */

                            $("#modal-actualizar-Celulares").modal('hide');

                            table.ajax.reload(null, false);


                            $('#idcelulares').val(),
                                $('#txtsku').val(),
                                $('#txtresponsable').val(),
                                $('#txtresponsableAnt').val(),
                                $('#txtdepartamento').val(),
                                $('#txtmarca').val(),
                                $('#txtmodelo').val(),
                                $('#txtcolor').val(),
                                $('#txtram').val(),
                                $('#txtalmacenamiento').val(),
                                $('#txtimei').val(),
                                $('#txtubicacion').val(),
                                $('#txtdetalles').val(),
                                $('#txtextras').val(),
                                $('#txtempresa').val(),
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