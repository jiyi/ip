<?php 
session_start();
if(!isset($_SESSION["user_name"])){
    echo"<script language='javascript'>top.location.href='login.php';</script>";
}
?>
