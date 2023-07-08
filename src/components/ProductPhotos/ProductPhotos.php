<?
function drawProductPhotos()
{
	global $PRODUCT;
?>
	<div class="col-lg-6 fotorama">

		<?
		drawImgProduct($PRODUCT['photos_cover']);

		for ($photo = 1; $photo <= $PRODUCT['photos_count']; $photo++) {
			if ($photo != $PRODUCT['photos_cover']) {
				drawImgProduct($photo);
			}
		}

		?>

	</div>
<?
}


function drawImgProduct($photoNumber)
{
?>
	<img src="<? echo getImgLink($photoNumber) ?>" alt="<? getAltImg($photoNumber) ?>">
<?
}

function getAltImg($photoNumber)
{
	global $PRODUCT;

	return "Кухня $PRODUCT[name]. Фотография $photoNumber";
}

function getImgLink($photoNumber)
{
	return "$photoNumber.jpg";
}
