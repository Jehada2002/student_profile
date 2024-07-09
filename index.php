<?php
include 'db.php';
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this profile?")) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
</head>
<body>
<header>
    <div class="container">
        <div id="branding">
            <h1>Student Profile Management System</h1>
        </div>
        <nav>
            <ul>
                <li class="current"><a href="index.php">Home</a></li>
                <li><a href="create.php">Add Profile</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="table-container">
    <h2>Student Profiles</h2>
    <table>
    <thead>
            <tr>
                <th>ID Number</th>
                <th>Full Name</th>
                <th>Update Date</th>
                <th>Register Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                <td><?php echo $row['IDNumber']; ?></td>
                    <td><?php echo $row['FirstName'] . ' ' . $row['MiddleName'] . ' ' . $row['LastName']; ?></td>
                    <td><?php echo $row['UpdateDate']; ?></td>
                    <td><?php echo $row['RegisterDate']; ?></td>
                    <td>
                        <a href="read.php?id=<?php echo $row['Id']; ?>">View</a><br>
                        <a href="update.php?id=<?php echo $row['Id']; ?>">Edit</a><br>
                        <a href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['IDNumber']; ?>)">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
