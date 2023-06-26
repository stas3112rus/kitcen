<?
$TEXT_TYPE = 2; // main
$LEVEL = "";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/main.constants.php');


$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);
$CATEGORY = getCategoriesParentsByFolder('main');

$VALUES = getMainValues();
?>

<!DOCTYPE html>
<html lang="en">

<?
drawHead($VALUES['description']);
?>

<body>
	<?
	drawHeader();
	// drawNavBar();
	// drawMainScreen();
	// drawPopularCategories();
	// drawAdvantages();
	// drawProductBlock();
	// drawSupport();
	// drawSteps();
	// drawGuarantees();
	// drawDifference();
	// drawQuestion();
	drawContacts();
	?>
</body>

</html>