<?
$LEVEL = "../../";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/categoriesParents.constants.php');


$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);
$CATEGORY = getCategoriesParentsById($CATEGORIES_PARENT_ID);

$VALUES = getCategoriesParentsValues($CATEGORY['name_full']);
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
	drawPopularCategories(getCategoriesParents());
	drawFooter();
	drawPopup();
	drawScripts();
	?>
</body>

</html>