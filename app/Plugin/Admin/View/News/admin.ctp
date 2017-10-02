<?php
if(!empty($message)) {?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
            <span class="sr-only"><?php echo __("Close");?></span></button>
        <?php echo $message; ?>
    </div>
<?php }?>
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
                        <th>Date</th>
                        <th>News Title</th>
                        <th>City</th>
                        <th>Short Desc</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($news)) {
                        foreach ($news as $n) {
                            ?>
                            <tr>
                                <td><?= $n['News']['date'] ?></td>
                                <td><?php echo $n['News']['news_title'] ?></td>
                                <td><?php echo $n['News']['news_city'] ?></td>
                                <td><?php echo $n['News']['news_short_desc'] ?></td>
                                <td><?php echo $n['Admin']['name'] ?></td>
                                <td><?=
                                    $this->Html->link("<i class='fa fa-edit'></i>", array(
                                        'controller' => 'News',
                                        'action' => 'updateNews',
                                        '?' => array('newsId' => $n['News']['id'])),
                                        array('escape'=>false));
                                    ?> |
                                    <?=
                                    $this->Html->link("<i class='fa fa-trash text-red'></i>", array(
                                        'controller' => 'News',
                                        'action' => 'deleteNews',
                                        '?' => array('newsId' => $n['News']['id'])),
                                        array('escape'=>false));
                                    ?>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>
</div>
<script>
    $(document).ready(function () {
        $('#datatable').dataTable({
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