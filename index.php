<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-Manager</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="task-head">
            <h1>Task List</h1>
            <a href="add.php">Add</a>
        </div>
        <div class="task-body">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                <?php
                $result = $conn->query("SELECT * FROM tasks");
                while($row= $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['title'] ?></td>
                    <td><?= $row['description'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                    </td>
                </tr>
               <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>

</html>