<div>
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active" style="min-height: 35px">
            <a href="#job" aria-controls="home" role="tab" data-toggle="tab">
                Jobs
            </a>
        </li>
    </ul>
    <div class="" style="min-height: 500px;background: #f6f6f6;padding: 5px">
        <h2>Job List</h2>

        <h2></h2>

        <div class="text-center">
            <form class="form-inline">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Keywords, Skills, Designation" style="width: 270px">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Location">
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option>All Job Category</option>
                        <option>Govt Job</option>
                        <option>Pvt Job</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-info">Find Jobs >></button>
            </form>
        </div>
        <div class="">
            <table class="table table-striped">
                <thead></thead>
                <tbody>
                <?php foreach ($jobs as $job) { ?>
                    <tr style="padding: 4px">
                        <td><?php echo $job['Job']['job_title']; ?></td>
                        <td><i class="fa fa-map-marker"></i>&nbsp; <?php echo $job['Job']['job_location']; ?></td>
                        <td><?php echo $job['Job']['company_name']; ?></td>
                        <td><button class="btn btn-success btn-block"><?php echo ucwords($job['Job']['job_type']); ?></button></td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="" style="min-height: 200px;background: #f6f6f6;padding: 5px;margin-top: 5px">
        <h2>Top Companies</h2>
    </div>
</div>

</div>
<script>
</script>