<?
include('utils/pagination.functions.php');

function drawPagination($currentPage, $perPage, $totalItems)
{
	$totalPages = ceil($totalItems / $perPage);

	if ($totalPages == 1) return;

	$pagination_array = getPaginationArray($currentPage, $totalPages);
?>
	<ul class="Pagination container">
		<?
		foreach ($pagination_array as $index => $value) {
			if (
				$index > 0 &&
				$pagination_array[$index] - $pagination_array[$index - 1] - 1 > 1
			) {
				drawPaginationEllipsis();
			}
			drawPaginationItem($value, $currentPage);
		}
		?>
	</ul>
	<?


}

function drawPaginationItem($value, $currentPage)
{


	if ($value == $currentPage) {
	?>
		<li class="Pagination-item Pagination-active"><? echo $value ?></li>
	<?
	} else {
	?>
		<a href="<? echo getLinkPagination($value) ?>">
			<li class="Pagination-item">
				<? echo $value ?>
			</li>
		</a>
	<?
	}
}

function drawPaginationEllipsis()
{
	?>
	<li class="Pagination-item">...</li>
<?
}

function getLinkPagination($value)
{
	$get = $_GET;
	$get['page'] = $value;
	$link = [];
	foreach ($get as $key => $param) {
		array_push($link, $key . "=" . $param);
	}

	return "?" . implode("&", $link);
}
