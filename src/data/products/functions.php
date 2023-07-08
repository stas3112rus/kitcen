<?

function getAllProducts()
{
    $sql = "SELECT 
    *
    FROM `products`
    ";

    return getAllRowsFromDataBase($sql);
}

function getProductsByParams($page, $perPage, $sort, $order, $category_id = false)
{
    $limit = getLimit($page, $perPage);
    $order = getOrder($sort, $order);
    $where = $category_id ? "WHERE category_child_ref  = '$category_id'" : "";

    $sql = "SELECT 
    *
    FROM `products`
    JOIN product_categories_match ON product_categories_match.product_ref = products.id
    $where
    $order
    $limit
    ";

    return getAllRowsFromDataBase($sql);
}

function getProductsById($product_id)
{
    $sql = "SELECT 
    *
    FROM `products`
    WHERE id = '$product_id';
    ";

    return getOneRowFromDataBase($sql);
}


function addProductFromOldProduct($product)
{
    $product = trimValues($product);

    $sql = "INSERT INTO `products`
        (            
            `name`,
            `folder`, 
            `vendor_code`, 
            `width`, 
            `material`,
            `tabletop`,
            `fittings`,
            `price`,
            `photos_count`,
            `photos_cover`,            
            `rating`,
            `category_temp`
        ) 
        VALUES 
        (
            '$product[name]',
            '$product[papka]',
            '$product[art]',
            '$product[size]',
            '$product[material]',
            '$product[stoleshniza]',
            '$product[furnitura]',
            '$product[price]',
            '$product[foto_k]',
            '$product[foto_o]',
            '$product[reiting]',            
            '$product[category]'
        )";

    return changeDataBaseRequest($sql, "Ошибка при добавлении товара в БД");
}

function deleteProductById($id)
{
    $sql = "DELETE FROM `products` WHERE `id` = '$id'";
    return changeDataBaseRequest($sql, "Ошибка при добавлении товара в БД");
}
