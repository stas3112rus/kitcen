<?
function drawPopularCategories()
{
	global $LEVEL;
?>
	<div class="container popularCategories">
		<?
		foreach (getPopularCategoriesChildren(30) as $category) {
		?>
			<a href="<? echo "$LEVEL/categories/$category[folder]"  ?>" class="popularCategories-link">
				<div class="popularCategories_item">
					<?echo $category['name_full']?>
				</div>
			</a>
		<? } ?>
	</div>
<?
}
