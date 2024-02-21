<!DOCTYPE html>
<html lang="en">
<head>
<style>
        body {
          font-family: Arial, sans-serif;
          background-color: #f2f2f2;
          margin: 0;
          padding: 0;
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          flex-direction: column; /* Added to arrange elements vertically */
        }

        h1 {
          text-align: center;
          color: #333;
          margin-bottom: 20px; /* Added margin to separate h1 from the form */
        }

        form {
          background-color: #fff;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
          display: block;
          margin-bottom: 8px;
          color: #555;
        }

        input {
          width: 100%;
          padding: 8px;
          margin-bottom: 16px;
          box-sizing: border-box;
        }

        input[type="submit"] {
          background-color: #4caf50;
          color: #fff;
          cursor: pointer;
        }

        input[type="submit"]:hover {
          background-color: #45a049;
        }
    </style>
</head>
<body>
  <h1>Lethbridge Car Rental</h1>
  <form action="pass.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" size="8" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" size="20" required>

    <input type="submit" value="Login">
  </form>
</body>
</html>

