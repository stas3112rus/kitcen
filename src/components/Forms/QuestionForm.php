<?
function drawQuestionForm($border = true, $yandexMap = true)
{
	global $PAGES;
	$questionFormValue = getFormValues();
?>
	<div>
		<form action="<? echo $PAGES['mailSupport'] ?>" method="post" class="
		QuestionForm 
		<? echo $border ? "QuestionForm_border" : "" ?>">
			<div class="QuestionForm-wrapper">
				<? drawFormFields(true) ?>
			</div>
			<button class="QuestionForm-button" style="margin-right: 20px;"><? echo $questionFormValue['button'] ?></button>
		</form>


		<div class="QuestionForm-info">
			<? drawPolicy() ?>
		</div>

		<?
		if ($yandexMap) {
			drawYandexMap();
		}

		?>
	</div>

<?
}
