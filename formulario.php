<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include "libreria.php";
        if(isset($_POST["validar"]))
        {
            $error=valida();
            $checked="";
        }
    ?>
</head>
<body>
    <form action="" method="post">
         Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo (isset($_POST["nombre"])=="") ? "" : $_POST["nombre"]?>">
         <?php
            if(isset($_POST["validar"])){
              echo muestraError($error,"nombre"); 
            }
          ?>
          <br><br>

         Apellido 1: <input type="text" name="ap1" id="ap1" value="<?php echo (isset($_POST["ap1"])=="") ? "" : $_POST["ap1"]?>"> <br><br>
         <?php
            if(isset($_POST["validar"])){
              echo muestraError($error,"ap1"); 
            }
          ?>

         Apellido 2: <input type="text" name="ap2" id="ap2" value="<?php echo (isset($_POST["ap2"])=="") ? "" : $_POST["ap2"]?>">  <br><br>
         <?php
            if(isset($_POST["validar"])){
              echo muestraError($error,"ap2"); 
            }
          ?>

         Dni: <input type="text" name="dni" id="dni" value="<?php echo (isset($_POST["dni"])=="") ? "" : $_POST["dni"]?>">  <br> <br>
         <?php
            if(isset($_POST["validar"])){
              echo muestraError($error,"dni"); 
            }
          ?>

         Fecha de Nacimiento: <input type="text" name="fechanac" id="fechanac" 
         value="<?php echo (isset($_POST["fechanac"])=="") ? "" : $_POST["fechanac"]?>">  <br> <br>
         <?php
            if(isset($_POST["validar"])){
              echo muestraError($error,"fechanac"); 
            }
          ?>
          
         Correo: <input type="text" name="correo" id="correo" value="<?php echo (isset($_POST["correo"])=="") ? "" : $_POST["correo"]
          ?>"> <br> <br>
         <?php
            if(isset($_POST["validar"])){
              echo muestraError($error,"correo"); 
            }
          ?>
          
         Página web: <input type="text" name="url" id="url" value="<?php echo (isset($_POST["url"])=="") ? "" : $_POST["url"]
          ?>">
         <?php
            if(isset($_POST["validar"])){
              echo muestraError($error,"url"); 
            }
          ?>

         <p>Equipos de futbol:</p>
        <input type="checkbox" name="equipos[]" value="madrid" 
        <?php
              guardaValorCheck("madrid");
        ?> /> Real Madrid FC<br>

        <input type="checkbox" name="equipos[]" value="barsa" 
        <?php
              guardaValorCheck("barsa");
        ?>/> FC Barcelona<br> 

        <input type="checkbox" name="equipos[]" value="atletico" 
        <?php
              guardaValorCheck("atletico");
        ?>/> Atletico de Madrid<br><br>
         
         <input type="submit" id="validar" name="validar" value="Validar">
    </form>
    
</body>
</html>