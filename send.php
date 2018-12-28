<?php
session_start();
require_once("core/init.php");
$Usr = $_SESSION['user'];
$Msg = $_POST['message'];
date_default_timezone_set("America/New_York");
$currentTime = date("d/m/Y h:m:s",time());
if(isset($Usr)&& isset($Msg)){
    $c = new Chat;
    $c->InsertMessage($Usr,$Msg,$currentTime);
echo "<p class='alert alert-success'>Successfully Send</p>";
}

?>