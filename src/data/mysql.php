<?
session_start();
include('utils/functions.php');

$host = "localhost";
$user = "root";
$pass = "";
$database = "kitchen";


$base = new mysqli($host, $user, $pass, $database);
$base->set_charset('utf8mb4');
