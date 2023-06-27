<?
include('constants/footer.constants.php');

function drawFooter()
{
?>
	<footer class="Footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 Footer-block" style="text-align: left;">
					<? drawFooterLinks(getFooterValue()['columnFirst']); ?>
					<div class="Footer-line"></div>
					<? drawFooterAbout(); ?>
				</div>
				<div class="col-lg-3 Footer-block" style="text-align: left;">
					<?
					drawFooterLinks(getFooterValue()['columnSecond']);
					?>
				</div>
				<div class="col-lg-3 Footer-block" style="text-align: left;">
					<?
					drawFooterLinks(getFooterValue()['columnThird']);
					?>
					<br>
				</div>
				<?
				drawFooterContacts();
				?>
			</div>
			<br>
		</div>
	</footer>
	<?
}

function drawFooterLinks($links)
{
	foreach ($links as $link_title => $link_url) {
	?>
		<a href="<? echo $link_url ?>" class="Footer-link">
			<? echo $link_title ?>
		</a>
	<?
	}
}

function drawFooterAbout()
{
	$values = getFooterValue()['about'];

	?>
	<div class="Footer-about">
		<div>
			<? echo $values['title'] ?>
		</div>
		<div>
			<? echo $values['years'] ?>
		</div>
		<div>
			<a href="<? echo $values['politicsLink'] ?>" class="Footer-link" rel="nofollow">
				<? echo $values['policyTitle'] ?>
			</a>
		</div>
	</div>
<?
}

function drawFooterContacts()
{
	global $IMAGES, $DEPARTMENT;
?>
	<div class="col-lg-3 Footer-block">
		<div class="Footer-blockItem">
			<img src="<? echo $IMAGES['logoBig'] ?>">
		</div>
		<div class="Footer-blockItem">
			<? echo $DEPARTMENT['im'] ?>, <? echo $DEPARTMENT['street'] ?>
		</div>
		<div class="Footer-blockItem"><? echo $DEPARTMENT['phone'] ?></div>
		<div class="Footer-blockItem">
			<a href="mailto:<? echo $DEPARTMENT['email'] ?>" class="Footer-link">
				<? echo $DEPARTMENT['email'] ?>
			</a>
		</div>
	</div>
<?
}
