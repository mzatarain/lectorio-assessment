<?php
#----------- MySQL--------#

$mysqli = new mysqli("mysql", "root", "example", "lectorio_assessment");

$sql = "INSERT INTO users (LastName, FirstName, Address, City) VALUES('Rodriguez Zatarain', 'Manuel', 'Test Address 1234', 'Mexicali')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (LastName, FirstName, Address, City) VALUES('Williams', 'John', 'Fake Avenue 4353', 'Las Vegas')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (LastName, FirstName, Address, City) VALUES('Schneider', 'Peter', 'Sample Street 8973', 'Munich')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (LastName, FirstName, Address, City) VALUES('Gutierrez', 'Maria', 'Imaginary Street 2091', 'Barcelona')";
$result = $mysqli->query($sql);

$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}
echo "<h1>#----------- MySQL--------#</h1>";
echo "<br>";
echo "<b>Here are the users in MySQL db:</b>";
echo "<br>";
foreach ($users as $user) {
    echo "<br>";
    echo $user->LastName . " " . $user->FirstName . ", " . $user->Address . ", " . $user->City;
    echo "<br>";
}

#---------------MongoDB----------#

// Manager Class
$manager = new MongoDB\Driver\Manager("mongodb://root:password@mongo:27017");
//var_dump($manager);
// Query Class
$query = new MongoDB\Driver\Query(array('age' => ['$gt' => 29]));

// Output of the executeQuery will be object of MongoDB\Driver\Cursor class
$cursor = $manager->executeQuery('testDb.testColl', $query);

echo "<br>";
echo "<br>";
echo "<h1>#---------------MongoDB----------#</h1>";
echo "<br>";
echo "<b>Here are the users in MongoDB:</b>";
echo "<br>";

// Convert cursor to Array and print result
echo '<pre>';
print_r($cursor->toArray());
echo '</pre>';
