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
			<div class="Support-policy">
				<img src="<? echo $IMAGES['popup'] ?>" class="Support-popup">
				<div class="Support-policyText">
					<span>
						<? echo $supportValue['policyTitle'] ?>
					</span>
					<a href="<? echo $PAGES['policy'] ?>" rel="nofollow">
						<? echo $supportValue['policyLink'] ?>
					</a>
				</div>
			</div>
		</div>
	</div>
<?
}

function drawSupportForm()
{
	global $VALUES, $PAGES;
	$supportFormValue = getSupportValues()['form'];
?>
	<form style="" class="SupportForm" action="<? echo $PAGES['mailSupport'] ?>" method="post">
		<input type="text" name="name" placeholder="<? echo $supportFormValue['name'] ?>" required><br>
		<input type="text" name="phone" placeholder="<? echo $supportFormValue['phone'] ?>" required>

		<input type="hidden" name="link" value="<? echo $VALUES['currentPage'] ?>">
		<button class="SupportForm-button"><? echo $supportFormValue['button'] ?></button>
	</form>
<?
}
