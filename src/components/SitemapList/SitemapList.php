<?
function drawSitemapList()
{
	global $VALUES;
	$result = "";

	foreach ($VALUES['data'] as $key => $array) {
		$result .= "<ul>";

		foreach ($array as $name => $link) {
			$result .= getSitemapLine($name, $link);
		}
	}

	$result .= getCloseUl(count($VALUES['data']));

	echo "<div class='container'>" . $result . "</div>";
}

function getCloseUl($count)
{
	$result = "";

	for ($i = 0; $i < $count; $i++); {
		$result .= "</ul>";
	}

	return $result;
}


function getSitemapLine($name, $link)
{
	return "<li><a href='$link'>$name</a></li>";
}
