<?
function drawProductBlock($page = 1, $perPage = 12)
{
	$sort = "rating";
	$order = "Desc";
	if ($_GET['sort'] == "price") {
		$sort = "price";
		$order = "";
	}
?>
	<div class="container ProductBlock">
		<div class="ProductBlock-Wrapper">
			<?
			drawProductBlockTitles($sort);
			?>
			<ul class="Products clearfix">
				<?
				foreach (getProductsByParams($page, $perPage, $sort, $order) as $product) {
					drawProductItem($product);
				}
				?>
			</ul>
		</div>
	</div>
<?
}

function drawProductBlockTitles($sort)
{
?>
	<div class="ProductBlock-Titles">
		<a href="?sort=hits" class="ProductBlock-Titles <? echo $sort !== "rating" ? "ProductBlock-Titles_active " : "" ?>">
			Хиты продаж
		</a>
		<a href="?sort=prices" class="ProductBlock-Titles <? echo $sort !== "price" ? "ProductBlock-Titles_active " : "" ?>">
			Дешевые кухни на заказ
		</a>
	</div>
<?
}


