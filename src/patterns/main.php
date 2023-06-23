<?

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/main.php");

$TEXT_TYPE = 2; // main
$CATEGORY = getCategoriesParentsByFolder('main');

include("$GLOBAL_PATH/src/globals/global-data.php");

?>

<!DOCTYPE html>
<html lang="en">

<?
drawHead();
?>

<body>
	<?

	print_r($TXT);
	?>
</body>

</html>