<?php
session_name("ACADMY");
session_start();
if ((!isset($_SESSION['EMAIL']))) {
    $_SESSION["REDIRECIONA"]=$_SERVER['PHP_SELF'];
    session_write_close();
    header("location:".$raiz."login.php");
    exit;
}else  {
    session_write_close();
}

