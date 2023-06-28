<?

function getCategoriesParents()
{
    $sql = "SELECT 
    *
    FROM `categories_parents`
    ";

    return getAllRowsFromDataBase($sql);
}


function getCategoriesParentsByFolder($folder)
{
    $sql = "SELECT 
    *
    FROM `categories_parents`
    WHERE folder = '$folder'
    ";
    return getOneRowFromDataBase($sql);
}

function getCategoriesParentsById($id)
{
    $sql = "SELECT 
    *
    FROM `categories_parents`
    WHERE id = '$id'
    ";
    return getOneRowFromDataBase($sql);
}



function addCategoriesParentsFromOldCategory($category)
{
    $city = trimValues($category);

    $sql = "INSERT INTO `categories_parents`
        (            
            `folder`, 
            `title`, 
            `name_full`, 
            `name_simple`, 
            `rating`
        ) 
        VALUES 
        (
            '$category[papka]',
            '$category[title]',
            '$category[h1]',
            '$category[ed_chislo]',           
            '$category[statistic]'
        )";

    return changeDataBaseRequest($sql, "Ошибка при добавлении города в БД");
}

function deleteCategoriesParentsById($id)
{
    $sql = "DELETE FROM `categories_parents` WHERE `id` = '$id'";
    return changeDataBaseRequest($sql, "Ошибка при добавлении города в БД");
}
