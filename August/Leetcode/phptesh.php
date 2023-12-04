<?php

$path = "C:/Users/pks/Downloads/testtext.txet";
function openFile(string $path) 
{
    if (!file_exists($path)) {
        throw new Exception('File not found');
    }
 
    return fopen($path, "r");
}
 
function readFirstLine(string $path)
{

    $ipaddress = $_SERVER['REMOTE_ADDR'];
    Echo "Your IP Address is " . $ipaddress;
    $handler = null;
    $line    = null;
    
    try {
        $handler = openFile($path);
        pr($handler);  
        $line    = fgets($handler);
        pr($line);
    } catch (Exception $e) {
        echo "Error reading from ${path}. Message = " . $e->getMessage();
    } finally {
        if (!is_null($handler)) {
            fclose($handler);
        }
    }
    
    return $line;
}
function pr($data){
    echo "<br>";
    print_r($data);
    echo "<br>";
}

pr(readFirstLine($path));