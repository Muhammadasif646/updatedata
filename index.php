<?php
include("config.php");

if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

   
    $sql = "INSERT INTO students (name, age, email) VALUES ('$name', '$age', '$email')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

  
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<h1>Add Student Data</h1>
<a href="show.php" class="btn btn-warning">View Records</a>
<form action="index.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br><br>

    <label for="age">Age:</label>
    <input type="number" name="age" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br><br>

    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>
