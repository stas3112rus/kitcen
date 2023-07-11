<?
function createFolder($dir)
{
    if (!is_dir($dir)) {
        if (mkdir($dir)) {
            return "Ok";
        } else {
            return "Не удалось создать папку: " . $dir;
        }
    }

    return "Ok";
}


function createFile($dir, $txt)
{
    $file = fopen($dir, "w");
    if (!$file)
        return ("Не возможно создать файл: " . $dir);

    fwrite($file, $txt);
    fclose($file);

    return "Ok";
}
