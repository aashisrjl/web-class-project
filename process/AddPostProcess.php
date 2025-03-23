<?php
include('../database/Connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['post_date'])) {
        $msg = "";
        $errmsg = "";
        $title = $_POST['title'];
        $description = $_POST['description'];
        $post_date = $_POST['post_date'];

        session_start();
        $userId = $_SESSION['id'];

        // Handle image upload (no validation)
        $target_dir = "../uploads/";
        $image = basename($_FILES['image']['name']);
        $target_file = $target_dir . $image;

        // Move uploaded file
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $query = "INSERT INTO posts (title, description, post_date, image, userId) VALUES ('$title', '$description', '$post_date', '$image', '$userId')";

            if (mysqli_query($conn, $query)) {
                $msg = "Add Post Success";
            } else {
                $errmsg = "Error: " . mysqli_error($conn);
            }
        } else {
            $errmsg = "Failed to upload image.";
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
