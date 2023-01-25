<!-- Database Connection -->
<?php
include "basicPageMarkupStruct.php";
include "connection.php";
?>
<!-- Signup Data Saving INTO Database -->
<?php
if (isset($_POST['signup'])) {
    $contact_detail = array($_POST['name'], $_POST['phone'], $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = md5($password);
    $query = "INSERT INTO admin_information(admin_name, phone_number, admin_email, admin_password, isActive) VALUES('{$contact_detail[0]}','{$contact_detail[1]}','{$contact_detail[2]}','{$password}','0')";
    $result = mysqli_query($conn, $query) or die("INSERTION FAILD");
    header("Location: $baseURL/signup");
}
$editOrSave = $_GET['edit'];
// <!-- Blog Data Submit Into Databases -->
if (isset($_POST['blogSubmit'])) {
    check_login($conn);
    $blog_detail = array($_POST['blogTitle'], $_POST['siteName'], $_POST['siteLink'], $_POST['blogData'], $_POST['blogAfter'], $_POST['displayPhone'], $_POST['displayLink'], $_POST['blogMetaDesc'], $_POST['first_ref'], $_POST['second_ref'], $_POST['third_ref']);
    $blogMarkupAfterForm = $_POST['blogAfter'];
    $blogPageMetaData = $_POST['blogMetaDesc'];
    $linkedTrack = $_POST['linked_track'];
    // Image Upload to database
    // $fileTmpPath = $_FILES['includeImage']['tmp_name'];
    $imageName = $_FILES['includeImage']['name'];
    $imageName = mysqli_real_escape_string($conn, $_FILES['includeImage']['name']);
    $exe = explode(".", $imageName);
    $picextension = strtolower($exe[1]);
    $format = array("png", "jpg", "jpeg", "webp");
    if (in_array($picextension, $format)) {
        move_uploaded_file($_FILES['includeImage']['tmp_name'], "uploaded_files/" . $imageName);
    }
    $blogDataBeforeForm = mysqli_real_escape_string($conn, $blog_detail[3]);
    $blogDataAfterForm = mysqli_real_escape_string($conn, $blog_detail[4]);
    $blogDataMetaData = mysqli_real_escape_string($conn, $blog_detail[7]);
    $fileName = strtolower($blog_detail[1] . '.php');
    $finalFileName = str_replace(' ', '', $fileName);
    if ($editOrSave == "false") {
        $blogDetailQuery = "INSERT INTO blog_information(blog_title, tracking_site_name, tracking_site_link, tracking_site_phone, tracking_site_display_link, blog_image_path, blog_markup_before, blog_markup_after, blog_meta_data, linked_tracking, blog_first_show, blog_second_show, blog_third_show)
    VALUES('{$blog_detail[0]}','{$blog_detail[1]}','{$blog_detail[2]}','{$blog_detail[5]}', '{$blog_detail[6]}', '{$imageName}','{$blogDataBeforeForm}','{$blogDataAfterForm}', '{$blogDataMetaData}', '{$linkedTrack}', '{$blog_detail[8]}' , '{$blog_detail[9]}', '{$blog_detail[10]}')";
        $result2 = mysqli_query($conn, $blogDetailQuery);
        include "fileUpdateFunction.php";
    }
    if ($editOrSave == "true") {
        $updateBlogId = $_GET['editid'];
        $oldFileName = $_GET['fileName'];
        if ($imageName != "") {
            $deleteUploadedImageQuery = "SELECT blog_image_path FROM blog_information WHERE blog_id='$updateBlogId'";
            $runImagePathQuery = mysqli_query($conn, $deleteUploadedImageQuery);
            if (mysqli_num_rows($runImagePathQuery) > 0) {
                while ($singleImagePath = mysqli_fetch_assoc($runImagePathQuery)) {
                    $imageDeleted = unlink('./uploaded_files/' . $singleImagePath['blog_image_path']);
                }
            }
            if (!$status) {
                echo "Sorry File Cant be deleted";
            }
            $updateBlogQuery = "UPDATE blog_information
            SET blog_title = '{$blog_detail[0]}', tracking_site_name = '{$blog_detail[1]}', tracking_site_link = '{$blog_detail[2]}', blog_image_path = '{$imageName}', blog_markup_before = '{$blogDataBeforeForm}', blog_markup_after = '{$blogDataAfterForm}', blog_meta_data = '{$blogDataMetaData}', linked_tracking = '{$linkedTrack}', blog_first_show = '{$blog_detail[8]}', blog_second_show ='{$blog_detail[9]}', blog_third_show = '{$blog_detail[10]}'
            WHERE blog_id = '$updateBlogId'";
        } else {
            $updateBlogQuery = "UPDATE blog_information
            SET blog_title = '{$blog_detail[0]}', tracking_site_name = '{$blog_detail[1]}', tracking_site_link = '{$blog_detail[2]}',tracking_site_phone = '{$blog_detail[5]}',tracking_site_display_link = '{$blog_detail[6]}', blog_markup_before = '{$blogDataBeforeForm}', blog_markup_after = '{$blogDataAfterForm}', blog_meta_data = '{$blogDataMetaData}', linked_tracking = '{$linkedTrack}', blog_first_show = '{$blog_detail[8]}', blog_second_show= '{$blog_detail[9]}', blog_third_show = '{$blog_detail[10]}'
            WHERE blog_id = '$updateBlogId'";
        }
        $runUpdateQuery = mysqli_query($conn, $updateBlogQuery);
        rename($finalFileName, $oldFileName);
        $status = unlink($oldFileName);
        include "fileUpdateFunction.php";
    }
    mysqli_close($conn);
}
?>