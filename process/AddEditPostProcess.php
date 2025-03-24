<?php
include('../database/Connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['title']) && isset($_POST['description'])) {
        $msg = "";
        $errmsg = "";
        $title = $_POST['title'];
        $description = $_POST['description'];
        $post_date = new DateTime();
        $post_date = $post_date->format('Y-m-d H:i:s');

        session_start();
        $userId = $_SESSION['id'];

        // Handle image upload
        $target_dir = "../uploads/";
        $image = null;

        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            // Basic file validation
            $image = basename($_FILES['image']['name']);
            $target_file = $target_dir . $image;

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if the file is an image
            if (in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
                // Check file size (example: 5MB max)
                if ($_FILES['image']['size'] <= 5000000) {
                    // Move uploaded file
                    if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                        $errmsg = "Failed to upload image.";
                    }
                } else {
                    $errmsg = "File is too large. Maximum size is 5MB.";
                }
            } else {
                $errmsg = "Only JPG, JPEG, PNG, and GIF files are allowed.";
            }
        }

        // Check if postId is set (editing existing post)
        if (isset($_POST['postId']) && !empty($_POST['postId'])) {
            // Editing post
            $postId = $_POST['postId'];
            
            // Update query depending on whether a new image is uploaded
            if ($image !== null) {
                $query = "UPDATE posts SET title = '$title', description = '$description', post_date = '$post_date', image = '$image' WHERE pid = '$postId' AND userId = '$userId'";
            } else {
                // If no new image is uploaded, keep the existing image
                $query = "UPDATE posts SET title = '$title', description = '$description', post_date = '$post_date' WHERE pid = '$postId' AND userId = '$userId'";
            }

            if (mysqli_query($conn, $query)) {
                $msg = "Post updated successfully.";
            } else {
                $errmsg = "Error updating post: " . mysqli_error($conn);
            }
        } else {
            // Adding new post
            if ($image !== null) {
                $query = "INSERT INTO posts (title, description, post_date, image, userId) VALUES ('$title', '$description', '$post_date', '$image', '$userId')";
            } else {
                // No image uploaded, insert without image field
                $query = "INSERT INTO posts (title, description, post_date, userId) VALUES ('$title', '$description', '$post_date', '$userId')";
            }

            if (mysqli_query($conn, $query)) {
                $msg = "Post added successfully.";
            } else {
                $errmsg = "Error adding post: " . mysqli_error($conn);
            }
        }
    } else {
        $errmsg = "All fields are required.";
    }
} else {
    $errmsg = "Request method is not supported.";
}

// Redirect based on result
if ($msg != "") {
    header('Location: ../pages/Home.php?msg=' . urlencode($msg));
} else {
    header('Location: ../pages/AddPost.php?err=' . urlencode($errmsg));
}
?>
