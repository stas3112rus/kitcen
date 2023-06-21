<?

function getCategoriesChildren()
{
    $sql = "SELECT 
    *
    FROM `categories_children`
    ";

    return getAllRowsFromDataBase($sql);
}


function addCategoriesChildrenFromOldCategory($category)
{
    $category = trimValues($category);

    $sql = "INSERT INTO `categories_children`
        (            
            `category_parent_ref`,
            `folder`, 
            `title`, 
            `name_full`, 
            `name_simple`, 
            `rating`
        ) 
        VALUES 
        (
            '$category[category_parent_ref]',
            '$category[papka]',
            '$category[title]',
            '$category[h1]',
            '$category[ed_chislo]',           
            '$category[statistic]'
        )";

    return changeDataBaseRequest($sql, "Ошибка при добавлении категории в БД");
}

function deleteCategoriesChildrenById($id)
{
    $sql = "DELETE FROM `categories_children` WHERE `id` = '$id'";
    return changeDataBaseRequest($sql, "Ошибка при добавлении категории в БД");
}
