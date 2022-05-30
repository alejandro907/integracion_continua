<?php

// check the MySQL connection status
$conn = new mysqli("base_de_datos:3306", "root", "123", "integracion_continua");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to MySQL server successfully! <br><br><br/>";

    $result = $conn->query("SELECT * FROM user");

    foreach($result as $row) {
        echo $row['name'] . " - " . $row['lastname'] . "<br>";
    }

}