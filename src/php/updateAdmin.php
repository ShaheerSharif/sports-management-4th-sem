<?php
$db_host = 'localhost';
$db_name = 'sport';
$db_user = 'root';
$db_pass = '';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adminId = $_POST['adminId'];
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    $sql = "UPDATE login SET uname='$newUsername', pwd='$newPassword' WHERE id=$adminId";

    if ($conn->query($sql) === true) {
        // Redirect back to menu.php after update
        header("Location: menu.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT id, uname FROM login";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sports Management System - Update Admin</title>
    <style>
        @import url('./global.css');

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .form-input {
            margin-bottom: 20px;
        }

        .form-input label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input select {
            padding: 5px;
            width: 300px;
            background-color: #333;
            color: #fff;
            border: none;
        }

        .form-input input {
            padding: 5px;
            width: 300px;
            background-color: #333;
            color: #fff;
            border: none;
        }

        .update-btn {
            display: flex;
            justify-content: center;
        }

        .button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #FF5500;
            color: #FFFFFF;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #FFBB00;
        }

        .back-button {
            display: block;
            width: 120px;
            margin-top: 20px;
            text-align: center;
            background-color: #333;
            color: #FFFFFF;
            padding: 10px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <h1>Update Admin</h1>
    <div class="container">
        <form method="POST" action="">
            <div class="form-input">
                <label for="adminId">Select Admin:</label>
                <select id="adminId" name="adminId" required>
                    <option value="">Select an admin</option>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id'] . "'>" . $row['uname'] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-input">
                <label for="newUsername">New Username:</label>
                <input type="text" id="newUsername" name="newUsername" required>
            </div>
            <div class="form-input">
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" required>
            </div>
            <div class="update-btn">
                <button type="submit" class="button">Update</button>
            </div>
        </form>
        <a href="menu.php" class="back-button">Back to Menu</a>
    </div>
</body>

</html>
