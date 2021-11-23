<?php
    include('funciones.php');
    session_start();
    $vide1=$_SESSION['ide1'];
    $vnombre=$_POST['nombres'];
    $vapellidos=$_POST['apellidos'];
    $vdireccion=$_POST['direccion'];
    $vtelefono=$_POST['telefono'];

    $miconexion=conectar_bd('','sena_bd');
    $resultado=consulta($miconexion,"UPDATE aprendices SET 
    Apre_Nombres='{$vnombre}',
    Apre_Apellidos='{$vapellidos}',
    Apre_Direccion='{$vdireccion}',
    Apre_Telefono='{$vtelefono}'");
    if($miconexion->affected_rows>0){
        echo "Actualización exitosa";
    }
?>