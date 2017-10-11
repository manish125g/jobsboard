<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 11/10/2017
 * Time: 2:38 AM
 */
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All Job listing</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>DOB</th>
                        <th>Experience</th>
                        <th>Download Resume<sub>if any</sub></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($jobseeker)){
                        foreach($jobseeker as $job){?>
                            <tr>
                                <td><?= $job['Jobseeker']['name'] ?></td>
                                <td><?= $job['Jobseeker']['email'] ?></td>
                                <td><?= $job['Jobseeker']['phone'] ?></td>
                                <td><?= $job['Jobseeker']['dob'] ?></td>
                                <td><?= $job['Jobseeker']['experience'] ?></td>
                                <td><a href="/files/resume/".<?= $job['Jobseeker']['resume_file'] ?></td>

                            </tr>
                        <?php }
                    }?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div>
<script>
    $(document).ready(function () {
        $('#datatable').dataTable({
            "bLengthChange":false,
            "aoColumnDefs":[
                {
                    "bSortable":false,
                    "aTargets":[ "no-sort" ]
                }
            ]
        });
    });
</script>
