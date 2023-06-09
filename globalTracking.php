<form action="result" method="post" class="w-75 my-5 mx-auto border bg-dark rounded p-4  p-sm-4 p-md-5 input-form">
    <div class="form-group">
        <input type="text" name="trackingid" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tracking ID">
    </div>
    <div class="form-group">
        <select class="form-control" id="exampleFormControlSelect1" name="blogId">
            <option value="">Select Tracking Company</option>
            <?php
            $getDropDownOptionQuery = "SELECT * FROM blog_information";
            $getDropDownDataRun = mysqli_query($conn, $getDropDownOptionQuery);
            if (mysqli_num_rows($getDropDownDataRun) > 0) {
                while ($getSingleOption = mysqli_fetch_assoc($getDropDownDataRun)) {
            ?>
                    <option value="<?php echo $getSingleOption['blog_id'] ?>"><?php echo $getSingleOption['tracking_site_name'] ?></option>
            <?php
                }
            }
            ?>
        </select>
    </div>
    <div class="form-check d-flex justify-content-between">
        <div class="mt-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label text-light" for="exampleCheck1">Save Tracking ID</label>
        </div>
        <div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary px-5 rounded-pill shadow-sm text-dark" style="padding-left: 30px; padding-right: 30px;">Track</button>
        </div>
    </div>
</form>