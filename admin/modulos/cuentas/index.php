<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuentas Arsol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/43625fde10.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<header class="col-Header">
    <div class="col-Header-Left">
        <a href="../../index.php" class="col-Button-Link">
            <img src="imgs/grupoArsol.png" alt="Logo">
        </a>
        <!-- <p id="col-Bienvenida-header"> Bienvenida <b>Marta Caballero</b></p> -->
    </div>
    <div class="col-Header-Center">
        <h1>CUENTAS</h1>
    </div>
</header>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("¿Seguro que quiere eliminar este dato?");
            return respuesta
        }
    </script>

    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Cuenta</h3>
            <?php 
            include "Modelo/conexion.php";
            include "Controlador/registro_cuenta.php";
            ?>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nombre del colaborador</label>
                <input type="text" class="form-control" name="nombre">
                </div>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Apellido del colaborador</label>
                <input type="text" class="form-control" name="apellido">
                </div>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
                </div>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="contraseña">
                </div>
                <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Tipo de cuenta</label>
                <input type="text" class="form-control" name="tipo">
                </div>
                
                <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>
        <div  class="col-8 p-4">
            <?php
            include "controlador/eliminar_cuenta.php";
            ?>

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid ">
                        <form class="d-flex w-100" role="search" onsubmit="event.preventDefault(); buscar();">
                            <input class="form-control me-1" type="search" id="buscador" placeholder="Buscar" aria-label="Buscar" oninput="buscar()">
                            <button class="btn btn-primary" type="submit">Buscar</button>
                        </form>
                    </div>
            </nav>
                

            <script>
                function buscar() {
                    const input = document.getElementById('buscador');
                    const filter = input.value.toLowerCase();
                    const table = document.getElementById('dataTable');
                    const rows = table.getElementsByTagName('tr');

                    for (let i = 1; i < rows.length; i++){
                        const cells = rows[i].getElementsByTagName('td');
                        let found = false;

                        for (let j = 0; j < cells.length; j++) {
                            if (cells[j].innerText.toLowerCase().includes(filter)) {
                                found = true;
                                break;
                            }
                        }

                        rows[i].style.display = found ? '' : 'none';
                    } 
                }    
            </script>
            <div class="table-container">
                <table class="table" id="dataTable">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Tipo de cuenta</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query(" select * from cuenta");
                        while($datos=$sql->fetch_object()){ ?>

                            <tr>
                                <td><?= $datos->id_cuenta ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->correo ?></td>
                                <td><?= $datos->contraseña ?></td>
                                <td><?= $datos->tipo ?></td>
                                <td>
                                    <a href="modificar.php?id_cuenta=<?= $datos->id_cuenta ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a onclick="return eliminar()" href="index.php?id_cuenta=<?= $datos->id_cuenta ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                            
                        <?php } 
                        ?>
                    </tbody>
                </table>
            </div>    
        </div>    
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>