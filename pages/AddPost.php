<?php include '../components/Header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post - WebClass</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #FFFFFF;
            font-family: Arial, sans-serif;
        }
        /* Add Post Form Styles */
        .add-post-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 120px); /* Adjust for header/footer */
            padding: 20px;
            margin-top: 60px; /* Space for fixed header */
        }
        .add-post-form {
            background-color: #FFFFFF;
            padding: 20px;
            border: 2px solid #007BFF;
            border-radius: 5px;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .add-post-form h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }
        .add-post-form input,
        .add-post-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #007BFF;
            border-radius: 3px;
        }
        .add-post-form textarea {
            resize: vertical;
            height: 150px;
        }
        .add-post-form input[type="file"] {
            border: none;
            padding: 0;
        }
        .add-post-form button {
            background-color: #007BFF;
            color: #FFFFFF;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Add Post Form -->
    <div class="add-post-container">
        <div class="add-post-form">
            <h2>Add New Post</h2>
            <form action="../process/add_post_process.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="title" placeholder="Post Title" required>
                <input type="date" name="date" required>
                <textarea name="description" placeholder="Post Description" required></textarea>
                <input type="file" name="image" accept="image/*" required>
                <button type="submit">Submit Post</button>
            </form>
        </div>
    </div>

    <?php include '../components/Footer.php'; ?>
</body>
</html>