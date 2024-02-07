<?php

define("DB_SERVERNAME", "Localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db-univeristy");
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn && $conn->connect_error) {
    echo "errore connessione" . $conn->connect_error;
}
$sql = "SELECT name, surname
        FROM students
        WHERE name LIKE 'S%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

            echo $row["name"] . " " . $row["surname"] . "<br>";
    }
    echo $result-> num_rows;

}