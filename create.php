<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_number = $_POST['id_number'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $program = $_POST['program'];
    $year = $_POST['year'];
    $full_address = $_POST['full_address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $birth_date = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $civil_status = $_POST['civil_status'];
    $register_date = $_POST['register_date'];
    $update_date = date('Y-m-d');

    $sql = "INSERT INTO students (IDNumber, FirstName, MiddleName, LastName, Program, Year, FullAddress, PhoneNumber, Email, Age, BirthDate, Gender, CivilStatus, RegisterDate, UpdateDate)
            VALUES ('$id_number', '$first_name', '$middle_name', '$last_name', '$program', '$year', '$full_address', '$phone_number', '$email', '$age', '$birth_date', '$gender', '$civil_status', '$register_date', '$update_date')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Profile</title>
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
    <h2>Add Profile</h2>
    <form method="POST" action="">
        <label for="id_number">ID Number</label>
        <input type="text" id="id_number" name="id_number" required>

        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="middle_name">Middle Name</label>
        <input type="text" id="middle_name" name="middle_name">

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="program">Program</label>
        <input type="text" id="program" name="program" required>

        <label for="year">Year</label>
        <input type="text" id="year" name="year" required>

        <label for="full_address">Full Address</label>
        <input type="text" id="full_address" name="full_address" required>

        <label for="phone_number">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="age">Age</label>
        <input type="number" id="age" name="age" required>

        <label for="birth_date">Birth Date</label>
        <input type="date" id="birth_date" name="birth_date" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="civil_status">Civil Status</label>
        <select id="civil_status" name="civil_status" required>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Divorced">Divorced</option>
            <option value="Widowed">Widowed</option>
        </select>

        <label for="register_date">Register Date</label>
        <input type="date" id="register_date" name="register_date" required>

        <input type="submit" value="Add Profile">
    </form>
   
</div>
</body>
</html>
