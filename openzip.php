
<?php
$zip = new ZipArchive;
//include the zip file which you want to open
if ($zip->open('bikash.zip') === TRUE) {

    echo $zip->getFromName('testfilephp.txt');	//type the file which you want to read inside zip
    echo $zip->getFromName('name.txt');	//type the file which you want to read inside zip
    $zip->close();
} else {
    echo 'failed';
}
?>


