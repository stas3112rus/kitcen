<?
function getMailValues()
{
	global $LEVEL;

	return [
		"title" => "Заявка отправлена",
		"description" => "Заявка отправлена - Кухни 365",
		"breadCrumbs" => [
			getTextLine(
				"Интернет-магазин кухонь в [город_предложный]"
			) => $LEVEL
		],
		"data" => [
			"text-thank-you" => [
				"Ваша заявка отправлена",
				"Свяжемся с Вами в ближайшее время"
			]
		]
	];
}
