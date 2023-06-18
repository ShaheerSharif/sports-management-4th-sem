<!DOCTYPE html>
<html>

<head>
    <title>About Us & Contact Us</title>
    <style>
        @import url('./global.css');

        h1 {
            color: #FF5500;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        p {
            line-height: 1.5;
        }

        .back-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .back-button {
            margin-top: 20px;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>About Us</h1>
        <p>
            <?php
            $companyName = "Sports Management Solutions";
            $missionStatement = "Welcome to our website! We are a dedicated team passionate about providing the best sports management solutions. Our mission is to simplify the process of managing sports events, venues, and administration.";
            $valueProposition = "Whether you are an event organizer, venue owner, or administrator, our platform offers intuitive features and tools to streamline your operations.";
            $experience = "With years of experience in the industry, we understand the challenges faced by sports organizations. Our goal is to empower you with efficient and effective solutions, allowing you to focus on what matters most: delivering exceptional sporting experiences to athletes and spectators.";
            $features = "Our platform offers a range of features, including event management, venue booking, registration and ticketing, reporting and analytics, and much more. We continually strive to enhance our services and deliver innovative solutions that cater to the evolving needs of the sports industry.";
            $customerService = "Thank you for choosing " . $companyName . ". We are committed to supporting your success and providing excellent customer service. If you have any questions or feedback, please don't hesitate to contact us. We look forward to serving you and being a part of your sports management journey.";

            echo $missionStatement;
            ?>
        </p>
        <p>
            <?php
            echo $valueProposition;
            ?>
        </p>
        <p>
            <?php
            echo $experience;
            ?>
        </p>
        <p>
            <?php
            echo $features;
            ?>
        </p>
        <p>
            <?php
            echo $customerService;
            ?>
        </p>

        <h1>Contact Us</h1>
        <p>
            If you have any questions or inquiries, please feel free to contact us using the following information:
        </p>
        <ul>
            <li>Email: info@sportsmanagement.com</li>
            <li>Phone: +1 123-456-7890</li>
            <li>Address: 123 Sports Street, City, Country</li>
        </ul>
        <div class="back-container">
            <a href="index.php" class="back-button">Back to Menu</a>
        </div>
    </div>
</body>

</html>
