<?
$LEVEL = "../";

include("$GLOBAL_PATH/src/data/mysql.php");
include("$GLOBAL_PATH/src/components/bundle.php");
include("$GLOBAL_PATH/src/constants/bundle.php");

include("$GLOBAL_PATH/src/utils/bundle.php");
include('constants/mail.constants.php');


$DEPARTMENT = getDepartmentWithCityByID($DEPARTMENT_ID);

$VALUES = getMailValues();

sendMail();
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
	drawMailThankYou();

	drawFooter();
	drawPopup();
	drawScripts();
	?>
</body>

</html>