<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <div class="continer">
        <div class="row">
            <div class="col-md-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
                    Nuevo Cliente
                </button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-responsive table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Cedula</th>
                <th>Correo</th>
                <th>Acciones</th>
                
            </tr>
        </thead>
        <tbody id="cuerpoCliente"></tbody>
    </table>

    <!--Modal-->


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="frm_clientes">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nombres</label>
                            <input type="text" class="form-control" name="Nombres" id="Nombres">
                        </div>

                        <div class="form-group">
                            <label for="">Direccion</label>
                            <input type="text" class="form-control" name="Direccion" id="Direccion">
                        </div>

                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="text" class="form-control" name="Telefono" id="Telefono">
                        </div>

                        <div class="form-group">
                            <label for="">Cedula</label>
                            <input type="text" class="form-control" name="Cedula" id="Cedula">
                        </div>
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input type="text" class="form-control" name="Correo" id="Correo">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>









</body>

<script src="./clientes.js"></script>
</html>