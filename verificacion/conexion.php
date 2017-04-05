<?php

$enlace = mysqli_connect('localhost', 'root', 'mysql2017', 'usuarios', 3306);

$consulta="SELECT * FROM usuarios.usuario WHERE idusuario=".$_REQUEST['usu']." and contraseña=".$_REQUEST['pass'].";";

$resultado=mysqli_query($enlace, $consulta);

if (mysqli_num_rows($resultado)==true)
{
    echo "ingreso";
}
else
{
    echo"paila";
}
