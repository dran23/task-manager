<?php
include 'db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM tasks WHERE id = $id");
$task = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $conn->query("UPDATE tasks SET title='$title', description='$desc' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post">
        <input type="text" name="title" value="<?= htmlspecialchars($task['title']) ?>" required>
        <textarea name="description"><?= htmlspecialchars($task['description']) ?></textarea>
        <button type="submit">Update</button>
    </form>

</body>

</html>