<!-- CONTENT-HEADER -->
<section class="content-header">

    <div class="container-fluid">

        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>Administrar Equipos</h1>
            </div>

            <div class="col-sm-6">

                <!--                 <ol class="breakcrumb float-sm-right">

                    <li class="breakcrumb-item"><a href="index,php">Inicio</a></li>

                    <li class="breakcrumb-item active">Gestor Equipos</li>

                </ol> -->
            </div>
        </div>
    </div>

</section>
<!-- END CONTENT-HEADER -->

<!-- CONTENT -->

<section class="content">

    <div class="container-fluid">

        <div class="btn-agregar-Equipos btnAgregar">
            <button type="button" class="btn btn-info btn-sm mb-4" data-toggle="modal" data-target="#modal-actualizar-Equipos" data-dismiss="modal">
                <i class="fas fa-plus-square"> Agregar Equipos</i>
            </button>
        </div>

        <table id="tablaEquipos" class="table table-striped table-bordered nowrap" style="width:100%;">
            <thead class="btn-info">
                <tr>
                    <td>Id</td>
                    <td>Departamento</td>
                    <td>Responsable</td>
                    <td>Responsable Ant.</td>
                    <td>Sku</td>
                    <td>Equipo</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Color</td>
                    <td>SO</td>
                    <td>Arquitectura</td>
                    <td>Procesador</td>
                    <td>RAM</td>
                    <td>Almacenamiento</td>
                    <td>Dispositivo</td>
                    <td>Producto</td>
                    <td>Ubicación</td>
                    <td>Detalles</td>
                    <td>Aditamentos</td>
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

