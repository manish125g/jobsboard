<div class="content-wrapper">
    <section class="content-header">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add Media</h3>
            </div>
            <?php $url = array("controller" => "medias", "action" => "update",$id, "plugin" => 'admin');
            echo $this->Form->create("Media", array("url" => $url, "id" => "addMedia", "class" => "form-horizontal",
                "role" => "form", 'type' => 'file', 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false))); ?>
            <div class="box-body">
                <div class="form-group">
                    <div class="col-sm-2 control-label">
                        <label><?php echo __('Select the Type'); ?></label>
                    </div>
                    <div class="col-md-10">
                        <?php
                        echo $this->Form->input('media_type', array(
                            'type' => 'select',
                            'class' =>'form-control',
                            'options' => array('video' =>'Video'/*, 'image' =>'Image'*/),
                            /*'empty' => __('(Choose Media type)'),*/
                            "id" => "media_type"
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
                    <label class="col-sm-2 control-label">Published On</label>

                    <div class="col-sm-10">
                        <?php echo $this->Form->input('published_on', array('class' => 'form-control datepicker',
                            'placeholder' => 'Date', 'data-provide'=>"datepicker", 'type' => 'text', 'readonly')); ?>
                    </div>
                </div>
                <!--<div class="form-group">
                    <div class="col-sm-2 control-label">
                        <label><?php /*echo __('Select the Input Type'); */?></label>
                    </div>
                    <div class="col-md-10">
                        <?php
                /*                        echo $this->Form->input('file_loc_type', array(
                                            'type' => 'select',
                                            'class' =>'form-control',
                                            'options' => array('file' =>'File', 'url' =>'Url'),
                                            'empty' => __('(Choose File InpUt Type)'),
                                            "id" => "input_type"
                                        ));
                                        */?>
                    </div>
                </div>-->
                <div class="form-group">
                    <label class="col-sm-2 control-label">Url</label>

                    <div class="col-sm-10">
                        <?php echo $this->Form->input('url', array('class' => 'form-control',
                            'placeholder' => 'Ads Redirect Location URL', 'type' => 'text', 'id'=>'url')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <?php echo $this->Form->input('media_file', array('class' => 'form-control', 'type' => 'file',
                            'accept'=>'image/*')); ?>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
            </div>
            <?php $this->Form->end(); ?>
        </div>
    </section>
</div>
