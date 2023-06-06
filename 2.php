<?php
    $ret = file_get_contents('test.txt');
        echo nl2br( htmlspecialchars($ret) );
?>