<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php echo $this->Flash->render('success') ?>
        <?php echo $this->Flash->render('failure') ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sub Menus listing</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sub Menu Name</th>
                        <th>Menu URL</th>
                        <th>Parent Menu</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($menus)){
                        foreach($menus as $menu){?>
                            <tr>
                                <td><?php echo $menu['Menu']['menu_name']?></td>
                                <td><?php echo $menu['Menu']['url']?></td>
                                <td><?php echo $menu['Menu']['parent_id']?></td>
                                <td>
                                    <?php
                                    $id = $menu['Menu']['id'];
                                    $status = $menu['Menu']['status'];
                                    if ($status == 'Y') {
                                        echo $this->Html->link('<i class="fa fa-check-circle"></i>',
                                            array('controller' => "menu", "action" => "change_status", $id, 'N',
                                                'plugin' =>'admin'),
                                            array("class" => "text-success", "escape" => false, "title" => __("Disable It.")));
                                    } else {
                                        echo $this->Html->link('<i class="fa fa-minus-circle"></i>',
                                            array('controller' => "menu", "action" => "change_status", $id, 'Y',
                                                'plugin' =>'admin'),
                                            array("class" => "text-danger", "escape" => false, "title" => __("Enable It.")));
                                    } ?>
                                </td>
                                <td>
                                    <?=
                                    $this->Html->link("<i class='fa fa-edit'></i>", array(
                                        'controller' => 'Menu',
                                        'action' => 'updateMenu',
                                        '?' => array('menuId' => $menu['Menu']['id'])),
                                        array('escape'=>false));
                                    ?> |
                                    <?=
                                    $this->Html->link("<i class='fa fa-trash text-red'></i>", array(
                                        'controller' => 'Menu',
                                        'action' => 'deleteMenu',
                                        '?' => array('menuId' => $menu['Menu']['id'])),
                                        array('escape'=>false));
                                    ?>
                                </td>
                            </tr>
                        <?php }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5">
                                No Sub-Menus Found.
                            </td>
                        </tr>
                        <?php
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