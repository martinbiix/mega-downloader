<?php
require_once('mega.class.php');

$megafile = new MEGA('https://mega.co.nz/#!8UU2AAYZ!f5D1cF3byY5n4tRTfDGkjlww3jQX6FeDIKHYGEXy_z0');

$megafile->download();
// OR
// $megafile->stream_download(); // to download using streams
?>
