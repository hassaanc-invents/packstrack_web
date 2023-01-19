<?php
$adminDisplayQuery = "SELECT * FROM admin_information";
$runDisplayAdminQuery  = mysqli_query($conn, $adminDisplayQuery) or die("Cant Fetch Admin Data");
?>
<div id="action" class="bg-light py-3 mb-3">
    <div class="d-flex">
        <div class="col">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#vanishFilesWarning">
                        Vanish Files
                    </button>
                </div>
                <div class="col-md-6 mb-2">
                    <a href="logout" class="btn btn-dark btn-block text-white">
                        Logout
                    </a>
                </div>
            </div>
            <div class="row px-3 mt-3 custom-scroll-bar" style="max-height: 480px; overflow:auto">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th class="col-sm-4">Admin Name</th>
                            <th class="col-sm-4">Admin Phone</th>
                            <th class="col-sm-2">Approve</th>
                            <th class="col-sm-2">Not Approve</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($runDisplayAdminQuery) > 0) {
                            while ($displayAdminSingleResult = mysqli_fetch_assoc($runDisplayAdminQuery)) {

                        ?>
                                <tr>
                                    <td class="col-sm-4">
                                        <?php echo $displayAdminSingleResult['admin_name'] ?>
                                    </td>
                                    <td class="col-sm-4">
                                        <?php echo $displayAdminSingleResult['phone_number'] ?>
                                    </td>
                                    <td class="col-sm-2">
                                        <a type="button" class="btn btn-primary" href="approvedisapprovecode?adminId=<?php echo $displayAdminSingleResult['admin_id'] ?>&isapprove=approve">
                                            Approve
                                        </a>
                                    </td>
                                    <td class="col-sm-2">
                                        <a type="button" class="btn btn-primary" href="approvedisapprovecode?adminId=<?php echo $displayAdminSingleResult['admin_id'] ?>&isapprove=disapproved">
                                            DisApprove
                                        </a>
                                    </td>
                                </tr>

                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>