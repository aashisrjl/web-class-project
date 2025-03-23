<?php
include('../database/Connection.php');

// Check if the 'id' parameter is provided
if(isset($_GET['id'])){
    $postId = $_GET['id'];
    
    // Start the session and get the userId from the session
    session_start();
    $userId = $_SESSION['id'];
    
    // Query to check if the post belongs to the logged-in user
    $checkPostQuery = "SELECT * FROM posts WHERE id = '$postId' AND userId = '$userId'";
    $result = mysqli_query($conn, $checkPostQuery);
    
    if(mysqli_num_rows($result) > 0){
        // Proceed with the deletion
        $deleteQuery = "DELETE FROM posts WHERE id = '$postId' AND userId = '$userId'";

        if(mysqli_query($conn, $deleteQuery)){
            // Successfully deleted
            header('Location:../pages/Home.php?msg=Post deleted successfully');
        } else {
            // Error in deletion
            header('Location:../pages/Home.php?err=Error deleting post');
        }
    } else {
        // Post not found or does not belong to the current user
        header('Location:../pages/Home.php?err=Post not found or you do not have permission to delete it');
    }
} else {
    // No post ID provided
    header('Location:../pages/Home.php?err=Post ID is required');
}

?>
