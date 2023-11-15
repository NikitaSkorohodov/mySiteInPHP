<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $books = array();
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
} else {
    echo "Нет данных о книгах в базе данных.";
}

$conn->close();
?>
