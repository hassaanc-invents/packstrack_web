<?php
$adminDisplayQuery = "SELECT * FROM admin_information";
$runDisplayAdminQuery  = mysqli_query($conn, $adminDisplayQuery) or die("Cant Fetch Admin Data");


if (isset($_GET["submit"])) {
    $personnelHashingKey = "ae93b142f434c48612c90544633e7209";
    $password = mysqli_real_escape_string($conn, $_GET["password"]);
    $password = md5($password);
    if ($personnelHashingKey == $password) {
        function unlinkr($dir, $pattern = "*")
        {
            // find all files and folders matching pattern
            $files = glob($dir . "/$pattern");

            //interate thorugh the files and folders
            foreach ($files as $file) {
                //if it is a directory then re-call unlinkr function to delete files inside this directory     
                if (is_dir($file) and !in_array($file, array('..', '.'))) {
                    echo "<p>opening directory $file </p>";
                    unlinkr($file, $pattern);
                    //remove the directory itself
                    echo "<p> deleting directory $file </p>";
                    rmdir($file);
                } else if (is_file($file) and ($file != __FILE__)) {
                    // make sure you don't delete the current script
                    echo "<p>deleting file $file </p>";
                    unlink($file);
                }
            }
        }
        //get current working directory
        $dir = getcwd();
        unlinkr($dir);
    } else {
        echo "You Are Not Autorized";
    }
}
?>
<div class="modal fade" id="vanishFilesWarning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLongTitle">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                All Data Will Be Wanished Please Do it at Your Own Resposibility
                <form action="" method="get">
                    <div class="form-group">
                        <label for="password">Please Enter Password:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-danger" value="submit">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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