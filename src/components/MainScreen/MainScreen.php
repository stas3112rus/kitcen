<?
function drawMainScreen()
{
	global $TXT;
?>
	<div class="home">
		<div class="container">
			<div class="home-text">
				<h1 style="font-size: 100%;">
					<? echo $TXT['h1'] ?>
				</h1>
			</div>
			<div class="home-p">
				<? echo $TXT['mainScreen_text'] ?>
			</div>
			<div class="home-button">
				<a class="home-button" href="#mc_0">
					<? echo $TXT['mainScreen_button'] ?>
				</a>
			</div>
			<div class="home-small">
				<? echo $TXT['mainScreen_subtitle'] ?>
			</div>
		</div>
	</div>

<?
}
