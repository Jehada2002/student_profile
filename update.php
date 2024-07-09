<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $IDNumber = $_POST['id_number'];
    $FirstName = $_POST['first_name'];
    $MiddleName = $_POST['middle_name'];
    $LastName = $_POST['last_name'];
    $Program = $_POST['program'];
    $Year = $_POST['year'];
    $FullAddress = $_POST['full_address'];
    $PhoneNumber = $_POST['phone_number'];
    $Email = $_POST['email'];
    $Age = $_POST['age'];
    $BirthDate = $_POST['birth_date'];
    $Gender = $_POST['gender'];
    $CivilStatus = $_POST['civil_status'];
    $UpdateDate = date('Y-m-d H:i:s'); // Set the current date and time

    $sql = "UPDATE students SET IDNumber='$IDNumber', FirstName='$FirstName', MiddleName='$MiddleName', LastName='$LastName', Program='$Program', Year='$Year', FullAddress='$FullAddress', PhoneNumber='$PhoneNumber', Email='$Email', Age='$Age', BirthDate='$BirthDate', Gender='$Gender', CivilStatus='$CivilStatus', UpdateDate='$UpdateDate' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $sql = "SELECT * FROM students WHERE id=$id";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Profile</title>
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
    <h2>Update Profile</h2>
    <form method="POST" action="">
        <label for="id_number">ID Number</label>
        <input type="text" id="id_number" name="id_number" value="<?php echo $student['IDNumber']; ?>" required>

        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $student['FirstName']; ?>" required>

        <label for="middle_name">Middle Name</label>
        <input type="text" id="middle_name" name="middle_name" value="<?php echo $student['MiddleName']; ?>">

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $student['LastName']; ?>" required>

        <label for="program">Program</label>
        <input type="text" id="program" name="program" value="<?php echo $student['Program']; ?>" required>

        <label for="year">Year</label>
        <input type="text" id="year" name="year" value="<?php echo $student['Year']; ?>" required>

        <label for="full_address">Full Address</label>
        <input type="text" id="full_address" name="full_address" value="<?php echo $student['FullAddress']; ?>" required>

        <label for="phone_number">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number" value="<?php echo $student['PhoneNumber']; ?>" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $student['Email']; ?>" required>

        <label for="age">Age</label>
        <input type="number" id="age" name="age" value="<?php echo $student['Age']; ?>" required>

        <label for="birth_date">Birth Date</label>
        <input type="date" id="birth_date" name="birth_date" value="<?php echo $student['BirthDate']; ?>" required>

        <label for="gender">Gender</label>
        <select id="gender" name="gender" required>
            <option value="Male" <?php if($student['Gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if($student['Gender'] == 'Female') echo 'selected'; ?>>Female</option>
            <option value="Other" <?php if($student['Gender'] == 'Other') echo 'selected'; ?>>Other</option>
        </select>

        <label for="civil_status">Civil Status</label>
        <select id="civil_status" name="civil_status" required>
            <option value="Single" <?php if($student['CivilStatus'] == 'Single') echo 'selected'; ?>>Single</option>
            <option value="Married" <?php if($student['CivilStatus'] == 'Married') echo 'selected'; ?>>Married</option>
            <option value="Divorced" <?php if($student['CivilStatus'] == 'Divorced') echo 'selected'; ?>>Divorced</option>
            <option value="Widowed" <?php if($student['CivilStatus'] == 'Widowed') echo 'selected'; ?>>Widowed</option>
        </select>

        <input type="submit" value="Update Profile">
        <input type="submit" href="index.php" value="Back to Home">
    </form>
    
</div>
</body>
</html>
