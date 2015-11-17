<?php
$arrData = array();
$dir = __DIR__ . "\pics\\";
$files = scandir($dir);

foreach($files as $file)
{
    if (!is_dir($file))
    {
//        echo $file.'\n';
        $newdata = array("src" => "http://localhost/gog/ng/essPix/php/pics/" . $file,
                "desc" => "Image 01"
            );
        $arrData["photos"][] = $newdata;
    }
}

$strData = json_encode($arrData);
echo $strData;
?>
