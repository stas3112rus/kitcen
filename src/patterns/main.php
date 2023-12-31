<?
$LEVEL = "";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/main.constants.php');

$CATEGORY = getCategoriesParentsByFolder('main');

$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);

$VALUES = getMainValues();
?>

<!DOCTYPE html>
<html lang="en">

<?
drawHead();
?>

<body>
	<?
	drawHeader();
	drawNavBar();
	drawMainScreen();
	drawPopularCategories(getPopularCategoriesChildren(30));
	drawAdvantages();
	drawProductBlock();
	drawSupport();
	drawSteps();
	drawGuarantees();
	drawDifference();
	drawQuestion();
	drawContacts();
	drawFooter();
	drawPopup();
	drawScripts();
	?>
</body>

</html>