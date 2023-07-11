<?
include("$GLOBAL_PATH/src/data/mysql.php");
include('files-functions.php');
include('data.php');

createIndexFiles(getCategoriesParents(), 'getCategoryParentTxt', 'getCategoryFolderPath');
createIndexFiles(getCategoriesChildren(), 'getCategoryChildrenTxt', 'getCategoryFolderPath');
createIndexFiles(getAllProducts(), 'getProductTxt', 'getProductFolderPath');


function createIndexFiles($data, $txt, $categoryPath)
{
	foreach ($data as $item) {
		if ($item['folder'] == "main") continue;

		createFolder($categoryPath($item['folder']));
		createFile(
			getIndexFilePath($categoryPath($item['folder'])),
			$txt($item['id'])
		);
	}
}

function getCategoryFolderPath($folder)
{
	global $GLOBAL_PATH;

	return "$GLOBAL_PATH/public_html/category/$folder";
}

function getProductFolderPath($folder)
{
	global $GLOBAL_PATH;

	return "$GLOBAL_PATH/public_html/product/$folder";
}

function getIndexFilePath($path)
{
	return "$path/index.php";
}
