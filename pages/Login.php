<?php include '../components/Header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - WebClass</title>
    <style>
        body {
            background-color: #FFFFFF;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 120px); /* Adjust for header/footer */
        }
        .login-form {
            background-color: #FFFFFF;
            padding: 20px;
            border: 2px solid #007BFF;
            border-radius: 5px;
            text-align: center;
        }
        .login-form h2 {
            color: #007BFF;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #007BFF;
            border-radius: 3px;
        }
        .login-form button {
            background-color: #007BFF;
            color: #FFFFFF;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="../process/login_process.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <?php include '../components/Footer.php'; ?>
</body>
</html>