<!DOCTYPE html>
<html>

<head>
    <title>Sports Management System</title>
    <style>
        @import url('./global.css');

        h1 {
            color: #FF5500;
            text-align: center;
        }

        .options {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }

        .options a {
            display: block;
            width: 200px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: #FF5500;
            color: #FFFFFF;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .options a:hover {
            background-color: #FFBB00;
        }

        .insert-container {
            display: flex;
            justify-content: center;
        }

        .insert-btn {
            margin-top: 30px;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
        }

        .insert-btn:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <h1>Sports Management System</h1>
    <p>Welcome To Our Sports Management System</p>
    <div class="options">
        <a href="view.php">View Events</a>
        <a href="login.php">Admin Login</a>
        <a href="aboutUs.php">About Us</a>
    </div>
    <div class="insert-container">
        <a href="insert.php" class="insert-btn">Book An Event</a>
    </div>
</body>

</html>
