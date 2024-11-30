<?php

include "db.php";

session_start();

session_unset();

session_destroy();

echo "<script>";
// echo "alert('Login Successfully');";
echo "window.location.href='../../admin_panel.php'";
echo "</script>";

?>

