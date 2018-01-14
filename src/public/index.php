<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello World!</title>
</head>
<body>

<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../..');
$dotenv->load();

$host = getenv('MYSQL_HOST');
$database = getenv('MYSQL_NAME');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_ROOT_PASSWORD');

$connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
$query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
$tables = $query->fetchAll(PDO::FETCH_COLUMN);

if (empty($tables)) {
  echo "<p>There are no tables in database \"{$database}\".</p>";
} else {
  echo "<p>Database \"{$database}\" has the following tables:</p>";
  echo "<ul>";

  foreach ($tables as $table) {
    echo "<li>{$table}</li>";
  }

  echo "</ul>";
}

?>

</body>
</html>
