<?php
if(isset($_POST['field1'])) {
    $data = $_POST['field1'];
    $ret = file_put_contents('test.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "Успешно";
    }
}
else {
   die('no post data to process');
}