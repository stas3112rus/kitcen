<?
function drawHead($description = "")
{
	global $CATEGORY, $IMAGES, $LEVEL;
?>

	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="<? echo $IMAGES['favicon'] ?>" />
		<link rel="apple-touch-icon" href="<? echo $IMAGES['favicon'] ?>" />
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
		<title><? echo $CATEGORY['title'] ?></title>
		<meta name="description" content="<? echo $description ?>">

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
		<script type="text/javascript" src="<? echo $LEVEL ?>js/slick/slick.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>css/bootstrap-grid.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
		<link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>js/slick/slick-theme.css" />
		<link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>js/slick/slick.css" />
		<link rel="stylesheet" type="text/css" href="<? echo $LEVEL ?>css/style.min.css">

	</head>
<?
}
