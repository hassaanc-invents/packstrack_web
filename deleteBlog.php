<?php
include "connection.php";
check_login($conn);
session_start();
$deleteBlogid = $_GET['deleteid'];
$deleteBlogFile = $_GET['fileName'];
echo '<script>'.$_GET['fileName'].'</script>';
$status = unlink($deleteBlogFile);
$deleteUploadedImageQuery = "SELECT blog_image_path FROM blog_information WHERE blog_id='$deleteBlogid'";
$runImagePathQuery = mysqli_query($conn, $deleteUploadedImageQuery);
if (mysqli_num_rows($runImagePathQuery) > 0) {
    while ($singleImagePath = mysqli_fetch_assoc($runImagePathQuery)) {
       $imageDeleted = unlink('./uploaded_files/'.$singleImagePath['blog_image_path']);
    }}
if (!$status) {
    echo "Sorry File Cant be deleted";
}
$deleteQuery = "DELETE FROM blog_information where blog_id='$deleteBlogid'";
$runBlogdelete = mysqli_query($conn, $deleteQuery);
if ($runBlogdelete) {
    header("location:dashboard");
} else {
    echo "Cant Delete Blog";
}
?>
