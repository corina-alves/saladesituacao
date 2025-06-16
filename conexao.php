<?php
$conn = new mysqli("localhost", "root", "", "sssp2");

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
