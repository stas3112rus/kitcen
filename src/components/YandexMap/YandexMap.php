<?
function drawYandexMap()
{
?>
	<div class="YandexMap">
		<img src=" <? echo getYandexMapImgUrl() ?>" alt="Кухни 365 на карте">
	</div>

<?
}

function getYandexMapImgUrl()
{
	global $DEPARTMENT;

	$url_map = 'https://static-maps.yandex.ru/1.x/?ll=' . $DEPARTMENT['latitude'] . ',' . $DEPARTMENT['longitude'] . '&z=15&size=600,450&l=map&pt=' . $DEPARTMENT['latitude'] . ',' . $DEPARTMENT['longitude'] . ',org~39.620070,55.753630';
	$url_map = str_replace(' ', '', $url_map);



	return $url_map;
}
