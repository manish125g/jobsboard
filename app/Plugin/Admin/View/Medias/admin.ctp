<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All Media listing</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="datatable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Media Title</th>
                        <th>Description</th>
                        <th>Url</th>
                        <th>Published Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($medias)){
                        foreach($medias as $media){?>
                            <tr>
                                <td><?php echo $media['Media']['name']?></td>
                                <td><?php echo $media['Media']['description']?></td>
                                <td><?php echo $media['Media']['url']?></td>
                                <td><?php echo $media['Media']['published_on']?></td>
                                <td>X | Y | Z</td>
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