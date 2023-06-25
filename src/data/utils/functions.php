<?

function changeDataBaseRequest($sql, $errorMessage)
{
	global $base;
	if ($base->query($sql)) {
		return "Ok";
	} else {
		return "$errorMessage: " . "<br>" . $base->error;
	}
}

function getOneRowFromDataBase($sql)
{
	global $base;
	$res = $base->query($sql);

	return $res->fetch_assoc();
}

function getAllRowsFromDataBase($sql)
{
	global $base;
	$res = $base->query($sql);

	return ($res->fetch_all(MYSQLI_ASSOC));
}

function isExist($sql): bool
{
	global $base;
	$res = $base->query($sql);
	return ($res->num_rows > 0);
}

function trimValues($values)
{
	$result = [];

	foreach ($values as $key => $value) {
		$result[$key] = trim($value);
	}

	return $result;
}

function emptyStringToNull($values)
{
	global $MYSQL_CONSTANTS;
	$result = [];

	foreach ($values as $key => $value) {
		$result[$key] = empty($value) ? $MYSQL_CONSTANTS['NULL'] : $value;
	}

	return $result;
}

function getOrder($sort, $order){
	return trim("ORDER BY $sort $order");
}

function getLimit($page, $perPage){
	$paramOne = ($page - 1) * $perPage;
	$paramTwo = $perPage;
	return "LIMIT $paramOne, $paramTwo";
}