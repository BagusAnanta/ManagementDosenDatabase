<?php

require_once('Connection.php');

$result = array();

// for now, we learn to read a database and after we can image how database read, we can modification a code in future
$query = mysqli_query($CON,"SELECT * FROM dosen ORDER BY NIDN DESC");

while($row = mysqli_fetch_assoc($query)){
    $result[] = $row;
}

// echo json_encode(array($result));
echo json_encode($result);

?>