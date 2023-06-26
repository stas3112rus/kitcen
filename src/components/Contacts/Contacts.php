<?
include('constants/contacts.constants.php');

function drawContacts()
{
	global  $DEPARTMENT, $IMAGES;
	$values = getContactsValues();

?>
	<div class="container Contacts">
		<div class="Contacts-map" id="contact">
			<div class="Contacts-block">
				<div class="Contacts-logo">
					<img src="<? echo $IMAGES['logo'] ?>" alt="<? echo $values['logoAlt'] ?>">
					<div class="Contacts-line"> </div>
					<div class="Contacts-logoText">
						<? echo $values['slogan'] ?>
					</div>
				</div>
				<div class="Contacts-data">
					<div class="Contacts-phone">
						<div>
							<img src="<? echo $IMAGES['viber'] ?>">
							<img src="<? echo $IMAGES['whatsapp'] ?>">
							<br>
							<span><? echo getFullPhone() ?></span>
						</div>
						<span class="Contacts-workTime"><? echo $DEPARTMENT['work_time'] ?></span>
					</div>

					<div class="Contacts-city">
						<img src="<? echo $IMAGES['mapIcon'] ?>">
						<div class="Contacts-address">
							<? echo $DEPARTMENT['im'] ?>, <br>
							<? echo $DEPARTMENT['street'] ?>
						</div>
					</div>
				</div>

				<div class="Contacts-buttonsBlock">
					<a>
						<div class="Contacts-button" style="text-decoration: none;">
							<? echo $values['callBackButton'] ?>
						</div>
					</a>
					<div class="Contacts-buttonsInfo">
						<? echo $values['callBackDescription'] ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?
}
