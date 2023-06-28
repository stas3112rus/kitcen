<?
function getCountProductByCategoryId($categoryId)
{
    $sql = "SELECT COUNT(product_ref)
        FROM product_categories_match
        WHERE category_child_ref = '$categoryId';
    ";
    return getOneRowFromDataBase($sql)['COUNT(product_ref)'];
}
