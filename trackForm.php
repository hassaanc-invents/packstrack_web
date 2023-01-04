<form action="result" method="post" class="w-50 my-5 mx-auto border p-4 input-form bg-dark rounded">
    <div class="form-group">
        <input type="text" name="trackingid" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tracking ID">
    </div>
    <div class="form-check d-flex justify-content-between">
        <div class="mt-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label text-light" for="exampleCheck1">Save Tracking ID</label>
        </div>
        <input type="text" name="blogId"  value="<?php echo $blogId?>" class="form-control" hidden>
        <div>
            <button type="submit" name="submit" value="submit" class="btn btn-primary text-light" style="padding-left: 30px; padding-right: 30px;">Track</button>
        </div>
    </div>
</form>