<?php
session_start();
$_SESSION['name'] = $_POST['inputLogin'];
header('Location: index.php');