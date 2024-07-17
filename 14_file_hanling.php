<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/
echo "<h1>File Handling</h1>";

$file = 'extras/users.txt';

if (file_exists($file)) {
    // $fileContent = file_get_contents($file);
    // echo $fileContent;
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'John Doe' . PHP_EOL . 'Jane Doe' . PHP_EOL . 'Jim Doe';
    $fwrite = fwrite($handle, $contents);
    fclose($handle);
    echo 'File does not exist';
}
