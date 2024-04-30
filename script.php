<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }


     
    </style>
</head>

<body>
    <div class="container">
        <h2>Registration Details</h2>
        <p>Welcome <?php echo $_POST["first-name"]; ?></p>
        <p>Your last name is: <?php echo $_POST["last-name"]; ?></p>
        <p>Your email address is: <?php echo $_POST["email"]; ?></p>
        <p>Your Password is: <?php echo $_POST["password"]; ?></p>
        <p>Your Address is: <?php echo $_POST["address"]; ?></p>
        <p>Your Mobile no is: <?php echo $_POST["mobile"]; ?></p>
    </div>
</body>

</html>
