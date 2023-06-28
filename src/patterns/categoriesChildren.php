<?
$LEVEL = "../../";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/categoriesChildren.constants.php');


$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);
$CATEGORY = getCategoriesChildrenById($CATEGORIES_CHILDREN_ID);

if ($_GET['page']) {
	$PAGE = $_GET['page'];
} else {
	$PAGE = 1;
}

$PER_PAGE = 28;

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
	drawProductBlock($PAGE, $PER_PAGE, true, $CATEGORIES_CHILDREN_ID);
	drawPagination($PAGE, $PER_PAGE, getCountProductByCategoryId($CATEGORIES_CHILDREN_ID));
	drawFooter();
	drawPopup();
	drawScripts();
	?>
</body>

</html>