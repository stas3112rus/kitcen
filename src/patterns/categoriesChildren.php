<?
$LEVEL = "../../";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/categoriesChildren.constants.php');


$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);
$CATEGORY = getCategoriesChildrenById($CATEGORIES_CHILDREN_ID);



$VALUES = getCategoriesChildrenValues();
?>

<!DOCTYPE html>
<html lang="en">

<?
drawHead($VALUES['description']);
?>

<body>
	<?
	drawHeader();
	drawMainTitle($CATEGORY['name_full']);
	drawBreadCrumbs();


	drawFooter();
	drawPopup();
	drawScripts();
	?>
</body>

</html>