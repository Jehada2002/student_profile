<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE Id=$id";
$result = $conn->query($sql);
$student = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1>Student Profile Management System</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="create.php">Add Profile</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="crud-form">
    <h2>View Profile</h2>
    <p><b>ID Number:</b> <?php echo $student['IDNumber']; ?></p>
    <p><b>First Name:</b> <?php echo $student['FirstName']; ?></p>
    <p><b>Middle Name:</b> <?php echo $student['MiddleName']; ?></p>
    <p><b>Last Name:</b> <?php echo $student['LastName']; ?></p>
    <p><b>Program:</b> <?php echo $student['Program']; ?></p>
    <p><b>Year:</b> <?php echo $student['Year']; ?></p>
    <p><b>Full Address:</b> <?php echo $student['FullAddress']; ?></p>
    <p><b>Phone Number:</b> <?php echo $student['PhoneNumber']; ?></p>
    <p><b>Email:</b> <?php echo $student['Email']; ?></p>
    <p><b>Age:</b> <?php echo $student['Age']; ?></p>
    <p><b>Birth Date:</b> <?php echo $student['BirthDate']; ?></p>
    <p><b>Gender:</b> <?php echo $student['Gender']; ?></p>
    <p><b>Civil Status:</b> <?php echo $student['CivilStatus']; ?></p>
    <p><b>Register Date:</b> <?php echo $student['RegisterDate']; ?></p>
    <p><b>Update Date:</b> <?php echo $student['UpdateDate']; ?></p>
</div>
</body>
</html>
