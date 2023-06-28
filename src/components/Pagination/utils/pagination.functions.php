<?
function getPaginationArray($currentPage, $totalPages)
{
	if ($totalPages < 11) {
		return range(1, $totalPages);
	}

	$array = range(max($currentPage - 5, 1), min($currentPage + 5, $totalPages));
	if ($array[0] != 1) array_unshift($array, 1);
	if ($array[count($array) -1 ] != $totalPages) array_push($array, $totalPages);

	return $array;
}
