<?
include('constants/guarantees.constants.php');

function drawGuarantees()
{
	$guaranteesValues = getGuaranteesValues();
?>
	<div class="Guarantees" id="garanty">
		<div class="container">
			<h3 style="font-size: 200%;">
				<? echo $guaranteesValues['title'] ?>
			</h3>
			<p><? echo $guaranteesValues['description'] ?></p>
			<div class="row">
				<?
				foreach ($guaranteesValues["list"] as $item) {
					drawGuaranteesItem($item);
				}
				?>
			</div>
		</div>
	</div>
<?
}

function drawGuaranteesItem($item)
{
?>
	<div class="col-lg-3 Guarantees-Block">
		<img src="<? echo $item['imgLink'] ?>" alt="<? echo $item['imgAlt'] ?>">
		<strong><? echo $item['titleItem'] ?></strong>
	</div>
<?
}
