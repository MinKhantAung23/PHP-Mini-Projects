<?php

$folderName = "photos";
$file = $_GET["photo_name"];

if (unlink($folderName . "/" . $file)) {
    header("Location:gallery.php");
}
