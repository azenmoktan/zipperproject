
<?php

$zip = new ZipArchive();

$filename = "./bikash.zip";	//name the zip name for file

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}
//file name inside the zip file
$zip->addFromString("testfilephp.txt" , "this is the azen moktan and the section is called the azen moktan section\n");
echo"<br>";
$zip->addFromString("name.txt" , "what is your name?\n");
// $zip->addFromString("testfilephp2.txt" . time(), "#2 This is a test string added as testfilephp2.txt.\n");
// $zip->addFile($thisdir . "/too.php","/testfromfile.php");	//add zip file to the path
echo "numfiles: " . $zip->numFiles . "\n";
echo "</br>";
echo "status:" . $zip->status . "\n";
echo "</br>";
echo"file zipped sucessfully";
$zip->close();
?>
