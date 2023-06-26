<?
include('utils/functions.php');
include('categories_children/functions.php');
include('categories_parents/functions.php');
include('cities/functions.php');
include('product_categories_match/functions.php');
include('products/functions.php');
include('departments/functions.php');
include('text/functions.php');

$host = "localhost";
$user = "root";
$pass = "";
$database = "kitchen";


$base = new mysqli($host, $user, $pass, $database);
$base->set_charset('utf8mb4');

$DOMAIN = "https://krym-kucnya.ru/";
