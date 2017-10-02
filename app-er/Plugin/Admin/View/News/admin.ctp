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
                        <th>News Title</th>
                        <th>City</th>
                        <th>Short Desc</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($news)){
                        foreach($news as $n){?>
                            <tr>
                                <td><?php echo $n['News']['news_title']?></td>
                                <td><?php echo $n['News']['news_city']?></td>
                                <td><?php echo $n['News']['news_short_desc']?></td>
                                <td><?php echo $n['Admin']['name']?></td>
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