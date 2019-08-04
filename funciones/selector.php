<?php

function Listar(){
    $Listado=array();
    //me conecto
    $MiConexion=ConexionBD();
    //si todo es correcto...
    if ($MiConexion!=false){
        //le paso la consulta que necesito
        $SQL = "SELECT id, denominacion FROM areas WHERE visible = 1 ORDER BY denominacion ASC";
        //genera el conjunto de registros que devuelve la consulta
        $rs = mysqli_query($MiConexion, $SQL);
        $i=0;  //armo el listado para devolverlo y usarlo en el otro script
        while ($data = mysqli_fetch_array($rs)) {
            $Listado[$i]['id'] = $data['id'];
            $Listado[$i]['denominacion'] = $data['denominacion'];
            $i++;
        }
    }
    return $Listado;
}
    
function Listar2(){
    $Listado=array();
    //me conecto
    $MiConexion=ConexionBD();
    //si todo es correcto...
    if ($MiConexion!=false){
        //le paso la consulta que necesito
        $SQL = "SELECT id, denominacion FROM areas ORDER BY denominacion ASC";
        //genera el conjunto de registros que devuelve la consulta
        $rs = mysqli_query($MiConexion, $SQL);
        $i=0;  //armo el listado para devolverlo y usarlo en el otro script
        while ($data = mysqli_fetch_array($rs)) {
            $Listado[$i]['id'] = $data['id'];
            $Listado[$i]['denominacion'] = $data['denominacion'];
            $i++;
        }
    }
    return $Listado;
}

    function Obtener_id(){
        $Listado=array();
        //me conecto
        $MiConexion=ConexionBD();
        //si todo es correcto...
        if ($MiConexion!=false){
          //le paso la consulta que necesito
           $SQL = "SELECT id FROM incidencias ORDER BY id ASC";
           //genera el conjunto de registros que devuelve la consulta
           $rs = mysqli_query($MiConexion, $SQL);
           $i=0;  //armo el listado para devolverlo y usarlo en el otro script
           while ($data = mysqli_fetch_array($rs)) {
              $Listado[$i]['id'] = $data['id'];
             // $Listado[$i]['denominacion'] = $data['denominacion'];
              $i++;
           }
        }
    return $Listado;
   }


?>