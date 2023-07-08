<?
function drawProductTitle()
{
	global $VALUES;
?>
	<div class="container">
		<h1>Кухня <? echo $VALUES['h1'] ?></h1>
		<div>
			<span class="ProductTitle__availability" title="<? echo $VALUES['availability']['availabilityTitle'] ?>">
				<? echo $VALUES['availability']['availabilityStatus'] ?>
			</span>
		</div>
	</div>
<?
}
