<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">
    <title>Visualizar Imagen-Producto</title>
</head>

<body style="padding-top:80px;">


    <div class="container col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: blueviolet;">
                <div class="panel-title">
                    <h1>Buscar producto por código</h1>
                </div>
            </div>
            <div class="panel-body">
                <form action="php/leerimg.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="codigo" class="form-label">Ingresa el Código de Barras</label>
                        <input type="number" class="form-control" name="codigoBarras">
                        <small class="form-text text-muted">Código de barras unico.</small>
                    </div>

                    <div class="form-group">

                        <input type="submit" name="buscarCod" class="btn btn-primary">

                    </div>

                </form>




            </div>
        </div>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.2.min.js"></script>
</body>

</html>