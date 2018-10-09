<?php
$servername = "localhost";
$username = "root";
$password = "root";
try {
  $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'Connected successfully<br/><hr/><br/>';
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
$sql = 'SELECT fname, lname, phone FROM tbl1 ORDER BY lname'; ?>

<table border="1">
  <tr>
    <th>Fname:</th>
    <th>Lname:</th>
    <th>Phone:</th>
  </tr>

<?php foreach ($conn->query($sql) as $row) : ?>
  <tr>
    <td><?= $row['fname']; ?></td>
    <td><?= $row['lname']; ?></td>
    <td><?= $row['phone']; ?></td>
  </tr>
<?php endforeach ?>

</table>

<!--
 Connect to SQLite using PHP
 https://www.a2hosting.com/kb/developer-corner/sqlite/connect-to-sqlite-using-php

 PDO Link:
 https://www.w3schools.com/php/php_mysql_connect.asp
  
-->
