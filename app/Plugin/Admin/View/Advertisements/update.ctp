<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add Advertisement</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php $url = array("controller" => "advertisements", "action" => "update", $id, "plugin" => 'admin');
            echo $this->Form->create("Advertise", array("url" => $url, "id" => "addAds", "class" => "form-horizontal",
                "role" => "form", 'type' => 'file', 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false))); ?>
            <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-2 control-label">
                        <label><?php echo __('Select the category'); ?></label>
                    </div>
                    <div class="col-md-10">
                        <?php
                        echo $this->Form->input('category_id', array(
                            'type' => 'select',
                            'class' =>'form-control',
                            'options' => $categories,
                            'empty' => __('(Choose Category)'),
                            "id" => "category_id"
                        ));
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                        <?php echo $this->Form->input('name', array('class' => 'form-control',
                            'placeholder' => 'Name', 'type' => 'text')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                        <?php echo $this->Form->input('description', array('class' => 'form-control',
                            'placeholder' => 'Description', 'type' => 'text')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Url</label>

                    <div class="col-sm-10">
                        <?php echo $this->Form->input('url', array('class' => 'form-control',
                            'placeholder' => 'Ads Redirect Location URL', 'type' => 'text')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Image</label>

                    <div class="col-sm-10">
                        <?php echo $this->Form->input('image_file', array('class' => 'form-control', 'type' => 'file',
                            "accept" => "image/*")); ?>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
            <!-- /.box-footer -->
            <?php $this->Form->end(); ?>
        </div>
        <!-- /.box -->
        <!-- general form elements disabled -->
    </section>
</div>