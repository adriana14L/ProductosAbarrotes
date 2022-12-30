<?php
include "conexion.php";
session_start();


        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

if (empty($usuario)) {
    echo '<script language="javascript">alert("poner un usuario");</script>'; //un mensaje de que hace falta el ususario
    echo '<script language="javascript">
                 window.location=window.location="index.html";
				</script>';
} elseif (empty($password)) {
    echo '<script language="javascript">alert("poner una contrasena");</script>';
    echo '<script language="javascript">
                 window.location=window.location="index.html";
				</script>';

} else {
   
    //echo "usuario2 " . $usuario;
//echo "  contraseña2 " . $password;

    $conn->select_db("miscelanea");
    
    //$query = "SELECT *FROM usuarios WHERE nombre = " . $usuario . " AND contraseña = " . $password . "";
    $query = "SELECT * FROM usuarios WHERE nombre = '" . $usuario . "' AND contraseña = '" . $password . "'";
   
    if (!$resultado = $conn->query($query)) {
        echo ('no se logro obtener datos con esta consulta');
        die();
        

    }
   
    $datos = $resultado->fetch_row();
    $registro = $resultado->num_rows;
    $_SESSION['nombre'] = $datos[1];
 

    if ($registro == 0) {
        echo 'usuario y/o contraseña incorrecta';
        echo '<script language="javascript">
        window.location=window.location="login.html";
          </script>';

    } else {
        echo "usuario base " . $datos[1];
        if($datos[1]==$usuario){
          //  echo $datos[1] . ' usu';
           echo '<script language="javascript">
				  window.location=window.location="principal.html";
					</script>';  
        }else{
        
          echo '<script language="javascript">alert("usuario y/o contraseña incorrecta");window.location.href="login.html";</script>';

        }

       
    }

}
?>
