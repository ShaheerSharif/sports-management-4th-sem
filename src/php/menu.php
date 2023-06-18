<!DOCTYPE html>
<html>

<head>
    <title>Sports Management System - Admin Menu</title>
    <style>
        @import url('./global.css');

        .menu-options {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 50px;
        }

        .menu-option {
            width: 200px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: #FF5500;
            color: #FFFFFF;
            margin: 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .menu-option:hover {
            background-color: #FFBB00;
        }

        .logout-button {
            display: block;
            width: 120px;
            margin: 20px auto;
            text-align: center;
            background-color: #333;
            color: #FFFFFF;
            padding: 10px;
            text-decoration: none;
        }

        .logout-button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <h1>Admin Menu</h1>
    <div class="menu-options">
        <a href="viewEvents.php" class="menu-option">View Events</a>
        <a href="insertEvent.php" class="menu-option">Insert Event</a>
        <a href="update.php" class="menu-option">Update Event</a>
        <a href="delete.php" class="menu-option">Delete Event</a>
        <a href="admin.php" class="menu-option">View Admins</a>
        <a href="insertAdmin.php" class="menu-option">Insert Admin</a>
        <a href="updateAdmin.php" class="menu-option">Update Admin</a>
        <a href="deleteAdmin.php" class="menu-option">Delete Admin</a>
    </div>
    <a href="logout.php" class="logout-button">Logout</a>
</body>

</html>
