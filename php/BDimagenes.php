<?php
require("../conexion.php");

//$_FILES ALMACENA EL ARREGLO DE MLA IMAGEN QUE ESTAMOS MANDANDO 
$nombre_imagen = $_FILES['imagen']['name'];
$tipo_imagen = $_FILES['imagen']['type'];
$tamagno_imagen = $_FILES['imagen']['size'];
$codigoBarras = $_POST['codigoBarras'];
//echo $_FILES['imagen']['size'];//para obtener el tamño de la imagen
echo $tipo_imagen; //para que me indioque el tipo de archivo
if ($tamagno_imagen <= 30000000) {
   if ($tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/png" || $tipo_imagen == "image/gif") {


      //ruta de la carptea destino del servidor
      $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/MISCELANEA VENEGASWEB/imagenesProductos/';
      //mueve la imagen de la ruta temporal a donde se guardara el archivo
      move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino . $nombre_imagen);
   }else{
      
    echo '<script language="javascript">alert("Formato no permitido");window.location.href="../productos.php";</script>';

   }

} else {
   
   echo '<script language="javascript">alert("El tamaño es demasiado grande");window.location.href="../productos.php";</script>';

}

$conn->select_db("miscelanea");


$ruta = "imagenesProductos/".$nombre_imagen;
//$sql = "INSERT INTO imgproduc (ruta) VALUES ('$ruta')";
print "rutaa " . $ruta;

$sql = "INSERT INTO imgproduc ( codigoB , ruta) VALUES ('$codigoBarras','$ruta')";
//INSERT INTO imgproduc ( codigoB , ruta) VALUES ('1234','imagenesProductos/Captura de pantalla7');
$resultado = mysqli_query($conn, $sql);
echo '<script language="javascript">
window.location=window.location="../productos.php";
</script>';




 ?>




