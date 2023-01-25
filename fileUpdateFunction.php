<?php
        // ..................Site Name and URL Redirection.................
        $blog_detailBefore = $blog_detail[3];
        $blog_detailAfter = $blog_detail[4];
        $blog_detailMetaData = $blog_detail[7];
        $getIdQuery = "SELECT * FROM blog_information WHERE tracking_site_link='$blog_detail[2]' ";
        $getIdQueryRun = mysqli_query($conn, $getIdQuery);
        $finalBlogId;
        $isLinkedTrack;
        if (mysqli_num_rows($getIdQueryRun) > 0) {
            while ($getSingleId = mysqli_fetch_assoc($getIdQueryRun)) {
                $finalBlogId = $getSingleId['blog_id'];
                $isLinkedTrack = $getSingleId['linked_tracking'];
            }
        }
        $blogId = "'" . '$blogId' . "'";
        $blog_markup_before = "'" . 'blog_markup_before' . "'";
        $blog_markup_after = "'" . 'blog_markup_after' . "'";
        $blog_image_link_name = "'" . 'blog_image_path' . "'";
        $blog_website_phone = "'" . 'tracking_site_phone' . "'";
        $blog_website_display_link = "'" . 'tracking_site_display_link' . "'";
        $blog_website_name = "'" . 'tracking_site_name' . "'";
        $blogFirstShow = "'" . 'blog_first_show' . "'";
        $blogSecondShow = "'" . 'blog_second_show' . "'";
        $blogThirdShow = "'" . 'blog_third_show' . "'";
        $urLDirectionPhpScript = '
        <?php
        $blogId = "' . $finalBlogId . '";
        $getBlogDataQuery = "SELECT * FROM blog_information WHERE blog_id =' . $blogId . '";
        $getblogDataRun = mysqli_query($conn, $getBlogDataQuery);
        $finalBlogBefore = "";
        $finalBlogAfter = "";
        $trackingSiteDisplayLink = "";
        $trackingSiteDisplayPhone = "";
        $trackingSiteName = "";
        $imageLink = "";
        $blogShowArray =  array();
        if (mysqli_num_rows($getblogDataRun) > 0) {
            while ($getSingleBlog = mysqli_fetch_assoc($getblogDataRun)) {
                $imageLink = $getSingleBlog['.$blog_image_link_name.'];
                $trackingSiteDisplayLink = $getSingleBlog['.$blog_website_display_link.'];
                $trackingSiteDisplayPhone = $getSingleBlog['.$blog_website_phone.'];
                $trackingSiteName = $getSingleBlog['.$blog_website_name.'];
                array_push($blogShowArray, $getSingleBlog['.$blogFirstShow.'], $getSingleBlog['.$blogSecondShow.'], $getSingleBlog['.$blogThirdShow.']);
            }
        }
        ?>';
        // ......................PHP File Create...........................
        $pageMarkupComplete = $markupBeforeForm.$blog_detailMetaData.$markupMidData. $urLDirectionPhpScript .  $blog_detailBefore  . $submitForm . $blog_detailAfter . $markupAfterForm;
        $fileCreate = fopen($finalFileName, 'w');
        fwrite($fileCreate, $pageMarkupComplete);
        fclose($fileCreate);
        header("Location: $baseURL/dashboard");
?>