<?php

$enlace = mysqli_connect('localhost', 'root', 'fapehesql2017', 'usuarios', 3305);

$user = $_REQUEST['usu'];
$contraseña = $_REQUEST['pass'];

$consulta="SELECT * FROM usuarios.usuario WHERE idusuario='$user' and contraseña='$contraseña';";

$resultado=mysqli_query($enlace, $consulta);

if(mysqli_num_rows($resultado)>0){
    echo "ingreso!!!";
}else{
    echo "error!!!"; 
}
