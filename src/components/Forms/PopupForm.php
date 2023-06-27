<?
function drawPopupForm()
{
	global $PAGES;
	$questionFormValue = getFormValues();
?>
	<div class="PopupForm">
		<form action="<? echo $PAGES['mailSupport'] ?>" method="post">
			<? drawFormFields() ?>

			<button class="PopupForm-button"><? echo $questionFormValue['button'] ?></button>
		</form>
	</div>
	<? drawPolicy(); ?>
<?
}
