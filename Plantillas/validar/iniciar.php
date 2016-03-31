<?php

        require '../../Clases/CRUD.php';
        $codigo=$_POST['codigo'];
        $clave=$_POST['clave'];
        $columnas="*";
        $tabla="estudiante";
        $where="codigo=".$codigo." and clave="."$clave";
        $userBd=new CRUD();
        $userBd->conectar();
        $recibo=$userBd->consultar($columnas,$tabla,$where);
        var_dump($recibo);
        if(!is_null($recibo)){
           header('Location:../index.php'); }
        else{
           echo "Clave Incorrecta sr Usuario";}   
                            

