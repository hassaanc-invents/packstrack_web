<?php
$adminCountQuery = "SELECT COUNT(*) as count FROM admin_information";
$adminCountRun = mysqli_query($conn, $adminCountQuery) or die("Rows Cant Count");
$adminCountTotal = $adminCountRun->fetch_assoc();
$blogCountQuery = "SELECT COUNT(*) as count FROM blog_information";
$blogCountRun = mysqli_query($conn, $blogCountQuery) or die("Rows Cant Count");
$blogCountTotal = $blogCountRun->fetch_assoc();
$blogTitleQuery = "SELECT * from blog_information ORDER BY blog_id DESC";
$blogTitleResult = mysqli_query($conn, $blogTitleQuery);
?>

<div id="action" class="bg-light py-3 mb-3">
    <div class="d-flex">
        <div class="col-md-3">
            <div class="">
                <div class="card bg-dark text-white text-center mb-2">
                    <div class="card-body">
                        <h3 class="text-light">Total Admin</h3>
                        <h4 class="display-4 text-light">
                            <?php echo $adminCountTotal['count'] ?>
                        </h4>
                        <button href="#" class="btn btn-primary text-light px-5 py-2" disabled>View</button>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="card bg-dark text-white text-center mb-2">
                    <div class="card-body">
                        <h3 class="text-light">Total Blogs</h3>
                        <h4 class="display-4 text-light">
                            <?php
                            echo $blogCountTotal['count'];
                            ?>
                        </h4>
                        <button href="#" class="btn btn-primary px-5 py-2" disabled>View</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-5 mb-2">
                    <a href="addBlogModal?edit=false&editid=false&fileName=false"
                        class="btn btn-dark btn-block text-white">
                        Add Artical
                    </a>
                </div>
                <div class="col-md-5 mb-2">
                    <button type="button" class="btn btn-dark btn-block" data-toggle="modal"
                        data-target="#blogModalVisits">
                        View Visits
                    </button>
                </div>
                <div class="col-md-2 mb-2">
                    <a href="logout" class="btn btn-dark btn-block text-white">
                        Logout
                    </a>
                </div>
            </div>
            <div class="row px-3 mt-3 custom-scroll-bar" style="max-height: 380px; overflow:auto">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th class="col-sm-8">Recent Blogs</th>
                            <th class="col-sm-2">Recent Blogs</th>
                            <th class="col-sm-2">Edit Blogs</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($blogTitleResult) > 0) {
                            while ($blogTitleSingleResult = mysqli_fetch_assoc($blogTitleResult)) {
                                $fileName = strtolower($blogTitleSingleResult['tracking_site_name'] . '.php');
                                $finalFileName = str_replace(' ', '', $fileName);
                                ?>
                                <tr>
                                    <td class="py-3 col-sm-8">
                                        <?php echo $blogTitleSingleResult['blog_title'] ?>
                                    </td>
                                    <td class="py-3 col-sm-2"><button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModalLong">
                                            Delete
                                        </button></td>
                                    <td class="py-3 col-sm-2">
                                        <?php if ($blogTitleSingleResult['have_subdomain'] == 1) {
                                            ?>
                                            <a href="#" class="btn btn-primary px-4">Not</a>
                                            <?php
                                        } else {
                                            ?>
                                            <a href="addBlogModal?edit=true&editid=<?php echo $blogTitleSingleResult['blog_id'] ?>&fileName=<?php echo $finalFileName ?>"
                                                class="btn btn-primary px-4">Edit</a>
                                            <?php
                                        } ?>
                                    </td>
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-danger" id="exampleModalLongTitle">Warning</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-danger">Are You Sure You want to Delete this Blog?. You will
                                                        be Unable to revert this change.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark"
                                                        data-dismiss="modal">Cancel</button>
                                                    <a class="btn btn-primary text-light"
                                                        href="deleteBlog?deleteid=<?php echo $blogTitleSingleResult['blog_id'] ?>&fileName=<?php echo $finalFileName ?>">Delete
                                                        Forever</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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


<div class="modal fade" id="blogModalVisits" tabindex="-1" role="dialog" aria-labelledby="blogModalVisits"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="blogModalVisits">Total Visits Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                $totalVisitsQuery = "SELECT COUNT(*) as count FROM our_visitors";
                $runtotalVistsQuery = mysqli_query($conn, $totalVisitsQuery);
                $visitCount = $runtotalVistsQuery->fetch_assoc();
                ?>
                <div class="row">
                    <div class=" offset-md-3 col-md-6">
                        <div class="card bg-dark text-white text-center mb-2">
                            <div class="card-body">
                                <h3 class="text-light">Total Visits</h3>
                                <h4 class="display-4 text-light">
                                    <?php
                                    echo $visitCount['count'];
                                    ?>
                                </h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <a class="btn btn-dark px-5" href=<?php echo "vistordetails" ?>>Details</a>
                <button type="button" class="btn btn-dark px-5 text-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>