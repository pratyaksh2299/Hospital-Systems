<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Top styles */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .top-bar {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }
.login-form input[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}
.login-form input[type="submit"]:hover {
  cursor: pointer;
}
.login-form input[type="text"]:hover,
.login-form input[type="password"]:hover {
  border: 1px solid #333;
}
.login-form label {
  font-size: 18px;
  color: #333;
}
.login-form {
  background-color: #f2f2f2;
  border-radius: 10px;
}

    .top-bar h1 {
      margin: 0;
      font-size: 24px;
    }

    /* Login form styles */
    .login-form {
      margin: 50px auto;
      width: 400px;
      border: 1px solid #ddd;
      padding: 20px;
    }

    .login-form label {
      display: block;
      margin-bottom: 10px;
      font-size: 16px;
      font-weight: bold;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
    }

    .login-form input[type="submit"] {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    .login-form input[type="submit"]:hover {
      background-color: #555;
    }

    .error-message {
      color: red;
      margin-top: 10px;
    }
    .button{
        left:130px;
        position: relative;
    }
  </style>
</head>
<body>
  <div class="top-bar">
    <h1>Login</h1>
  </div>
  <form class="login-form" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" class="button"value="Login">
    <div class="error-message"></div>
  </form>
</body>
</html>
