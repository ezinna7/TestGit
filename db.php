 <?php

// Testing the database connection

define('DB_NAME', 'rate_calc');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$link) {
  die('Could not connect: ' . mysqli_connect_error());
}

$db_selected = mysqli_select_db($link, DB_NAME);

if (!$db_selected){
  die('Can\'t use' . DB_NAME . ': ' . mysqli_error($link));
}
 echo 'Connected successfully';
?>