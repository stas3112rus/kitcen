<?
	function drawMailThankYou(){
		global $VALUES;

		?>
		<div class="container">
			<?
				foreach ($VALUES['data']['text-thank-you'] as $line){
					?>
						<p><?echo $line?></p>
					<?
				}
			?>
		</div>
		<?
	}