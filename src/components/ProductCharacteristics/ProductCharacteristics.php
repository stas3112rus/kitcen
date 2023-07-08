<?
function drawProductCharacteristics()
{
?>
	<div class="col-lg-6 ProductCharacteristics">
		<?
		drawProductCharacteristicsPrice();
		drawProductCharacteristicsButtons();
		drawProductCharacteristicsTable();
		?>
	</div>
<?
}


function drawProductCharacteristicsPrice()
{
	global $VALUES, $PRODUCT;

	$priceTxt = $VALUES['characteristics']['price'];
?>
	<div class="ProductCharacteristics__price">
		<div>
			<span class="ProductCharacteristics__priceFor">
				<? echo $priceTxt['priceFor'] ?>
			</span>
		</div>
		<div>
			<span class="ProductCharacteristics__priceFrom">
				<? echo $priceTxt['priceFrom'] ?>
			</span>
			<span class="ProductCharacteristics__priceDigitals">
				<? echo getPriceString($PRODUCT); ?>
			</span>
			<span class="ProductCharacteristics__currency">
				<? echo $priceTxt['currency'] ?>
			</span>
		</div>
	</div>
<?
}


function drawProductCharacteristicsButtons()
{
	global $VALUES;

	$buttonTxt = $VALUES['characteristics']['buttons'];
?>
	<div class="Product-Buttons Product-Buttons_row">
		<div class="Product-Button Product-Button_page  Product-Button-Design openPopup">
			<? echo $buttonTxt['design'] ?>
		</div>
		<div class="Product-Button Product-Button_page Product-Button-Credit openPopup">
			<? echo $buttonTxt['credit'] ?>
		</div>
		<div class="Product-Button Product-Button_page Product-Button-More openPopup">
			<? echo $buttonTxt['more'] ?>
		</div>
	</div>
<?
}

function drawProductCharacteristicsTable()
{
	global $VALUES;
	$table = $VALUES['characteristics']['table'];
?>
	<table width="100%" cellpadding="0" cellspacing="0" class="ProductCharacteristics__table">
		<?
		foreach ($table as $index => $row) {
			drawCharacteristicsTableRow($index, $row);
		}
		?>

	</table>
<?
}

function drawCharacteristicsTableRow($index, $row)
{
?>
	<tr class="ProductCharacteristics__row 
		<? echo $index % 2 ? "ProductCharacteristics__row_1" :  "ProductCharacteristics__row_2" ?>">
		<td>
			<? echo $row[1] ?>
		</td>
		<td>
			<? echo $row['span'] ? "<span>$row[2]</span>" :  $row[2] ?>
		</td>
	</tr>
<?
}
