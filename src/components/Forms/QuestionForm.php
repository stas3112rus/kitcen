<?
function drawQuestionForm()
{
	global $PAGES;
	$questionFormValue = getFormValues();
?>
	<form action="<? echo $PAGES['mailSupport'] ?>" method="post" class="QuestionForm">
		<div class="QuestionForm-wrapper">
			<? drawFormFields(true) ?>
		</div>
		<button class="QuestionForm-button" style="margin-right: 20px;"><? echo $questionFormValue['button'] ?></button>
	</form>


	<div class="QuestionForm-info" style="">
		<? drawPolicy() ?>
	</div>
<?
}
