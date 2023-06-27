<?
include('constants/popup.constants.php');
function drawPopup()
{
	$value = getPopupValue();

?>
	<div class="Popup">
		<div class="Popup-content">
			<button class="Popup-close">X</button>
			<div class="Popup-title">
				<? echo $value['title'] ?>
			</div>
			<?
			drawPopupForm()
			?>
		</div>
	</div>
<?
}
