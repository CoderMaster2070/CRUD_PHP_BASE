<?php

require_once "conexionBD.php";

class EmpleadosM extends ConexionBD{

    //registrar empleados

    static public function RegistrarEmpleadosM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD(nombre, apellido, email, puesto, salario)VALUES(:nombre, :apellido, :email, :puesto, :salario)");
    
        $pdo -> bindParam(":nombre",$datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido",$datosC["apellido"], PDO::PARAM_STR);
        $pdo -> bindParam(":email",$datosC["email"], PDO::PARAM_STR);
        $pdo -> bindParam(":puesto",$datosC["puesto"], PDO::PARAM_STR);
        $pdo -> bindParam(":salario",$datosC["salario"], PDO::PARAM_STR);

        if($pdo -> execute()){

            return "Ok";

        }else{

            return "Error";

        }

        $pdo -> close();

    }



//mostrar empleados

static public function MostrarEmpleadosM($tablaBD){

    $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido, email, puesto, salario FROM $tablaBD");

    $pdo -> execute();

    return $pdo -> fetchAll();

    $pdo -> close();

}
// editar empleados

    static public function EditarEmpleadoM($datosC, $tablaBD){
    
        $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido, email, puesto, salario FROM $tablaBD WHERE id= :id");
    
        $pdo ->bindParam(":id", $datosC, PDO::PARAM_INT);
    
        $pdo ->execute();
    
        return $pdo->fetch();
    
        $pdo = close();
    
    
    
    }

    //actualizar empleados

    static public function ActualizarEmpleadoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET nombre = :nombre, apellido = :apellido, email = :email, puesto = :puesto, salario = :salario WHERE id= :id" );

        $pdo ->bindParam(":id", $datosC["id"],PDO::PARAM_INT);
        $pdo ->bindParam(":nombre", $datosC["nombre"],PDO::PARAM_STR);
        $pdo ->bindParam(":apellido", $datosC["apellido"],PDO::PARAM_STR);
        $pdo ->bindParam(":email", $datosC["email"],PDO::PARAM_STR);
        $pdo ->bindParam(":puesto", $datosC["puesto"],PDO::PARAM_STR);
        $pdo ->bindParam(":salario", $datosC["salario"],PDO::PARAM_STR);

        if($pdo -> execute()){

            return "Ok";

        }else{

            return "Error";

        }

        $pdo -> close();



    }
    // Borrar empleados

    static public function BorrarEmpleadoM($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()-> prepare("DELETE FROM  $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

        if($pdo -> execute()){

            return "Ok";

        }else{

            return "Error";

        }

        $pdo -> close();
    }

}

?>