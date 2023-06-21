<?

function getAllProductCategories()
{
	$sql = "SELECT 
    *
    FROM `product_categories_match`
    ";

	return getAllRowsFromDataBase($sql);
}

function getProductCategoriesByCategoryId()
{
	$sql = "SELECT 
    *
    FROM `product_categories_match`
    ";

	return getAllRowsFromDataBase($sql);
}

function getProductCategoriesByProductId()
{
	$sql = "SELECT 
    *
    FROM `product_categories_match`
    ";

	return getAllRowsFromDataBase($sql);
}


function addProductCategories($category_id, $product_id)
{
	$sql = "INSERT INTO `product_categories_match`
        (            
            `category_child_ref`,
            `product_ref`           
        ) 
        VALUES 
        (
            '$category_id',
            '$product_id'
        )";		

	return changeDataBaseRequest($sql, "Ошибка при добавлении категории в БД");
}

function deleteProductCategoriesById($id)
{
	$sql = "DELETE FROM `product_categories_match` WHERE `id` = '$id'";
	return changeDataBaseRequest($sql, "Ошибка при добавлении категории в БД");
}
