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
    $id = $_GET["id"];
    
    
    
    
    // Hay campos en blanco
    if($name!=NULL|$responsable!=NULL|$telefono!=NULL|$email1=NULL|$ip!=NULL|$isdn!=NULL) {
        $sql = "UPDATE SALA_REMOTA SET nombre='$name', responsable='$responsable', telefono='$telefono', email_responsable='$email', ip='$ip', isdn='$isdn'
        WHERE id_sala_remota=$id";

        echo $sql;

        if ($conn->query($sql) === TRUE) {
        echo "Update succefull";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    header('Location: listar.php');
}
?>