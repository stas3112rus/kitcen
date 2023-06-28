<?

function getCategoriesChildren()
{
    $sql = "SELECT 
    *
    FROM `categories_children`
    ";

    return getAllRowsFromDataBase($sql);
}

function getPopularCategoriesChildren($limit)
{
    $sql = "SELECT 
    *
    FROM `categories_children`    
    ORDER BY rating DESC LIMIT 0, $limit
    ";

    return getAllRowsFromDataBase($sql);
}

function getCategoriesChildrenById($id)
{
    $sql = "SELECT 
        categories_children.folder as folder,
        categories_children.title as title,
        categories_children.name_full as name_full,
        categories_children.name_simple as name_simple,
        categories_parents.folder as parents_folder,
        categories_parents.name_full as parents_name_full
    FROM `categories_children`
    JOIN categories_parents ON categories_parents.id = category_parent_ref 
    WHERE categories_children.id = '$id'
    ";

    return getOneRowFromDataBase($sql);
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
