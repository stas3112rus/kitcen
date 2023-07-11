<?

function getCategoryParentTxt($id)
{

	return
		"<?
\$CATEGORIES_PARENT_ID = $id;

include(\"../../info.php\");
include(\"\$GLOBAL_PATH/src/patterns/categoriesParents.php\");";
}

function getCategoryChildrenTxt($id)
{
	return
		"<?
\$CATEGORIES_CHILDREN_ID = $id;

include(\"../../info.php\");
include(\"\$GLOBAL_PATH/src/patterns/categoriesChildren.php\");";
}

function getProductTxt($id)
{
	return "<?
\$PRODUCT_ID = $id;

include(\"../../info.php\");
include(\"\$GLOBAL_PATH/src/patterns/product.php\");
	";
}
