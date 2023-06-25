<?
include('constants/header.constants.php');

function drawHeader()
{
	global  $DEPARTMENT, $IMAGES;

	$headerValues = getHeaderValues();
?>
	<div class="container header">
		<div class="row align-items-center">
			<div class="col-lg-2">
				<a href="<? echo $headerValues['logoLink'] ?>">
					<img src="<? echo $IMAGES['logo'] ?>" alt="<? echo $headerValues['logoAlt'] ?>">
				</a>
			</div>
			<div class="col-lg-5 header-about">
				<? echo $headerValues['slogan'] ?>
			</div>
			<div class="col-lg-3 phone">
				<span class="header-phone">
					<img src="<? echo $IMAGES['viber'] ?>">
					<img src="<? echo $IMAGES['whatsapp'] ?>">
					<? echo getFullPhone() ?>
				</span>
				<br>
				<a href="#" class="header-contact-1">
					<? echo $headerValues['callBack'] ?>
				</a>
				<div style="font-size: 85%">
					<? echo $DEPARTMENT['work_time'] ?>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 header-contact">
				<a href="#mc_0" style="color: white; text-decoration: none;">
					<? echo $headerValues['button'] ?>
				</a>
			</div>
		</div>
	</div>

<?
}
