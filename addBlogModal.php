<?php
include "connection.php";
check_login($conn);
$isUpdate = $_GET['edit'];
$updateId = $_GET['editid'];
$fileName = $_GET['fileName'];
$submitBlogValues = array("", "", "", "", "", "", "", "", "", "", "", "","");
$showTotalBlogQuery = "SELECT * FROM blog_information";
$runTotalBlogQuery = mysqli_query($conn, $showTotalBlogQuery);
$runTotalBlogQueryClone = mysqli_query($conn, $showTotalBlogQuery);
$runTotalBlogQueryCloneThird = mysqli_query($conn, $showTotalBlogQuery);
if ($isUpdate == "true") {
    $getBlogFromDb = "SELECT * FROM blog_information WHERE blog_id= '$updateId'";
    $runBlogQuery =  mysqli_query($conn, $getBlogFromDb);
    if (mysqli_num_rows($runBlogQuery) > 0) {
        while ($getSingleEditBlog = mysqli_fetch_assoc($runBlogQuery)) {
            $submitBlogValues[0] = $getSingleEditBlog['blog_title'];
            $submitBlogValues[1] = $getSingleEditBlog['tracking_site_name'];
            $submitBlogValues[2] = $getSingleEditBlog['tracking_site_link'];
            $submitBlogValues[3] = $getSingleEditBlog['blog_markup_before'];
            $submitBlogValues[4] = $getSingleEditBlog['blog_markup_after'];
            $submitBlogValues[5] = $getSingleEditBlog['linked_tracking'];
            $submitBlogValues[6] = $getSingleEditBlog['tracking_site_phone'];
            $submitBlogValues[7] = $getSingleEditBlog['tracking_site_display_link'];
            $submitBlogValues[8] = $getSingleEditBlog['blog_meta_data'];
            $submitBlogValues[9] = $getSingleEditBlog['blog_first_show'];
            $submitBlogValues[10] = $getSingleEditBlog['blog_second_show'];
            $submitBlogValues[11] = $getSingleEditBlog['blog_third_show'];
            $submitBlogValues[12] = $getSingleEditBlog['image_alt_tag'];
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Packstrack</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="./images/trackingLogo.png">
</head>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <!-- Page Content  -->
        <div id="content" class="">
            <?php
            include "nav.php"
            ?>
            <div class="w-100 p-5">
                <form method="post" action="codeFormSubmit?edit=<?php echo $isUpdate ?>&editid=<?php echo $updateId ?>&fileName=<?php echo $fileName ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="blogTitle">Blog Title</label>
                            <input type="text" name="blogTitle" id="blogTitle" class="form-control" value="<?php echo $submitBlogValues[0] ?>">
                        </div>
                        <div class="form-group col-6">
                            <label for="siteName">Tracking Site Name</label>
                            <input type="text" name="siteName" id="siteName" class="form-control" value="<?php echo $submitBlogValues[1] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="blogTitle">Display Phone Number</label>
                            <input type="text" name="displayPhone" id="blogTitle" class="form-control" value="<?php echo $submitBlogValues[6] ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="siteName">Display Tracking Site</label>
                            <input type="text" name="displayLink" id="siteName" class="form-control" value="<?php echo $submitBlogValues[7] ?>">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="altTagText">Alt Tag Text</label>
                            <input type="text" name="altTagText" id="altTagText" class="form-control" value="<?php echo $submitBlogValues[12] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="siteLink">Tracking Site Link</label>
                            <input type="text" name="siteLink" id="siteLink" class="form-control" value="<?php echo $submitBlogValues[2] ?>">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="includeImage">Image</label>
                            <input type="file" name="includeImage" id="includeImage" class="form-control" value="<?php echo $submitBlogValues[2] ?>">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="exampleFormControlSelect1">Linked Tracking</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="linked_track">
                                <option value="false" <?php if ($submitBlogValues[5] == "false") echo 'selected="selected"'; ?>>False</option>
                                <option value="true" <?php if ($submitBlogValues[5] == "true") echo 'selected="selected"'; ?>>True</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label for="exampleFormControlSelect1">First Reference</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="first_ref">
                                <option value="">Select</option>
                                <?php
                                if (mysqli_num_rows($runTotalBlogQuery) > 0) {
                                    while ($getSingleBlog = mysqli_fetch_assoc($runTotalBlogQuery)) {
                                ?>
                                        <option value="<?php
                                            echo $getSingleBlog['blog_id'] ?>"<?php
                                            if ($submitBlogValues[9] == $getSingleBlog['blog_id'])
                                            echo 'selected="selected"'; ?>>
                                            <?php
                                            echo $getSingleBlog['tracking_site_name'];
                                            ?>
                                        </option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="exampleFormControlSelect1">Second Reference</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="second_ref">
                            <option value="">Select</option>
                                <?php
                                if (mysqli_num_rows($runTotalBlogQueryClone) > 0) {
                                    while ($getSingleBlog = mysqli_fetch_assoc($runTotalBlogQueryClone)) {
                                ?>
                                        <option value="<?php
                                            echo $getSingleBlog['blog_id'] ?>"<?php
                                            if ($submitBlogValues[10] == $getSingleBlog['blog_id'])
                                            echo 'selected="selected"'; ?>>
                                            <?php
                                            echo $getSingleBlog['tracking_site_name'];
                                            ?>
                                        </option>
                                <?php
                                    }
                                }
                                ?>
                        </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="exampleFormControlSelect1">Third Reference</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="third_ref">
                            <option value="">Select</option>
                                <?php
                                if (mysqli_num_rows($runTotalBlogQueryCloneThird) > 0) {
                                    while ($getSingleBlog = mysqli_fetch_assoc($runTotalBlogQueryCloneThird)) {
                                ?>
                                        <option value="<?php
                                            echo $getSingleBlog['blog_id'] ?>"
                                            <?php
                                            if ($submitBlogValues[11] == $getSingleBlog['blog_id'])
                                            echo 'selected="selected"'; ?>>
                                            <?php
                                            echo $getSingleBlog['tracking_site_name'];
                                            ?>
                                        </option>
                                <?php
                                    }
                                }
                                ?>    
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="blogData">Add Meta Data</label>
                        <textarea name="blogMetaDesc" id="blogMetaDesc" class="form-control" rows="8"><?php echo $submitBlogValues[8] ?></textarea>
                    </div>
                    <!-- Being Used in PHP Code But Not Needed for Implementing -->
                    <div class="form-group d-none">
                        <label for="blogData">Add Markup Before Tracking</label>
                        <textarea name="blogData" id="blogData" class="form-control" rows="8"><?php echo $submitBlogValues[3] ?></textarea>
                    </div>
                    <!-- Being Used in PHP Code But Not Needed for Implementing -->

                    <div class="form-group">
                        <label for="blogAfter">Add Markup After Tracking</label>
                        <textarea name="blogAfter" id="blogAfter" class="form-control" rows="8"><?php echo $submitBlogValues[4] ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="blogSubmit" id="" class="btn btn-primary btn-block w-25">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include "scripts.php";
    ?>
</body>

</html>