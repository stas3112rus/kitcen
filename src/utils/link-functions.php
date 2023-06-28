<?
function getLinkPage($path = "", $type = "main")
{
	global $LEVEL;

	switch ($type) {
		case "main":
			return $LEVEL . $path;
		case "category":
			return $LEVEL . "category/" . $path . "/";
		case "product":
			return $LEVEL . "product/" . $path . "/";
		default:
			throw new ErrorException("не верный тип категории страницы");
	}
}

function getCurrentPage()
{
	return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}
