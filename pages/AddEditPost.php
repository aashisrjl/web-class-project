<?php 
include '../components/Header.php'; 
include('../database/Connection.php');

// Initialize variables
$postId = $title = $description = $image = "";

// Check if editing
if (isset($_GET['postId'])) {
    $postId = $_GET['postId'];
    $query = "SELECT * FROM posts WHERE pid = '$postId'";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $post = mysqli_fetch_assoc($result);
        $title = $post['title'];
        $description = $post['description'];
        $image = $post['image'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $postId ? 'Edit Post' : 'Add Post'; ?> - WebClass</title>
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
        .post-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 120px);
            padding: 20px;
            margin-top: 60px;
        }
        .post-form {
            background-color: #FFFFFF;
            padding: 20px;
            border: 2px solid #007BFF;
            border-radius: 5px;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }
        .post-form h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }
        .post-form input,
        .post-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #007BFF;
            border-radius: 3px;
        }
        .post-form textarea {
            resize: vertical;
            height: 150px;
        }
        .post-form input[type="file"] {
            border: none;
            padding: 0;
        }
        .post-form button {
            background-color: #007BFF;
            color: #FFFFFF;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }
        .current-image {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="post-container">
        <div class="post-form">
            <h2><?php echo $postId ? 'Edit Post' : 'Add New Post'; ?></h2>
            <form action="../process/AddEditPostProcess.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="postId" value="<?php echo $postId; ?>">
                <input type="text" name="title" placeholder="Post Title" value="<?php echo htmlspecialchars($title); ?>" required>
                <textarea name="description" placeholder="Post Description" required><?php echo htmlspecialchars($description); ?></textarea>
                <?php if ($image) : ?>
                    <div class="current-image">
                        <img src="../uploads/<?php echo $image; ?>" alt="Post Image" width="100%">
                    </div>
                <?php endif; ?>
                <input type="file" name="image" accept="image/*">
                <button type="submit"> <?php echo $postId ? 'Update Post' : 'Submit Post'; ?></button>
            </form>
        </div>
    </div>

    <?php include '../components/Footer.php'; ?>
</body>
</html>
