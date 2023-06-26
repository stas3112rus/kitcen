<?
function drawPolicy()
{
	global $PAGES,  $IMAGES;
	$values = getFormValues();
?>
	<div class="Policy">
		<img src="<? echo $IMAGES['popup'] ?>" class="Policy-popup">
		<div class="Policy-policyText">
			<span>
				<? echo $values['policyTitle'] ?>
			</span>
			<a href="<? echo $PAGES['policy'] ?>" rel="nofollow">
				<? echo $values['policyLink'] ?>
			</a>
		</div>
	</div>
<?
}
