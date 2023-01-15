<?php
/**
 * Returns the list of names.
 */
require 'database.php';

$names = [];
$sql = "SELECT id, name FROM Names";

if($result = mysqli_query($con, $sql)) {
  $i = 0;

  while($row = mysqli_fetch_assoc($result)) {
    $names[$i]['id']    = $row['id'];
    $names[$i]['name'] = $row['name'];
    $i++;
  }

  echo json_encode($names);
}
else {
  http_response_code(404);
}
