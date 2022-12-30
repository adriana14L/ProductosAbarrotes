<?php
 include "../conexion.php";
 $conn->select_db("miscelanea");
 $codigoBarras = $_POST['codigoBarras'];

//print "codigo a buscar " . $codigoBarras;

 $sql = "SELECT codigoB,ruta FROM imgProduc WHERE codigoB= '$codigoBarras'";
$datosProductos = "SELECT productos.codigoBarras, productos.nombre, productos.precioVenta, imgproduc.codigoB
from productos
inner join imgproduc
on productos.codigoBarras = imgproduc.codigoB WHERE codigoB='$codigoBarras'";



 // $sql = "SELECT ruta FROM imgProduc WHERE codigoB== '$codigoBarras'";
 if (!$resultado = $conn->query($sql)) {
    echo ('no se logro obtener datos con esta consulta');
   
}
if (!$resultadoPro = $conn->query($datosProductos)) {
    echo ('no se logro obtener datos con esta consulta');
    
    

}
////////////////////////////////comprobar
$query = "SELECT * FROM imgProduc WHERE codigoB = '$codigoBarras'";

if (mysqli_num_rows($resultadoPro)>0)
{

         $fila = $resultado->fetch_row();
 $filaPro = $resultadoPro->fetch_row();
    $registro = $resultado->num_rows;
    $registroPro = $resultadoPro->num_rows;
    $_SESSION['ruta'] = $fila[1];
    //echo "registro " . $registro;
    //almacenamos el valor del campo foto en una variable
    $codigoB = $filaPro[0];
    $nombreP = $filaPro[1];
    $precioP = $filaPro[2];
   $ruta_img = $fila[1];
} else {
    
    echo '<script language="javascript">alert("No Existen registros");window.location.href="../consultarImagenProd.php";</script>';

    die();

}


    
   


/////////////////////////////////fin 
 //$resultado = mysqli_query($conn, $sql);//tenemos en el array resultado lo que hemos pedido
//echo "Esta es la ruta bd " . $resultado[2];
 //ahora debemos recorrer el array
 //$datos = $resultado->fetch_row();

    //visualizamos la imagen
    //echo "codigo " . $codigoB;

?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:wght@100;300;500&family=Rubik+80s+Fade&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Serif+Display:wght@100&family=Rubik+80s+Fade&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/leerimg.css">
   
    <!--Iconos de bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Visualizar Imagen-Producto</title>
<!-- CSS only -->

<body style="padding-top:80px;">
    <div class="container col-lg-6 col-lg-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: black;">
                <div class="panel-title">
                    <h1>Producto</h1>
                </div>
            </div>
            <div class="panel-body">
            <label for="codigo" class="form-label">Código de barras:  </label>
            <label for="codigo" class="infP"> <?php echo $codigoB;?> </label>
            <br>
            
            <!--<label for="codigo" class="form-label">Nombre del Producto:  </label>-->
            <label for="codigo" class="infP"> <?php echo $nombreP;?> </label>
            <br>
            
            <label for="codigo" class="form-label precio">Precio:  </label>
            <label for="codigo" class="infP precio"> <?php echo '$'.$precioP;?> </label>
            <hr>
            

            <div class="imgP">
                <img src="/MISCELANEA VENEGASWEB/<?php echo $ruta_img;?>" alt="Imagen del rpimer articulo"
                    width="70%" />
                   

            </div>
             <br>
                <div class="regresar" >
                <button onclick="window.location.href='../consultarImagenProd.php'" type="button" class="btn btn-outline-primary btn-lg"><i class="bi bi-arrow-left"></i>Regresar</button>
                <!--Para regresar  a la ventana anterior-->
               
                </div>
                
            </div>

        </div>
    </div>
</body>
