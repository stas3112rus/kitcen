<?
include('constants/support.constants.php');

function drawSupport()
{
	global $PAGES, $IMAGES;
	$supportValue = getSupportValues()['supportBlock'];
?>
	<div class="Support" style="clear: both; ">
		<div class="Support-man">
			<img src="<? echo $IMAGES['man'] ?>" alt="<? echo $supportValue['manImgAlt'] ?>">
		</div>
		<div class="container">
			<h3>
				<? echo $supportValue['title'] ?>
			</h3>
			<? drawSupportForm() ?>
			
		</div>
	</div>
<?
}
