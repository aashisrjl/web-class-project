<?php
include('../database/Connection.php');
session_start();
if (!isset($_SESSION['email'])) {
    header('Location:../pages/Login.php');
    exit();
}

// Fetch posts from the database
$query = "SELECT p.title, p.description, p.post_date, p.image, u.username , p.pid
          FROM posts p 
          JOIN users u ON p.userId = u.id 
          ORDER BY p.post_date DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - WebClass</title>
    <style>
        /* Add your CSS styles here */
    
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #FFFFFF;
            font-family: Arial, sans-serif;
        }
        /* Header Styles */
        header {
            background-color: #FFFFFF;
            padding: 10px;
            position: fixed;
            top: 0;
            width: 100%;
            border-bottom: 2px solid #007BFF;
        }
        header .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        header h1 {
            color: #007BFF;
            margin: 0;
        }
        header nav a {
            color: #007BFF;
            margin-left: 15px;
            text-decoration: none;
        }
        /* Main Content Styles */
        .container {
            max-width: 1000px;
            margin: 80px auto 20px auto;
            padding: 0 20px;
            margin-bottom: 100px;
        }
        .post-form, .post-list {
            margin-bottom: 50px;
        }
        .post-form h2, .post-list h2 {
            color: #007BFF;
            text-align: center;
        }
        .post-form p {
            color: #000000;
            text-align: center;
            margin-bottom: 10px;
        }
        .post-form button {
            background-color: #007BFF;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .post {
            background-color: #FFFFFF;
            border: 1px solid #007BFF;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .post-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .post-header .avatar {
            width: 40px;
            height: 40px;
            background-color: #007BFF;
            border-radius: 50%;
            margin-right: 10px;
        }
        .post-header .user-info {
            flex-grow: 1;
        }
        .post-header .user-info .username {
            font-weight: bold;
            color: #007BFF;
            margin: 0;
        }
        .post-header .user-info .timestamp {
            color: #666;
            font-size: 12px;
            margin: 0;
        }
        .post-content {
            color: #000000;
            margin-bottom: 10px;
        }
        .post-image {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .post-actions {
            display: flex;
            gap: 10px;
        }
        .post-actions button {
            background-color: #007BFF;
            color: #FFFFFF;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        /* Footer Styles */
        footer {
            background-color: #007BFF;
            color: #FFFFFF;
            padding: 10px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        footer a {
            color: #FFFFFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php include '../components/Header.php'; ?>

    <div class="container">
        <div class="post-form">
            <p>What’s on your mind?</p>
            <a href="AddEditPost.php"><button>Create a Post</button></a>
        </div>

        <div class="post-list">
            <h2>Newsfeed</h2>
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <div class="post">
                        <div class="post-header">
                            <div class="avatar"></div>
                            <div class="user-info">
                                <p class="username"> <?= htmlspecialchars($row['username']) ?> </p>
                                <p class="timestamp"> <?= htmlspecialchars($row['post_date']) ?> </p>
                            </div>
                        </div>
                        <div class="post-content">
                            <p><?= nl2br(htmlspecialchars($row['description'])) ?></p>
                        </div>
                        <?php if ($row['image']): ?>
                            <img src="../uploads/<?= htmlspecialchars($row['image']) ?>" alt="Post Image" class="post-image">
                        <?php endif; ?>
                        <div class="post-actions">
                        <a href="AddEditPost.php?postId=<?php echo htmlspecialchars($row['pid']); ?>">
                             <button>Edit</button></a>
                        <a href="../process/DeletePostProcess.php?id=<?php echo htmlspecialchars($row['pid']); ?>"> 
                            <button>Delete</button>
                        </a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No posts yet. Be the first to post!</p>
            <?php endif; ?>
        </div>
    </div>

    <?php include '../components/Footer.php'; ?>
</body>
</html>
