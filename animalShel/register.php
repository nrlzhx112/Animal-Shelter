
<?php
    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: register.php");
        die();
    }

    include 'includes/connection.php';
    $msg = "";

    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
            $msg = "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
        } else {
            if ($password === $confirm_password) {
                $sql = "INSERT INTO users (name, email, password) VALUES ('{$name}', '{$email}', '{$password}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "</div>";
                    $msg = "<div class='alert alert-info'>Successfully registred account.</div>";
                } else {
                    $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
            }
        }
    }
?>







<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  
    <style>
        .container {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f2f2f2;
}

h2 {
  text-align: center;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: sienna;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: tan;
}

    </style>

</head>
<body>
  <div class="container">
    <h2>Registration Form</h2>
    <form action="" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" value="<?php if (isset($_POST['submit'])) { echo $name; } ?>" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
        <!-- <input type="text" name="email" id="email" placeholder="Email">   -->
    </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
      </div>
      <div class="form-group" style="text-align: center;">
        <!-- <input type="submit" value="Register"> -->
        <input name="submit" type="submit"></input>
      </div>
    </form>
    <div class="social-icons">
        <p style="text-align: center;">Have an account? <a href="login.php">Login</a>.</p>
    </div>
  </div>
</body>
</html>




