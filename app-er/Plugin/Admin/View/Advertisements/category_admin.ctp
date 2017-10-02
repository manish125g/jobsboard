<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Advertisement Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="content">
                <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped"
                       id="data_table">
                    <thead>
                    <tr>
                        <th><?php echo __('Image'); ?></th>
                        <th><?php echo __('Name'); ?></th>
                        <th><?php echo __('Description'); ?></th>
                        <th><?php echo __('Status'); ?></th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $key => $value) {
                        $id = $value["AdvertiseCategory"]["id"]; ?>
                        <tr>

                            <td><?php $image = '/files/adscategory/'.$id.'/'.$value['AdvertiseCategory']['image'];
                                echo $this->Html->image($image, array('class' =>'img-responsive img-circle', 'style'=>'height:50px')); ?></td>
                            <td><?php echo $value['AdvertiseCategory']['name']; ?></td>
                            <td><?php echo $value['AdvertiseCategory']['description']; ?></td>
                            <td>
                                <?php $status = $value['AdvertiseCategory']['status'];
                                if ($status) {
                                    echo $this->Html->link('<i class="fa fa-check-circle"></i>',
                                        array('controller' => "advertisements", "action" => "change_category_visible_status", $id, 0,
                                            'plugin' =>'admin'),
                                        array("class" => "text-success", "escape" => false, "title" => __("Disable It.")));
                                } else {
                                    echo $this->Html->link('<i class="fa fa-minus-circle"></i>',
                                        array('controller' => "advertisements", "action" => "change_category_visible_status", $id, true,
                                            'plugin' =>'admin'),
                                        array("class" => "text-danger", "escape" => false, "title" => __("Enable It.")));
                                } ?>
                            </td>
                            
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
    </section>
</div>
<script>
    $(document).ready(function () {
        $('#data_table').dataTable({
            "bLengthChange": false,
            "aoColumnDefs": [
                {
                    "bSortable": false,
                    "aTargets": ["no-sort"]
                }
            ]
        });
    });
</script>