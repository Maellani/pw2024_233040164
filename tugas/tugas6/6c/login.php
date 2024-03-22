<?php 

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman_Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            width: 80vh;
            color: black;
        }
        
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: green;
            width: 80%;
            height: 80%;
            font-size: 1.5rem;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 10px;
        }

        h1 {
            color: black;
        }

        input {
            margin-top: 10px;
            border: 1px solid black;
            width: 220px;
            height: 25px;
            border-radius: 5px;
        }

        button {
            margin-top: 15px;
            cursor: pointer;
            font-size: 1.2rem;
            background-color: lightblue;
            border-radius: 10px;
            padding: 5px;
            border: 2px solid black;
        }
        
        p {
            color: lightblue;
        }

        .profile {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            background-image: url(img/foto.jpeg);
            background-size: cover;
            background-position: center;
            border: 3px solid black;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="content">
        <div class="profile"></div>
                <h2><i>Login Admin</i></h2>
            <?php if (isset($error)) : ?>
                <p>username / password anda salah <?= $_POST["username"]; ?></p>
            <?php endif; ?>
            <form action="" method="post">
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                <br>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>