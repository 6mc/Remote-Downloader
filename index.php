<?php 

echo "Test";

//ftp://speedtest:speedtest@ftp.otenet.gr/test1Mb.db


function downloadFile($url, $path)
{
    $newfname = $path;
    $file = fopen ($url, 'rb');
    if ($file) {
        $newf = fopen ($newfname, 'wb');
        if ($newf) {
            while(!feof($file)) {
                fwrite($newf, fread($file, 1024 * 8), 1024 * 8);
            }
        }
    }
    if ($file) {
        fclose($file);
    }
    if ($newf) {
        fclose($newf);
    }
}

downloadFile("http://www.office.xerox.com/latest/SFTBR-04.PDF", "test.pdf");

echo "<b> end of code page";





 ?>