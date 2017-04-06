<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <script>
        function tamaño ()
        {
            var pass=document.getElementById('password');
            long=pass.value.length;
            if (long<7)
            {
                alert("la contraseña es demasiado corta")
                return 1;
            }
            else
            {
                return 0;
            }
        }
    
    </script>
    <style>
        .cuadro{
                background-color: yellow;
                font-size: 25px;
                
        }
        .letrero{
                font-size: 30px;
                position: relative;
                top: 200px;
                left: 400px;
        }
        #user{
                position: absolute;
                top: 200px;
                left: 550px;
        }
        #password{
                position: absolute;
                top: 250px;
                left: 550px;
        }
    </style>
    <body>
        
        <form onsubmit="return tamaño()"action="conexion.php">
                    
                <label class="letrero"> Usuario: </label><input type="text" name="usu" id="user" class="cuadro"><br>
                <label class="letrero"> contraseña: </label><input type="password" name="pass" id="password" class="cuadro"><br>
                <input type="submit" value="confirmar" onclick="tamaño()" class="letrero"><br>

            </form>
        
    </body>
</html>
