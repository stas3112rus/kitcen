<?
function drawTopComponent()
{
	global $LEVEL, $DEPARTMENT, $TXT;
?>
	<div class="container header">
		<div class="row align-items-center">
			<div class="col-lg-2">
				<a href="<? echo $$LEVEL ?>">
					<img src="<? echo $LEVEL ?>image/logo2.png" alt="Интернет-магазина Кухни 365 - <? echo $DEPARTMENT['im'] ?>">
				</a>
			</div>
			<div class="col-lg-5 header-about">
				
				<? echo $TXT['header_slogan'] ?>
			</div>
			<div class="col-lg-3 phone">
				<span class="header-phone">
					<img src="<? echo $LEVEL ?>image/viber-logo.png">
					<img src="<? echo $LEVEL ?>image/whatsapp-logo.png">
					<? echo getFullPhone() ?>
				</span>
				<br>
				<a href="#" class="header-contact-1">
					<? echo $TXT['header_link'] ?>
				</a>
				<div style="font-size: 85%">
					<? echo $DEPARTMENT['work_time'] ?>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 header-contact">
				<a href="#mc_0" style="color: white; text-decoration: none;">
					<? echo $TXT['header_button'] ?>
				</a>
			</div>
		</div>
	</div>

<?
}
