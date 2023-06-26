<?
include('constants/steps.constants.php');

function drawSteps()
{
	$stepsValues =  getStepsValue();

?>
	<div class="Steps" id="steps">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 "> </div>
				<div class="col-lg-6 ">
					<h3 style="font-size:200%; ">
						<? echo $stepsValues['title'] ?>
					</h3>
					<div class="StepsList">
						<?
						foreach ($stepsValues["list"] as $listItem) {
							drawStepsListItem($listItem);
						}
						?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
<?
}

function drawStepsListItem($item)
{
?>
	<div class="StepsList-item">
		<div class="StepsList-number">
			<? echo $item['number'] ?>
		</div>
		<div class="StepsList-icon">
			<img src="<? echo $item['imgLink'] ?>" alt="<? echo $item['imgAlt'] ?>">
		</div>
		<div class="StepsList-info">
			<strong><? echo $item['title'] ?></strong>
			<p>
				<? echo $item['description'] ?>
			</p>
		</div>


	</div>
<?
}
