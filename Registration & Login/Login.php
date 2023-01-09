<html>
<head>
  <style>
    /* Add some style to the page */
    body {
      background-color: black;
      color: green;
      font-family: monospace;
      text-align: center;
    }
    .login-box {
      display: inline-block;
      background-color: black;
      border: 1px solid green;
      border-radius: 5px;
      padding: 20px;
      width: 300px;
      text-align: left;
    }
    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid green;
      border-radius: 5px;
      font-size: 16px;
    }
    .login-box input[type="submit"] {
      background-color: green;
      color: black;
      font-size: 16px;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .login-box input[type="submit"]:hover {
      background-color: black;
      color: green;
    }
  </style>
</head>
<body>
  <!-- Display the animated terminal background -->
  <div id="terminal"></div>

  <!-- Display the login box -->
  <div class="login-box">
    <!-- Display the login form -->
    <form method="post" action="login.php">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit" name="login" value="Log In">
    </form>
  </div>
  </script>
</body>
</html>

       
