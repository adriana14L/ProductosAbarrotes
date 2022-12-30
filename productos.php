<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>



<body style="padding-top:80px;">
    <div class="container col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: blueviolet;">
                <div class="panel-title">
                    <h1>Guardar imagen</h1>
                </div>
            </div>
            <div class="panel-body">
                <form action="php/BDimagenes.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">

                        <input class="form-control" type="file" name="imagen">
                    </div>

                    <div class="form-group">
                        <label for="formFile" class="form-label">Ingresa el Código de Barras</label>
                        <input type="text"  class="form-control" name="codigoBarras">
                        
                    </div>
                    <br>
                    <div class="form-floating">
                   <!-- <input type="submit"  name="save" class="btn btn-primary">-->
                    <button type="submit"   name="save" class="btn btn-primary">Guardar</button>
                    </div>

                </form>
                <br>


            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/jquery-3.6.2.min.js"></script>
</body>

</html>