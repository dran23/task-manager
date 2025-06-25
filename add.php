<?php include 'db.php' ?>

<!-- 

$_SERVER — this is a superglobal variable in PHP that provides information 
about headers, paths, and script locations. It's an associative array 
containing server and execution environment information.

 -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // GET, POST, etc. 
    $title = $_POST['title'];

    /*
    $_POST is another superglobal array in PHP that holds data 
    sent to the server via HTTP POST method — typically from an HTML form.
    */

    $desc = $_POST['description']; //For sending data

    $conn->query("INSERT INTO tasks (title, description) VALUES('$title', '$desc')");

    /*
    The header() function in PHP is used to send raw HTTP headers to the browser before any output is sent. 
    It's often used to:
            Redirect users
            Set content types (e.g. JSON, CSV, PDF)
            Control caching
            Send status codes 
    */


    header("Location: index.php"); // Redirect users
}
?>

<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post">
        <input type="text" name="title" placeholder="Task title" required>
        <textarea name="description" placeholder="Description"></textarea>
        <button class="submit">Add Task</button>
    </form>
</body>

</html>