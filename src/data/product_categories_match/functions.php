<?
function getCountProductByCategoryId($categoryId)
{
    $sql = "SELECT COUNT(product_ref)
        FROM product_categories_match
        WHERE category_child_ref = '$categoryId';
    ";
    return getOneRowFromDataBase($sql)['COUNT(product_ref)'];
}

function getCategoriesChildrenByProductId($productId)
{
    $sql = "SELECT 
        categories_children.folder as folder,       
        categories_children.name_full as name_full
        
    FROM `product_categories_match`
    JOIN categories_children ON product_categories_match.category_child_ref  = categories_children.id
    WHERE product_categories_match.product_ref  = '$productId'
    ORDER BY categories_children.rating DESC
    ";

    return getAllRowsFromDataBase($sql);
}

function getProductsByCategoryId($page, $perPage, $sort, $order, $category_id)
{
    $limit = getLimit($page, $perPage);
    $order = getOrder($sort, $order);
  

    $sql = "SELECT 
    *
    FROM `product_categories_match`
    JOIN products ON  products.id = product_categories_match.product_ref
    WHERE category_child_ref = '$category_id'
    $order
    $limit
    ";

    return getAllRowsFromDataBase($sql);
}
