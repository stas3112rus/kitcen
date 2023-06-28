<?
function drawPopularCategories($categories)
{
?>
	<div class="container popularCategories">
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
<?
}
