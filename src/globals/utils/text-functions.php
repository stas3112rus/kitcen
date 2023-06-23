<?
function getTXT()
{
    global $TEXT_TYPE;

    $result = [];    

    foreach (getGlobalTextsAndTypeText($TEXT_TYPE) as $text) {
        $result[$text['name']] =  upgradeTextLine($text['value']);
    }

    return $result;
}

function upgradeTextLine($textLine)
{
    global $DEFAULT;

    $textLine = replacePadeg($textLine);
   
    //$textLine = str_replace("[phone]", getFullPhone(), $textLine);
    
    return $textLine;
}

function replacePadeg($textLine)
{
    global $DEPARTMENT;

    $padeges = [
        "im" => "[город_именительный]",
        "rod" => "[город_родительный]",
        "dat" => "[город_дательный]",
        "vin" => "[город_винительный]",
        "tvor" => "[город_творительный]",
        "pred" => "[город_предложный]"
    ];

    foreach ($padeges as $key_padeg => $padeg) {
        $textLine = str_replace($padeg, $DEPARTMENT[$key_padeg], $textLine);        
    }

    return $textLine;
}





