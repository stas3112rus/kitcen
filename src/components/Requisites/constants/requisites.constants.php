<?
function getRequisites()
{
	global $DEPARTMENT;

	return [
		"title" => "Реквизиты Кухни 365",
		"data" => [
			"Адрес:" => "$DEPARTMENT[im] $DEPARTMENT[street]",
			"Телефон:" => "$DEPARTMENT[phone]",
			"E-mail:" => "<a href=\"mailto:$DEPARTMENT[email]\">$DEPARTMENT[email]</a>",
		],
	];
}
