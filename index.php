<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: beige;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 400px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo img {
      width: 150px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group input[type="textarea"],
    .form-group input[type="password"] {
      width: 90%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin: 0px auto;
    }

    .form-group button {
      padding: 10px 20px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .form-group button:hover {
      background-color: #2980b9;
    }

    .form-group button[type="reset"] {
      background-color: #e74c3c;
      margin-left: 10px;
    }

    .form-group button[type="reset"]:hover {
      background-color: #c0392b;
    }
  </style>
</head>
<body>

<div class="container">


  <h1>Registration Form</h1>

  <form action="script.php" method="POST">
    <div class="form-group">
      <label for="first-name">First Name</label>
      <input type="text" id="first-name" name="first-name" placeholder="Enter your first name">
    </div>

    <div class="form-group">
      <label for="last-name">Last Name</label>
      <input type="text" id="last-name" name="last-name" placeholder="Enter your last name">
    </div>

    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="text" id="email" name="email" placeholder="Enter your email address">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password">
    </div>

    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="Enter your address">
    </div>

    <div class="form-group">
      <label for="mobile">Mobile No</label>
      <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile number">
    </div>


    <div class="form-group">
      <button type="submit">Submit</button>
      <button type="reset">Reset</button>
    </div>
  </form>
</div>

</body>
</html>