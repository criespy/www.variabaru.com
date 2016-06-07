<?php
session_start();
if($_SESSION['varia_admin_']!=1){
    header("location:index.php");
}
?>