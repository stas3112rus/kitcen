<?
include('constants/productItem.constants.php');

function drawProductItem($product)
{

?>
	<li class="Product-wrapper">
		<div class="Product-title">
			<h3>
				<a href="<? echo getProductLink($product) ?>">
					<? echo getProductTitle($product) ?>
				</a>
			</h3>
		</div>
		<div class="Product-photo">
			<a href="<? echo getProductLink($product) ?>">
				<img src="<? echo getProductImgLink($product) ?>" alt="<? echo getProductImgAlt($product) ?>" title="<? echo getProductImgAlt($product) ?>">
			</a>
		</div>
		<div class="Product-info">
			<?
			drawProductPriceBlock($product);
			drawProductInfoList($product);
			drawProductButtons($product);
			?>
		</div>
	</li>
<?
}

function drawProductPriceBlock($product)
{
	$productValue = getProductItemValues($product)['priceBlock'];
?>
	<div class="Product-PriceBlock">
		<span class="Product_small Product_grey">от</span>
		<span class="Product_big Product_black"><? echo $productValue['price'] ?></span>
		<? echo $productValue['priceValue'] ?>
		<br>
		<span class="Product_small Product_grey">
			<? echo $productValue['priceFor'] ?>
		</span>
	</div>
<?
}

function drawProductInfoList($product)
{
	$productValue = getProductItemValues($product)['infoBlock'];
?>
	<ul class="Product_list">
		<li class="Product_list_item">
			<span class="Product_list_subtitle">
				<? echo $productValue['material'] ?>
			</span>
			<? echo  $product['material'] ?>
		</li>
		<li class="Product_list_item">
			<span class="Product_list_subtitle">
				<? echo $productValue['fittings'] ?>
			</span>
			<? echo  $product['fittings'] ?>
		</li>
		<li class="Product_list_item">
			<span class="Product_list_subtitle">
				<? echo $productValue['tabletop'] ?>
			</span>
			<? echo  $product['tabletop'] ?>
		</li>
	</ul>
<?
}

function drawProductButtons($product)
{
	$productValue = getProductItemValues($product)['buttonsBlock'];
?>
	<div class="Product-Buttons">
		<div class="Product-Button Product-Button-Design">
			<? echo  $productValue['design'] ?>
		</div>
		<div class="Product-Button Product-Button-Credit">
			<? echo  $productValue['credit'] ?>
		</div>
		<a href="<? echo getProductLink($product) ?>" class="Product-ButtonLink">
			<div class="Product-Button Product-Button-More">
				<? echo  $productValue['more'] ?>
			</div>
		</a>
	</div>
<?
}
