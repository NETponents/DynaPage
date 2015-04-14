<?php
function getVersionInfoDP()
{
    return getVersionInfoDP('d v n');
}
function getVersionInfoDP($paramString)
{
    $paramString = str_replace('d', 'DynaPage', $paramString);
    $paramString = str_replace('v', 'v2.0', $paramString);
    $paramString = str_replace('n', 'Brown Banana', $paramString);
    $paramString = str_replace('t', 'Development', $paramString);
}
?>
