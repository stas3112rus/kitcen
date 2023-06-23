<?php
include('constants/navbar.constants.php');

function drawNavBar()
{
	global $LEVEL, $DEPARTMENT;
?>
	<div class="nav">
		<div class="nav-links">
			<ul>
				<? drawNavBarItems() ?>
			</ul>

		</div>
		<div class="nav-adress">
			<img src="<? echo  $LEVEL ?>image/icons8-marker-32.png" style="width: 16px; height:16px;">
			<span style="color: white; padding-left: 15px;">
				<? echo $DEPARTMENT['im'] ?>, <? echo $DEPARTMENT['street'] ?>
				<br>
				<a href="mailto: <? echo $DEPARTMENT['email'] ?>" class="footer-link">
					<? echo $DEPARTMENT['email'] ?>
				</a>
				<br>
			</span>
			<br>
		</div>

	</div>
	<?
}


function drawNavBarItems()
{
	foreach (getMenuValues() as $menu_value  => $menu_url) {
	?>
		<li>
			<a href="<? echo $menu_url ?>">
				<? echo $menu_value ?>
			</a>
		</li>
<?
	}
}
