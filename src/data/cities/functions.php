<?
function getAllCities()
{
    $sql = "SELECT 
    *
    FROM `cities`
    ORDER BY im
    ";

    return getAllRowsFromDataBase($sql);
}


function getCityById($id)
{
    $sql = "SELECT 
    *
    FROM `cities`
    WHERE id = '$id'
    ";
    return getOneRowFromDataBase($sql);
}


function updateCity($city)
{
    $city = trimValues($city);

    $sql = "UPDATE `cities` SET 
    `im`= '$city[im]',
    `rod`='$city[rod]',
    `dat`='$city[dat]',
    `vin`='$city[vin]',
    `tvor`='$city[tvor]',
    `pred`='$city[pred]'

    WHERE `id_city` = '$city[id_city]'";

    return changeDataBaseRequest($sql, "Ошибка при обновлении данных города");
}

function addCity($city)
{
    $city = trimValues($city);

    $sql = "INSERT INTO `cities`
        (
            `im`, 
            `rod`, 
            `dat`, 
            `vin`, 
            `tvor`, 
            `pred`
        ) 
        VALUES 
        (
            '$city[im]',
            '$city[rod]',
            '$city[dat]',
            '$city[vin]',
            '$city[tvor]',
            '$city[pred]'
        )";

    return changeDataBaseRequest($sql, "Ошибка при добавлении города в БД");
}

function deleteCityById($id)
{
    $sql = "DELETE FROM `cities` WHERE `id` = '$id'";
    return changeDataBaseRequest($sql, "Ошибка при добавлении города в БД");
}
