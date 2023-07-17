<?
include('constants/productBlock.constants.php');

function drawProductBlock($page = 1, $perPage = 12, $title_right = false, $category_id = false)
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
			drawProductBlockTitles($sort, $title_right);
			?>
			<ul class="Products clearfix">
				<?

				if ($category_id) {
					$products = getProductsByCategoryId($page, $perPage, $sort, $order, $category_id);
				} else {
					$products = getProductsByParams($page, $perPage, $sort, $order);
				}

				foreach ($products as $product) {
					drawProductItem($product);
				}


				?>
			</ul>
		</div>
	</div>
<?
}

function drawProductBlockTitles($sort, $title_right)
{
	$productsValues = getProductBlockValues();
?>
	<div class="ProductBlock-Titles <? if ($title_right) echo "ProductBlock-titleRight" ?>">
		<a href="?sort=hits" class="ProductBlock-Titles <? echo $sort !== "rating" ? "ProductBlock-Titles_active " : "" ?>">
			<? echo $productsValues['hits'] ?>
		</a>
		<a href="?sort=price" class="ProductBlock-Titles <? echo $sort !== "price" ? "ProductBlock-Titles_active " : "" ?>">
			<? echo $productsValues['price'] ?>
		</a>
	</div>
<?
}
