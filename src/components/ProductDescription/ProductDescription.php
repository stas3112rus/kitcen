<?
function drawProductDescription()
{
	global $VALUES;
	$descriptionTxt = $VALUES['productDescription'];

?>
	<div class="container ProductDescription">
		<div class="ProductDescription__block" style="margin: 30px;">
			<h2 class="ProductDescription__title">
				<? echo $descriptionTxt['title'] ?>
			</h2>
			<?
			foreach ($descriptionTxt['firstBlock'] as $txt) {
				drawProductDescriptionParagraph($txt);
			}
			?>
		</div>

		<div class="ProductDescription__block ProductDescription">
			<? echo drawProductDescriptionParagraph($descriptionTxt['secondBlock']); ?>
		</div>
	</div>
<?
}

function drawProductDescriptionParagraph($txt)
{
?>
	<p class="ProductDescription__paragraph"><? echo $txt ?></p>
<?
}
