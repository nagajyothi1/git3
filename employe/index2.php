<?php
$data=file_get_contents('http://localhost/leavems/DEL/index1.php');
echo json-decode($data,true);
?>