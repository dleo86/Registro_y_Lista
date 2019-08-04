<?php

function Insertar($id,$email,$apellido,$nombre,$area,$obs){
    $id++;
    $fecha = date("d-m-Y H:i:s");
    $SQL = "INSERT INTO incidencias (id,email,nombre,apellido,area,observaciones,fecha,estado) VALUES ('{$id}','{$email}','{$nombre}','{$apellido}','{$area}','{$obs}','{$fecha}', 1)"; 
             
    $linkConexion=ConexionBD();
    if (!mysqli_query($linkConexion, $SQL)){
        return false;
    }else {
        return true;
    }
}

function lista(){
	$Listado=array();
    $MiConexion=ConexionBD();
    //si todo es correcto...
    if ($MiConexion!=false){
        //le paso la consulta que necesito
        $SQL = "SELECT id,email,nombre,apellido,area,observaciones,fecha,estado FROM incidencias";
        //genera el conjunto de registros que devuelve la consulta
        $rs = mysqli_query($MiConexion, $SQL);
        $i=0;  //armo el listado para devolverlo y usarlo en el otro script
        while ($data = mysqli_fetch_array($rs)) {
            $Listado[$i]['id'] = $data['id'];
            $Listado[$i]['email'] = $data['email'];
            $Listado[$i]['nombre'] = $data['nombre'];
            $Listado[$i]['apellido'] = $data['apellido'];
            $Listado[$i]['area'] = $data['area'];
            $Listado[$i]['observaciones'] = $data['observaciones'];
            $Listado[$i]['fecha'] = $data['fecha'];
            $Listado[$i]['estado'] = $data['estado'];
            $i++;
        }
    }
    return $Listado;
}

function ControlesValidos(){
    $MensajeError='';
    //voy concatenando los mensajes de error a medida q van saliendo
    $_POST['nombre']=trim($_POST['nombre']); //limpio espacios al Nombre
    if (strlen($_POST['nombre'])<3){
        $MensajeError.='Debe ingresar el nombre <br />';
    }
    $_POST['apellido']=trim($_POST['apellido']); //limpio espacios al Apellido
    if (strlen($_POST['apellido'])<3){
        $MensajeError.='Debe ingresar el apellido <br />';
    }

    $_POST['email']=trim($_POST['email']); //limpio espacios al email
    if (strlen($_POST['email'])<3){
        $MensajeError.='Debe ingresar el email <br />';
    }
    $_POST['obs']=trim($_POST['obs']); //limpio espacios al obs
    if (strlen($_POST['obs'])<3){
        $MensajeError.='Debe ingresar la obs <br />';
    }
   // echo "entro a ControlesValidos";
    return $MensajeError;
}

?>