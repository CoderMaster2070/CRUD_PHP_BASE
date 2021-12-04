<?php

require_once "conexionBD.php";

class AdminM extends ConexionBD{

    static public function IngresoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave FROM $tablaBD WHERE usuario = :usuario");

        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

        $pdo -> execute();

        return $pdo->fetch();

        $pdo -> close();
    }
}
?>