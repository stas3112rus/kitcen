<?
include('constants/difference.constants.php');

function drawDifference()
{
	$differenceValue = getDifferenceValues();
?>
	<div class="Difference">
		<div class="container">
			<h3>
				<? echo $differenceValue['title'] ?>
			</h3>
			<div class="row ">
				<?
				foreach ($differenceValue['list'] as $item) {
					drawDifferenceItem($item);
				}
				?>
			</div>
		</div>
	</div>
<?
}

function drawDifferenceItem($item)
{
?>
	<div class="col-lg-6">
		<div class="Difference-block">
			<div class="Difference-number">
				<? echo $item['number'] ?>
			</div>
			<div><? echo $item['description'] ?></div>
		</div>
	</div>
<?
}
