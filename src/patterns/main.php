<?
$TEXT_TYPE = 2; // main
$LEVEL = "";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/main.php");
include("$GLOBAL_PATH/src/globals/global-data.php");

$CATEGORY = getCategoriesParentsByFolder('main');

?>

<!DOCTYPE html>
<html lang="en">

<?
drawHead();
?>

<body>
	<?
	drawTopComponent();
	drawNavBar();
	drawMainScreen();
	?>
</body>

</html>