<?
function drawHead($fotorama = false)
{
	global $IMAGES, $LEVEL, $VALUES;
?>

	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="<? echo $IMAGES['favicon'] ?>" />
		<link rel="apple-touch-icon" href="<? echo $IMAGES['favicon'] ?>" />
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
		<title><? echo $VALUES['title'] ?></title>
		<meta name="description" content="<? echo $VALUES['description'] ?>">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>css/bootstrap-grid.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
		<link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>js/slick/slick-theme.css" />
		<link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>js/slick/slick.css" />
		<?
		if ($fotorama) {
		?>
			<link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
			<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
		<?
		}
		?>

		<link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>css/style.min.css">


	</head>
<?
}
