<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - WebClass</title>
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
    <!-- Header -->
    <?php include '../components/Header.php'; ?>

    <!-- Main Content -->
    <div class="container">
        <!-- Form to Add a New Post (Static) -->
        <div class="post-form">
            <p>Whats on your mind ?</p>
            <a href="AddPost.php"><button>Create a Post</button></a>
        </div>

        <!-- Newsfeed Posts -->
        <div class="post-list">
            <h2>Newsfeed</h2>
            <!-- Post 1 -->
            <div class="post">
                <div class="post-header">
                    <div class="avatar"></div>
                    <div class="user-info">
                        <p class="username">Roajn Aryal</p>
                        <p class="timestamp">2 hours ago</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>This is a sample post. I had a great day today!</p>
                </div>
                <img src="../images/namelogo.jpg" alt="Post Image" class="post-image">
                <div class="post-actions">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>
            <!-- Post 2 -->
            <div class="post">
                <div class="post-header">
                    <div class="avatar"></div>
                    <div class="user-info">
                        <p class="username">Aashis</p>
                        <p class="timestamp">5 hours ago</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>Just finished my project for the web class. Feeling accomplished!</p>
                </div>
                <img src="../images/ganesh-5998483_1280.jpg" alt="Post Image" class="post-image">
                <div class="post-actions">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>
               <!-- Post 2 -->
               <div class="post">
                <div class="post-header">
                    <div class="avatar"></div>
                    <div class="user-info">
                        <p class="username">Aashish Rijal</p>
                        <p class="timestamp">5 hours ago</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>Just finished my project for the web class. Feeling accomplished!</p>
                </div>
                <img src="../images/grocery.png" alt="Post Image" class="post-image">
                <div class="post-actions">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>
            <!-- Post 3 -->
            <div class="post">
                <div class="post-header">
                    <div class="avatar"></div>
                    <div class="user-info">
                        <p class="username">Kushal Bhatta</p>
                        <p class="timestamp">1 day ago</p>
                    </div>
                </div>
                <div class="post-content">
                    <p>Does anyone have tips for learning CSS faster?</p>
                </div>
                <img src="../images/image.jpg" alt="Post Image" class="post-image">
                <div class="post-actions">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>
        </div>
    </div>

    <?php include '../components/Footer.php'; ?>
</body>
</html>