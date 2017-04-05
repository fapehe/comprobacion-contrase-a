<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
    <body>
        
        <form onsubmit="return tamaño()"action="conexion.php">
                    
                <label> Usuario: </label><input type="text" name="usu" id="user" ><br>
                <label> contraseña: </label><input type="password" name="pass" id="password"><br>
                <input type="submit" value="confirmar" ><br>

            </form>
        
    </body>
</html>
