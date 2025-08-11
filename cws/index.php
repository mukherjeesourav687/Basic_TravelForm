<?php
$insert = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "trip"; // ✅ Change to your database name

    // Create connection
    $con = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Collect POST data safely
    $name   = $_POST['name']   ?? '';
    $age    = $_POST['age']    ?? '';
    $gender = $_POST['gender'] ?? '';
    $email  = $_POST['email']  ?? '';
    $phone  = $_POST['phone']  ?? '';
    $other  = $_POST['other']  ?? '';

    // SQL insert query
    $sql = "INSERT INTO trip (name, age, gender, email, phone, other, dt) 
            VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";

    if ($con->query($sql) === TRUE) {
        $insert = true;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg.jpg" alt="Travel">
    <div class="container">
        <h1>Welcome to Travel Form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>

        <?php if ($insert): ?>
            <p class="submitMsg">Thanks for submitting your form!</p>
        <?php endif; ?>

        <form action="" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="number" name="age" placeholder="Age" required>
            <input type="text" name="gender" placeholder="Gender" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <textarea name="other" placeholder="Other info"></textarea>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
