<?php
include "autoLoad.php";

if ($_SERVER['REQUEST_METHOD'] != "POST")
{
    return;
}
# form submitted

list($title , $content , $format) = [$_POST['title'],$_POST['content'],$_POST['format']];
$whiteLIst = ['Json' , 'Text' , 'Csv'];
if (!in_array($format,$whiteLIst))
{
    echo "invalid Format!!";
    die();
}

$className = "Exporter\\{$format}Exporter";
$exporter = new $className(["title" => $title,"content" => $content]);
$exporter->export();
