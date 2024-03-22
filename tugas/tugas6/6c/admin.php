<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman_Admin</title>
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
            height: 50vh;
            width: 50%;
            color: white;
        }
        
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            text-align: center;
            background-color: green;
            width: 80%;
            height: 80%;
            font-size: 1.5rem;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 20px;
        }

        button {
            font-size: 1.2rem;
            background-color: lightblue;
            border-radius: 10px;
            padding: 5px;
            border: 2px solid black;
            width: 100px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: black;
        }  

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h2>Selamat datang Admin</h2>        
            <button><a href="login.php">Logout</a></button>
        </div>
    </div>
</body>
</html>