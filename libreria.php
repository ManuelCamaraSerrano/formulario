<?php


 function valida(){
    $patronfecha="/^(0[1-9]|[1-2]\d|3[0-1])[\/](0[1-9]|1[0-2])[\/](\d{4})/";
    $patronDni="/^(\d{8})([TRWAGMYFPDXBNJZSQVHLCKE])$/";
    $patronCorreo="/^.+(\@gmail\.)(es|com)$/";
    $patronUrl="/(http:\/|https:\/)(\/.+)+/i";
    $errores=[];
    if($_POST["nombre"]=="")
    {
        $errores["nombre"]="Error, No ha introducido nada";
    }
    if($_POST["ap1"]=="")
    {
        $errores["ap1"]="Error, No ha introducido nada";
    }
    if($_POST["ap2"]=="")
    {
        $errores["ap2"]="Error, No ha introducido nada";
    }
    if($_POST["fechanac"]=="")
    {
        $errores["fechanac"]="Error, No ha introducido nada";
    }
    elseif(!preg_match($patronfecha,$_POST["fechanac"]))
    {
        $errores["fechanac"]="Error, La fecha introducida es incorrecta";
    }
    if($_POST["dni"]=="")
    {
        $errores["dni"]="Error, No ha introducido nada";
    }
    elseif(!preg_match($patronDni,$_POST["dni"]))
    {
        $errores["dni"]="Error, El dni introducido es incorrecto";
    }
    if($_POST["correo"]=="")
    {
        $errores["correo"]="Error, No ha introducido nada";
    }
    elseif(!preg_match($patronCorreo,$_POST["correo"]))
    {
        $errores["correo"]="Error, El correo introducido no es correcto";
    }
    if($_POST["url"]=="")
    {
        $errores["url"]="Error, No ha introducido nada";
    }
    elseif(!preg_match($patronUrl,$_POST["url"]))
    {
        $errores["url"]="Error, La url introducida no es correcta";
    }

    return $errores;
 }


 function muestraError($error,$a)  // 1º parametro vector de errores, 2º parametro string nombre del textfield
 {   
    $cadena="";
    if (isset($_POST['validar']) && isset($error[$a])){
       $cadena= "<p style=\"color:red\">".$error[$a]."</p>";
   }
   return $cadena;
 }

function guardaValorCheck($a)
{
    if(isset($_POST['equipos']) && in_array($a,$_POST['equipos'])){
        echo 'checked="checked"';
    }
}