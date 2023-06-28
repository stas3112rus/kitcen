<?
function drawBreadCrumbs()
{

	global $VALUES;
?>
	<div class="BreadCrumbs container">
		<?
		foreach ($VALUES['breadCrumbs'] as $title => $link) {
		?>
			<a href="<? echo $link ?>" class="BreadCrumb-link">
				<? echo $title ?>
			</a>
			->
		<?
		}
		?>
	</div>
<?
}
