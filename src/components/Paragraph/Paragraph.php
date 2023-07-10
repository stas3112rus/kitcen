<?
function drawParagraph($data)
{


?>
	<div class="container">
		<?
		foreach ($data as $line) {
		?>
			<p><? echo $line ?></p>
		<?
		}
		?>
	</div>
<?
}
