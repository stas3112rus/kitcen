<?
function getTextLine($textLine)
{
    $textLine = replacePadeg($textLine);
   
    //$textLine = str_replace("[phone]", getFullPhone(), $textLine);
    
    return $textLine;
}

function replacePadeg($textLine)
{
    global $DEPARTMENT, $DEPARTMENT_CASES;    

    foreach ($DEPARTMENT_CASES as $key_case => $case) {
        $textLine = str_replace($case, $DEPARTMENT[$key_case], $textLine);        
    }

    return $textLine;
}





