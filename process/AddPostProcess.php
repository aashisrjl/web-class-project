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

        // Handle image upload (optional)
        $image = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $target_dir = "../uploads/";
            $image = basename($_FILES['image']['name']);
            $target_file = $target_dir . $image;

            if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                $errmsg = "Failed to upload image.";
            }
        }

        if ($errmsg === "") {
            // Insert into the database (handle null image properly)
            $query = "INSERT INTO posts (title, description, post_date, image, userId) 
                      VALUES ('$title', '$description', '$post_date', " . ($image ? "'$image'" : "NULL") . ", '$userId')";

            if (mysqli_query($conn, $query)) {
                $msg = "Add Post Success";
            } else {
                $errmsg = "Error: " . mysqli_error($conn);
            }
        }
    } else {
        $errmsg = "All fields are required.";
    }
} else {
    $errmsg = "Request method does not support.";
}

// Redirect based on result
if ($msg != "") {
    header('Location: ../pages/Home.php?msg=' . urlencode($msg));
} else {
    header('Location: ../pages/AddPost.php?err=' . urlencode($errmsg));
}
?>
