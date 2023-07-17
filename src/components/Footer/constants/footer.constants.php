<?
function getFooterValue()
{
	global $PAGES;
	return [
		"columnFirst" => [
			"Кухни эконом класс" => getLinkPage("kuhni-ekonom-klassa", "category"),
			"Угловые кухни" => getLinkPage("uglovye-kuhni", "category"),
			"Маленькие мини кухни" => getLinkPage("malenkie-kuhni", "category"),
			"Белые кухни" => getLinkPage("belye-kuhni", "category"),
			"Кухня из МДФ" => getLinkPage("kuhnja-iz-mdf", "category"),
		],
		"columnSecond" => [
			"Кухни от производителя" => getLinkPage("kuhni-ot-proizvoditelja", "category"),
			"Каталог мебели для кухни" => getLinkPage("mebel-dlja-kuhni", "category"),
			"Индивидуальные кухни под ключ" => getLinkPage("kuhni-pod-kljuch", "category"),
			"Кухни со встроенной техникой" => getLinkPage("vstroennye-kuhni", "category"),
			"Готовые кухни" => getLinkPage("gotovye-kuhni", "category"),
		],
		"columnThird" => [
			"Выставочные образцы кухонь" => getLinkPage("vysvochnye-obrazi-kuhni", "category"),
			"Кухни из массива дерева" => getLinkPage("uhni-iz-massiva", "category"),
			"Гарантии" => getLinkPage("kuhni-iz-massiva", "category"),
			"Кухни с барной стойкой" => getLinkPage("kuhni-s-barnoj-stojokoj", "category"),
			"Карта сайта" => getLinkPage("maps.php", "main"),
			"Контакты офиса" => $PAGES['contact'],
		],
		"about" => [
			"title" => "Сайт находится под управлением <br> компании «КРЫМ КУХНИ 365»",
			"years" => "©1999-" . date('Y') . ". Все права защищены.",
			"politicsLink" => $PAGES['policy'],
			"policyTitle" => "Политика конфиденциальности"
		],
	];
}
