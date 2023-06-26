<?
function drawFormFields($messageField = false)
{
	global $VALUES;
	$formFieldValue = getFormValues();
?>
	<input type="text" name="name" placeholder="<? echo $formFieldValue['name'] ?>" required>
	<input type="text" name="phone" placeholder="<? echo $formFieldValue['phone'] ?>" required>
	<? if ($messageField) { ?>
		<textarea rows="10" cols="45" name="message" placeholder="<? echo $formFieldValue['message'] ?>"></textarea>
	<? } ?>
	<input type="hidden" name="link" value="<? echo $VALUES['currentPage'] ?>">

<?
}
