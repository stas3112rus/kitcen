<?
$LEVEL = "../../";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/product.constants.php');

$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);
$PRODUCT = getProductsById($PRODUCT_ID);
$CATEGORY = getCategoriesChildrenById($CATEGORIES_CHILDREN_ID);


$VALUES = getProductValues();

$drawProductPhotos = 'drawProductPhotos';
$drawProductCharacteristics = 'drawProductCharacteristics';
?>

<!DOCTYPE html>
<html lang="en">

<?
drawHead(true);
?>

<body>
	<?

	drawHeader();
	drawProductTitle();
	drawTwoColumnLayout(
		$drawProductPhotos,
		$drawProductCharacteristics
	);


	drawFooter();
	drawPopup();
	drawScripts();
	?>
</body>

</html>