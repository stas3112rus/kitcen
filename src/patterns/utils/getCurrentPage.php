<?
function getCurrentGetPage()
{
	if ($_GET['page']) {
		return $_GET['page'];
	} else {
		return 1;
	}
}
