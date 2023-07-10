<?
$LEVEL = "../";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/sitemap.constants.php');


$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);

$VALUES = getSitemapValues();
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

	drawMainTitle($VALUES['title']);
	drawBreadCrumbs();

	drawSitemapList();


	drawFooter();
	drawPopup();
	drawScripts();
	?>
</body>

</html>