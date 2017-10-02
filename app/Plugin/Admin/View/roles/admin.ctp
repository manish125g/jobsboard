<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php echo $this->Flash->render('success') ?>
        <?php echo $this->Flash->render('failure') ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All Roles listing</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Roles</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($roles)){
                        foreach($roles as $role){?>
                            <tr>
                                <td><?php echo $role['Roles']['role']?></td>
                                <td>
                                    <?php
                                    $id = $role['Roles']['id'];
                                    $status = $role['Roles']['enabled'];
                                    if ($status == 'Y') {
                                        echo $this->Html->link('<i class="fa fa-check-circle"></i>',
                                            array('controller' => "roles", "action" => "change_status", $id, 'N',
                                                'plugin' =>'admin'),
                                            array("class" => "text-success", "escape" => false, "title" => __("Disable It.")));
                                    } else {
                                        echo $this->Html->link('<i class="fa fa-minus-circle"></i>',
                                            array('controller' => "roles", "action" => "change_status", $id, 'Y',
                                                'plugin' =>'admin'),
                                            array("class" => "text-danger", "escape" => false, "title" => __("Enable It.")));
                                    } ?>
                                </td>
                                <td><?=
                                    $this->Html->link("<i class='fa fa-edit'></i>", array(
                                        'controller' => 'Roles',
                                        'action' => 'updateRole',
                                        '?' => array('roleId' => $role['Roles']['id'])),
                                        array('escape'=>false));
                                    ?> |
                                    <?=
                                    $this->Html->link("<i class='fa fa-trash text-red'></i>", array(
                                        'controller' => 'Roles',
                                        'action' => 'deleteRole',
                                        '?' => array('roleId' => $role['Roles']['id'])),
                                        array('escape'=>false));
                                    ?>
                                </td>
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