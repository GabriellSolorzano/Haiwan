<?php

unset($_SESSION['usuario']);
session_unset();
session_destroy();
$parametros_cookies = session_get_cookie_params(); 
setcookie(session_name(),0,1,$parametros_cookies["path"]);

echo "<meta http-equiv='refresh' content='0;'/>";
header('location:../Vista/index.php');

    header("location:../Vista/index.php?mensaje=$msj");

exit;?>