<html>
<head>
  <title>Signup Form</title>
</head>
<body>
  <h2>Signup Form</h2>
  <form action="/signup" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    <input type="submit" value="Sign up">
  </form>
</body>
</html>