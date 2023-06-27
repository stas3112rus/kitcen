<?
include('constants/mainScreen.constants.php');

function drawMainScreen()
{
	$mainScreenValues = getMainScreenValues();
?>
	<div class="home">
		<div class="container">
			<div class="home-text">
				<h1 style="font-size: 100%;">
					<? echo $mainScreenValues['h1'] ?>
				</h1>
			</div>
			<div class="home-p">
				<? echo $mainScreenValues['text'] ?>
			</div>
			<div class="home-button openPopup">
				<a >
					<? echo $mainScreenValues['button'] ?>
				</a>
			</div>
			<div class="home-small">
				<? echo $mainScreenValues['subtitle'] ?>
			</div>
		</div>
	</div>

<?
}
