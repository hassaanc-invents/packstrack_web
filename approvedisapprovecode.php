<?php
include "connection.php";
check_login($conn);
// session_start();
$updateStatus = "";
if (isset($_GET['isapprove']) && $_GET['isapprove'] == "approve") {
    $updateAdmin = $_GET['adminId'];
    $adminApproveQuery =  "UPDATE admin_information
        SET  isActive = '1'
        WHERE admin_id = '$updateAdmin'";
    $updateStatus = mysqli_query($conn, $adminApproveQuery) or die("Admin Approve Error");
} elseif (isset($_GET['isapprove']) && $_GET['isapprove'] == "disapproved") {
    $updateAdmin = $_GET['adminId'];
    $adminApproveQuery =  "UPDATE admin_information
        SET  isActive = '0'
        WHERE admin_id = '$updateAdmin'";
    $updateStatus = mysqli_query($conn, $adminApproveQuery) or die("Admin Disapprove Error");
}
if ($updateStatus != "") {
    header("location:approve-admin");
} else {
    echo "Cant Update Admin";
}
