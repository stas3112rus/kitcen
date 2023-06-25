<?

function getAllProducts()
{
    $sql = "SELECT 
    *
    FROM `products`
    ";

    return getAllRowsFromDataBase($sql);
}

function getProductsByParams($page, $perPage, $sort, $order)
{
    $limit = getLimit($page, $perPage);
    $order = getOrder($sort, $order);

    $sql = "SELECT 
    *
    FROM `products`
    $order
    $limit
    ";


    return getAllRowsFromDataBase($sql);
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
