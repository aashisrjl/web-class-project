<?php include '../components/Header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - WebClass</title>
    <style>
        body {
            background-color: #FFFFFF;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 120px);
        
        }
        .register-form {
            background-color: #FFFFFF;
            padding: 20px;
            border: 2px solid #007BFF;
            border-radius: 5px;
            text-align: center;
        }
        .register-form h2 {
            color: #007BFF;
        }
        .register-form input, .register-form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #007BFF;
            border-radius: 3px;
        }
        .register-form button {
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
    <div class="register-container">
        <div class="register-form">
            <h2>Register</h2>
            <form action="../process/RegisterProcess.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="date" name="dob" required>
                <select name="gender" required>
                    <option value="" disabled selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
    <?php include '../components/Footer.php'; ?>
</body>
</html>