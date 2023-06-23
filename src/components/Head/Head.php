<?
function drawHead()
{
	global $CATEGORY, $TXT;
?>

	<head>
		<meta charset="utf-8">
		<link rel="icon" type="image/png" href="image/favicon.png" />
		<link rel="apple-touch-icon" href="image/favicon.png" />
		<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
		<title><? echo $CATEGORY['title'] ?></title>
		<meta name="description" content="<? echo $TXT['description'] ?>">

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
		<script type="text/javascript" src="js/slick/slick.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
		<link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css" />
		<link rel="stylesheet" type="text/css" href="js/slick/slick.css" />
		<link rel="stylesheet" type="text/css" href="css/style.min.css">

	</head>
<?
}
