
<?php

    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) 
    {

        //buat untuk detect user akan redirect ke mana after refresh
        header("Location: login.php");
        die();
    }

    include 'includes/connection.php';
    $msg = "";

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        //$userType = mysqli_real_escape_string($conn, $_POST['userType']);

        $sql = "SELECT * FROM user WHERE email='{$email}' AND password='{$password}'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

                $_SESSION['SESSION_EMAIL'] = $email;

                //buat if else userType

                //admin
                if($email == "izzahbalqis01@gmail.com")
                {
                    header("Location: admin/admindashboard.php");
                }
                else
                {
                    header("Location: user/userdashboard.php");
                }

        } else {
            $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>

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
    <h2>Login Form</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
            <!-- <input type="text" name="email" id="email" placeholder="Email">   -->
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="form-group" style="text-align: center;">
            <!-- <input type="submit" value="Register"> -->
            <input name="submit" type="submit"></input>
        </div>
    </form>
    <div class="social-icons">
        <p style="text-align: center;">Create Account? <a href="register.php">Register</a>.</p>
    </div>
  </div>
</body>
</html>
