<?
$LEVEL = "../../";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/categoriesChildren.constants.php');
include('utils/getCurrentPage.php');


$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);
$CATEGORY = getCategoriesChildrenById($CATEGORIES_CHILDREN_ID);
$VALUES = getCategoriesChildrenValues();

$PAGE = getCurrentGetPage();
$PER_PAGE = $VALUES['per_page'];


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
	drawMainTitle($CATEGORY['name_full']);
	drawBreadCrumbs();
	drawProductBlock($PAGE, $PER_PAGE, true, $CATEGORIES_CHILDREN_ID);
	drawPagination($PAGE, $PER_PAGE, getCountProductByCategoryId($CATEGORIES_CHILDREN_ID));
	drawFooter();
	drawPopup();
	drawScripts();
	?>
</body>

</html>