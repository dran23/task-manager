<?php include 'db.php';

$id = $_GET['id'] ?? 0; //For retrieving data 
$conn->query("DELETE FROM tasks WHERE id=$id");
header("Location: index.php");

?>