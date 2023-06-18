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
  $eventId = $_POST['eventId'];
  $eventName = $_POST['eventName'];
  $sportName = $_POST['sportName'];
  $venueAddress = $_POST['venueAddress'];
  $startingDate = $_POST['startingDate'];
  $endDate = $_POST['endDate'];
  $price = $_POST['price'];

  $sql = "UPDATE venue SET event_name='$eventName', sport_name='$sportName', venue_address='$venueAddress', starting_date='$startingDate', end_date='$endDate', price='$price' WHERE id=$eventId";

  if ($conn->query($sql) === true) {
    // Redirect back to menu.php after update
    header("Location: menu.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$sql = "SELECT * FROM venue";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Sports Management System - Update Event</title>
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

    .form-input input,
    .form-input textarea,
    .form-input select {
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
  <h1>Update Event</h1>
  <div class="container">
    <form method="POST" action="">
      <div class="form-input">
        <label for="eventId">Select Event:</label>
        <select id="eventId" name="eventId" required>
          <option value="">Select an event</option>
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<option value='" . $row['id'] . "'>" . $row['event_name'] . "</option>";
            }
          }
          ?>
        </select>
      </div>
      <div class="form-input">
        <label for="eventName">Event Name:</label>
        <input type="text" id="eventName" name="eventName" required>
      </div>
      <div class="form-input">
        <label for="sportName">Sport Name:</label>
        <input type="text" id="sportName" name="sportName" required>
      </div>
      <div class="form-input">
        <label for="venueAddress">Venue Address:</label>
        <textarea id="venueAddress" name="venueAddress" required></textarea>
      </div>
      <div class="form-input">
        <label for="startingDate">Starting Date:</label>
        <input type="date" id="startingDate" name="startingDate" required>
      </div>
      <div class="form-input">
        <label for="endDate">End Date:</label>
        <input type="date" id="endDate" name="endDate" required>
      </div>
      <div class="form-input">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" min="0" required>
      </div>
      <div class="update-btn">
        <button type="submit" class="button">Update</button>
      </div>
    </form>
    <a href="menu.php" class="back-button">Back to Menu</a>
  </div>
</body>

</html>
