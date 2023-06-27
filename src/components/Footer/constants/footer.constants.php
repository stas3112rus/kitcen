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
			"Замена фасадов" => getLinkPage("zamena-kuchonnich-fasadov.php", "category"),
			"Кухни со встроенной техникой" => getLinkPage("vstroennye-kuhni", "category"),
			"Готовые кухни" => getLinkPage("gotovye-kuhni", "category"),
			"Вызвать замерщика" => getLinkPage("vyzvat-zamersika.php", "main"),
			"Кухни с барной стойкой" => getLinkPage("kuhni-s-barnoj-stojokoj", "category")
		],
		"columnThird" => [
			"Выставочные образцы кухонь" => getLinkPage("vysvochnye-obrazi-kuhni", "category"),
			"Распродажа кухонь" => getLinkPage("rasprodazha-kuhon", "category"),
			"Акции и скидки на кухни" => getLinkPage("akcii-na-kuhni", "category"),
			"Про наш интернет-магазин" => getLinkPage("pro-internet-magazin-kuhni-365.php", "main"),
			"Кухни из массива дерева" => getLinkPage("uhni-iz-massiva", "category"),
			"Гарантии" => getLinkPage("kuhni-iz-massiva", "category"),
			"Карта сайта" => getLinkPage("maps.php", "main"),
			"Написать лично директору" => getLinkPage("napisat-directoru-lichno.php", "main"),
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
