<?php
    $obj-> ip = $_SERVER['REMOTE_ADDR'];
    $obj->host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $myjs = json_encode($obj, JSON_PRETTY_PRINT);
    echo $myjs;
?>
