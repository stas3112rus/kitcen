<?
function drawPopularCategories($categories, $title = false)
{
?>
	<div class="popularCategories">
		<?

		if ($title) {
		?>
			<h2 class="popularCategories__title"><? echo $title ?></h2>
		<? } ?>



		<div class="container popularCategories__wrapper">

			<?

			foreach ($categories as $category) {
			?>
				<a href="<? echo getLinkPage($category['folder'], 'category') ?>" class="popularCategories-link">
					<div class="popularCategories_item">
						<? echo $category['name_full'] ?>
					</div>
				</a>
			<? } ?>
		</div>
	</div>

<?
}
