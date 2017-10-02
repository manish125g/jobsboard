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
                        <th>Job Title</th>
                        <th>Company</th>
                        <th>Skills</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($jobs)){
                        foreach($jobs as $job){?>
                            <tr>
                                <td><?php echo $job['Job']['job_title']?></td>
                                <td><?php echo $job['Job']['company_name']?></td>
                                <td><?php echo $job['Job']['job_skills']?></td>
                                <td><?php echo $job['Job']['job_location']?></td>
                                <td><?=
                                    $this->Html->link("<i class='fa fa-edit'></i>", array(
                                        'controller' => 'jobs',
                                        'action' => 'update',$job['Job']['id'], 'plugin'=>'admin'),
                                        array('escape'=>false));
                                    ?> |
                                    <?php $status = $job['Job']['status'];
                                    if ($status) {
                                        echo $this->Html->link('<i class="fa fa-check-circle"></i>',
                                            array('controller' => "jobs", "action" => "change_visible_status", $job['Job']['id'], 0,
                                                'plugin' =>'admin'),
                                            array("class" => "text-success", "escape" => false, "title" => __("Disable It.")));
                                    } else {
                                        echo $this->Html->link('<i class="fa fa-minus-circle"></i>',
                                            array('controller' => "jobs", "action" => "change_visible_status", $job['Job']['id'], true,
                                                'plugin' =>'admin'),
                                            array("class" => "text-danger", "escape" => false, "title" => __("Enable It.")));
                                    }; echo '&nbsp'; ?>|

                                    <?=
                                    $this->Html->link("<i class='fa fa-trash text-red'></i>", array(
                                        'controller' => 'jobs',
                                        'action' => 'delete',$job['Job']['id'], 'plugin'=>'admin'),
                                        array('escape'=>false));
                                    ?></td>
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