<div class="modal fade" id="modal-actualizar-Equipos">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <!-- MODAL HEADER -->

            <div class="modal-header">
                <h4 class="modal-title big-info">Gestionar Equipos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- MODAL BODY -->
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="hidden" id="idequipos" name="idequipos" value="">
                            <label for="txtdepartamento">Departamento</label>
                            <input type="text" class="form-control" name="departamento" id="txtdepartamento" placeholder="Ingrese la categoria">
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
                            <label for="txtsku">Sku</label>
                            <input type="text" class="form-control" name="sku" id="txtsku" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtequipo">Equipo</label>
                            <input type="text" class="form-control" name="equipo" id="txtequipo" placeholder="Ingrese la ruta">
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
                            <label for="txtso">SO</label>
                            <input type="text" class="form-control" name="so" id="txtso" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtarquitectura">Arquitectura</label>
                            <input type="text" class="form-control" name="arquitectura" id="txtarquitectura" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtprocesador">Procesador</label>
                            <input type="text" class="form-control" name="procesador" id="txtprocesador" placeholder="Ingrese la ruta">
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
                            <label for="txtdispositivo">Dispositivo</label>
                            <input type="text" class="form-control" name="dispositivo" id="txtdispositivo" placeholder="Ingrese la ruta">
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="txtproducto">Producto</label>
                            <input type="text" class="form-control" name="producto" id="txtproducto" placeholder="Ingrese la ruta">
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
                            <label for="txtaditamentos">Aditamentos</label>
                            <input type="text" class="form-control" name="aditamentos" id="txtaditamentos" placeholder="Ingrese la ruta">
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

        var table = $("#tablaEquipos").DataTable({
            "ajax": {
                "url": "ajax/equipos.ajax.php",
                "type": "POST",
                "dataSrc": ""
            },
            "columnDefs": [{
                    "targets": 20,
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
                    "targets": 21,
                    "sortable": false,
                    "render": function(data, type, full, meta) {
                        return "<center><button type='button' class='btn btn-primary btn-sm btnEditar' data-toggle='modal' data-target='#modal-actualizar-Impresoras'> <i class='fas fa-pencil-alt'></i> </button>" +
                            "<button type='button' class='btn btn-danger btn-sm btnEliminar'> <i class='fas fa-trash'></i> </button></center>";
                    }
                }
            ],
            "columns": [{
                    "data": "idequipos"
                },
                {
                    "data": "departamento"
                },
                {
                    "data": "responsable"
                },
                {
                    "data": "responsableAnt"
                },
                {
                    "data": "sku"
                },
                {
                    "data": "equipo"
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
                    "data": "so"
                },
                {
                    "data": "arquitectura"
                },
                {
                    "data": "procesador"
                },
                {
                    "data": "ram"
                },
                {
                    "data": "almacenamiento"
                },
                {
                    "data": "dispositivo"
                },
                {
                    "data": "producto"
                },
                {
                    "data": "ubicacion"
                },
                {
                    "data": "detalles"
                },
                {
                    "data": "aditamentos"
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

        $('.btn-agregar-Equipos').on('click', function() {
            accion = "registrar";
        });

        $('#tablaEquipos tbody').on('click', '.btnEliminar', function() {
            var data = table.row($(this).parents('tr')).data();

            var idequipos = data["idequipos"];

            var datos = new FormData();
            datos.append('accion', 'eliminar');
            datos.append('idequipos', idequipos);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "Estás seguro que deseas eliminar el equipo?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, eliminar",
                cancelButtonText: "Cancelar",

            }).then(resultado => {

                if (resultado.value) {

                    $.ajax({
                        url: "ajax/equipos.ajax.php",
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

        $('#tablaEquipos tbody').on('click', '.btnEditar', function() {
            var data = table.row($(this).parents('tr')).data();
            accion = "actualizar";

            $('#idequipos').val(data["idequipos"]);
            $('#txtdepartamento').val(data["departamento"]);
            $('#txtresponsable').val(data["responsable"]);
            $('#txtresponsableAnt').val(data["responsableAnt"]); // Corrección aquí
            $('#txtsku').val(data["sku"]);
            $('#txtequipo').val(data["equipo"]);
            $('#txtmarca').val(data["marca"]);
            $('#txtmodelo').val(data["modelo"]);
            $('#txtcolor').val(data["color"]);
            $('#txtso').val(data["so"]);
            $('#txtarquitectura').val(data["arquitectura"]);
            $('#txtprocesador').val(data["procesador"]);
            $('#txtram').val(data["ram"]);
            $('#txtalmacenamiento').val(data["almacenamiento"]);
            $('#txtdispositivo').val(data["dispositivo"]);
            $('#txtproducto').val(data["producto"]);
            $('#txtubicacion').val(data["ubicacion"]);
            $('#txtdetalles').val(data["detalles"]);
            $('#txtaditamentos').val(data["aditamentos"]);
            $('#txtempresa').val(data["empresa"]);
            $('#ddlEstado').val(data["estado"]);

            // Abre la ventana modal manualmente
            $('#modal-actualizar-Equipos').modal('show');
        });

        $('#modal-actualizar-Equipos').on('hidden.bs.modal', function() {
            $('#idequipos').val("");
            $('#txtdepartamento').val("");
            $('#txtresponsable').val("");
            $('#txtresponsableAnt').val("");
            $('#txtsku').val("");
            $('#txtequipo').val("");
            $('#txtmarca').val("");
            $('#txtmodelo').val("");
            $('#txtcolor').val("");
            $('#txtso').val("");
            $('#txtarquitectura').val("");
            $('#txtprocesador').val("");
            $('#txtram').val("");
            $('#txtalmacenamiento').val("");
            $('#txtdispositivo').val("");
            $('#txtproducto').val("");
            $('#txtubicacion').val("");
            $('#txtdetalles').val("");
            $('#txtaditamentos').val("");
            $('#txtempresa').val("");
            $('#ddlEstado').val([1]); // Ajusta el valor por defecto según necesites
        });



        /*   GUARDAR LA INFORMACION DE Celulares DESDE LA VENTANA    */

        $('#btnGuardar').on('click', function() {
            // Aquí deberías definir la variable datos

            var idequipos = $('#idequipos').val(),
                departamento = $('#txtdepartamento').val(),
                responsable = $('#txtresponsable').val(),
                responsableAnt = $('#txtresponsableAnt').val(),
                sku = $('#txtsku').val(),
                equipo = $('#txtequipo').val(),
                marca = $('#txtmarca').val(),
                modelo = $('#txtmodelo').val(),
                color = $('#txtcolor').val(),
                so = $('#txtso').val(),
                arquitectura = $('#txtarquitectura').val(),
                procesador = $('#txtprocesador').val(),
                ram = $('#txtram').val(),
                almacenamiento = $('#txtalmacenamiento').val(),
                dispositivo = $('#txtdispositivo').val(),
                producto = $('#txtproducto').val(),
                ubicacion = $('#txtubicacion').val(),
                detalles = $('#txtdetalles').val(),
                aditamentos = $('#txtaditamentos').val(),
                empresa = $('#txtempresa').val(),
                estado = $('#ddlEstado').val();

            var datos = new FormData();

            datos.append('idequipos', idequipos);
            datos.append('departamento', departamento);
            datos.append('responsable', responsable);
            datos.append('responsableAnt', responsableAnt);
            datos.append('sku', sku);
            datos.append('equipo', equipo);
            datos.append('marca', marca);
            datos.append('modelo', modelo);
            datos.append('color', color);
            datos.append('so', so);
            datos.append('arquitectura', arquitectura);
            datos.append('procesador', procesador);
            datos.append('ram', ram);
            datos.append('almacenamiento', almacenamiento);
            datos.append('dispositivo', dispositivo);
            datos.append('producto', producto);
            datos.append('ubicacion', ubicacion);
            datos.append('detalles', detalles);
            datos.append('aditamentos', aditamentos);
            datos.append('empresa', empresa);
            datos.append('estado', estado);
            datos.append('accion', accion);

            swal.fire({
                title: "¡CONFIRMAR!",
                text: "Estás seguro que deseas registrar el equipo?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Si, deseo registrar",
                cancelButtonText: "Cancelar",

            }).then(resultado => {
                if (resultado.value) {

                    $.ajax({
                        url: "ajax/equipos.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(respuesta) {

                            /* console.log(respuesta);  */

                            $("#modal-actualizar-Equipos").modal('hide');

                            table.ajax.reload(null, false);


                            $('#idequipos').val(),
                                $('#txtdepartamento').val(),
                                $('#txtresponsable').val(),
                                $('#txtresponsableAnt').val(),
                                $('#txtsku').val(),
                                $('#txtequipo').val(),
                                $('#txtmarca').val(),
                                $('#txtmodelo').val(),
                                $('#txtcolor').val(),
                                $('#txtso').val(),
                                $('#txtarquitectura').val(),
                                $('#txtprocesador').val(),
                                $('#txtram').val(),
                                $('#txtalmacenamiento').val(),
                                $('#txtdispositivo').val(),
                                $('#txtproducto').val(),
                                $('#txtubicacion').val(),
                                $('#txtdetalles').val(),
                                $('#txtaditamentos').val(),
                                $('#txtempresa').val(),
                                $('#ddlEstado').val('1');

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