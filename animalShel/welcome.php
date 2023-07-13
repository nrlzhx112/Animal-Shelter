<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shelter</title>

    <style>
        body {
            background-image: url("img/img6.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .header-title {
            font-size: 36px;
            margin-bottom: 20px;
            margin-top: 20px;}

        .btn-wrapper {
            margin-top: 20px;
        }

        .btn {
            background-color: sienna;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 10px; /* Add margin to create spacing between buttons */
        }

        .btn:last-child {
            margin-right: 0; /* Remove margin for the last button */
        }

        .btn:hover {
            background-color: tan;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header-title">Welcome To PawFriend Animal Rescue</h1>
        <div class="btn-wrapper">
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
        </div>
    </div>
</body>
</html>
