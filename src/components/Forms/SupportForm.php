<?
function drawSupportForm()
{
	global $PAGES;
	$supportFormValue = getFormValues()
?>
	<form class="SupportForm" action="<? echo $PAGES['mailSupport'] ?>" method="post">
		<? drawFormFields() ?>
		<button class="SupportForm-button"><? echo $supportFormValue['button'] ?></button>
	</form>
	<? drawPolicy() ?>
<?
}
