<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php echo $this->Flash->render('success') ?>
        <?php echo $this->Flash->render('failure') ?>
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Change Heading</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php $url = array("controller" =>"heading", "action" =>"change_heading", 'plugin' => 'admin');
            echo $this->Form->create("News", array("url" => $url, "class" => "form-horizontal",
                "role" => "form", 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false))); ?>
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">New Heading</label>
                    <div class="col-sm-10">
                        <?php echo $this->Form->input('Heading.heading', array('type'=>'text', 'class' =>'form-control'));?>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <?php echo $this->Form->submit('Change Heading', array('type' =>'submit', 'class' =>'btn btn-info pull-right'));?>
            </div><!-- /.box-footer -->
            <?php echo $this->Form->end();?>
        </div><!-- /.box -->
        <!-- general form elements disabled -->
    </section>
</div>