<?
function drawTwoColumnLayout($leftBlock, $rightBlock)
{
?>
	<div class="container TwoColumLayout">
		<div class="row">
			<?
			$leftBlock();
			$rightBlock();
			?>
		</div>
	</div>
<?
}
