<?
include('constants/requisites.constants.php');

function drawRequisites()
{
	$requites = getRequisites();
?>
	<div class="Requisites">
		<h2><? echo $requites['title'] ?></h2>

		<?
		foreach ($requites['data'] as $key => $value) {
			drawRequitesLine($key, $value);
		}
		?>

		
	</div>

<?
}

function drawRequitesLine($key, $value)
{
?>
	<p><? echo $key . ": " . $value ?></p>
<?
}
