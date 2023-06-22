<?

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/globals/global-data.php");
include("$GLOBAL_PATH/src/components/main.php");

$CATEGORY = getCategoriesParentsByFolder('main');

?>

<!DOCTYPE html>
<html lang="en">

<?
	drawHead();
?>

<body>
	<?
		print_r($DEPARTMENT);
		print_r($TXT);
	?>
</body>

</html>