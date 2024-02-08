<?php
require_once('const.php');


$conn = new mysqli(HOST, USERNAME, PASS, DB);

if($conn){
    echo "OK";
}else{
    echo "Not OK";
}


?>