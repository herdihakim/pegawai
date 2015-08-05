<?php
$zip = new ZipArchive;
if ($zip->open('system_update.zip') === TRUE) {
    $zip->extractTo("../../../");
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>