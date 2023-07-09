<?
include('constants/Question.constants.php');

function drawQuestion()
{
?>
	<div class="Question">
		<div class="container">
			<h3>Остались вопросы?</h3>
			<div class="Question-text" > Заполните форму и мы с вами свяжемся!</div>
			<?
			drawQuestionForm(false, false)
			?>

		</div>
	</div>
<?
}
