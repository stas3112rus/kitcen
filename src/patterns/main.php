<?
$TEXT_TYPE = 2; // main
$LEVEL = "";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/main.php");
include("$GLOBAL_PATH/src/constants/main.php");

include("$GLOBAL_PATH/src/utils/main.php");
include('constants/main.constants.php');


$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);
$CATEGORY = getCategoriesParentsByFolder('main');

$mainValues = getMainValues();
?>

<!DOCTYPE html>
<html lang="en">

<?
drawHead($mainValues['description']);
?>

<body>
	<?
	drawHeader();
	drawNavBar();
	drawMainScreen();
	drawPopularCategories();
	drawAdvantages();
	drawProductBlock();
	?>
</body>

</html>