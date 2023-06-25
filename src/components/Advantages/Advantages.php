<?
include('constants/advantages.constants.php');

function drawAdvantages()
{
	$advantagesValues = getAdvantagesValues();
?>
	<div class="advantage">
		<div class="container">
			<div class="row ">

				<div class="advantage-title">

					<h3 style="font-size:200%;">
						<? echo $advantagesValues['title'] ?>
					</h3>

				</div>
			</div>
		</div>
		<div class="advantage-blocks" style="margin-top: 60px;">
			<? foreach ($advantagesValues['list'] as $advantage) { ?>
				<div class=" advantage-block">
					<img src="<? echo $advantage['img_url'] ?>" alt="<? echo $advantage['img_url'] ?>">
					<div class="advantage-itemTitle">
						<? echo $advantage['title'] ?>
					</div>
					<div class="advantage-itemSubtitle">
						<? echo $advantage['subtitle'] ?>
					</div>
				</div>
			<? } ?>
		</div>
	</div>
<?
}
