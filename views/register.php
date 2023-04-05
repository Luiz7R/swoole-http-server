<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style>
    body {
      background-color: #006b47;
      font-family: Arial, Helvetica, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: #6ca390;
      padding: 50px;
      min-width: 17rem;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    h1 {
      font-size: 2rem;
      margin-bottom: 20px;
      text-align: center;
    }

    input[type="text"], input[type="email"], input[type="password"] {
      display: block;
      margin: 10px auto;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      border: none;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    input[type="submit"] {
      display: block;
      margin: 20px auto;
      padding: 10px 20px;
      border-radius: 5px;
      border: none;
      background-color: #043323;
      color: #fff;
      font-size: 1.2rem;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
      background-color: #3e8e58;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <h1>Register</h1>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Register">
  </form>
</body>
</html>
