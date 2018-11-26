<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
require "cfg/conexion.php";

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["nom"])) {
    $name = $_GET["nom"];
    $responsable = $_GET["res"];
    $telefono = $_GET["tel"];
    $email = $_GET["mail"];
    $ip = $_GET["ip"];
    $isdn = $_GET["isdn"];
    
    echo $isdn!=NULL;
    
    // Hay campos en blanco
    if($name!=NULL||$responsable!=NULL||$telefono!=NULL||$email!=NULL||$ip!=NULL||$isdn!=NULL) {
        
        $sql = "INSERT INTO SALA_REMOTA(nombre, responsable, telefono, email_responsable, ip, isdn) 
                VALUES ('$name','$responsable','$telefono','$email','$ip','$isdn')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    header("Location: listar.php");
}
?>