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

require __DIR__ . '/../bootstrap.php';

$host = getenv('MYSQL_HOST');
$database = getenv('MYSQL_NAME');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_ROOT_PASSWORD');

$connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
$query = $connection->query("SELECT `migration_name` FROM `phinxlog`");
$migrations = $query->fetchAll(PDO::FETCH_COLUMN);

if (empty($migrations)) {
  echo "<p>There are no migrations in database \"{$database}\".</p>";
} else {
  echo "<p>Database \"{$database}\" has the following migrations:</p>";
  echo "<ul>";

  foreach ($migrations as $migration) {
    echo "<li>{$migration}</li>";
  }

  echo "</ul>";
}

?>

</body>
</html>
