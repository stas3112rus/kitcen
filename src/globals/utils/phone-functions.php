<?
function getFullPhone()
{

    global $DEPARTMENT;

    $result = "";

    for ($i = 0; $i < strlen($DEPARTMENT['phone']); $i++) {
        if ($i == 2)
            $result .= " (";
        if ($i == 5)
            $result .= ") ";
        if ($i == 8 || $i == 10)
            $result .= "-";

        $result .= $DEPARTMENT['phone'][$i];
    }

    return $result;
}