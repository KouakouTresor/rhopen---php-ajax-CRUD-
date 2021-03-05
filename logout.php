<?php
session_start();
unset($_POST["username"]);
header("location:index.php");
