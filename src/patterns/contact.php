<?
$LEVEL = "../";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/contact.constants.php');


$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);
$CATEGORY = getCategoriesParentsByFolder('main');

$VALUES = getContactValues();
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
	drawTwoColumnLayout(
		'drawQuestionForm',
		'drawRequisites'
	);
	
	drawFooter();
	drawPopup();
	drawScripts();
	?>
</body>

</html>