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
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Add News</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php $url = array("controller" =>"news", "action" =>"add_news", 'plugin' => 'admin');
            echo $this->Form->create("News", array("url" => $url, "class" => "form-horizontal",
                "role" => "form", 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false))); ?>
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Date:</label>
                    <div class="col-sm-10">
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <?php echo $this->Form->input('News.date', array('type'=>'text', 'class' =>'datepicker form-control pull-right', 'id'=>'datepicker'));?>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">News Title</label>
                    <div class="col-sm-10">
                        <?php echo $this->Form->input('News.news_title', array('type'=>'text', 'class' =>'form-control', 'maxlength'=>200));?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">News Short Desc</label>
                    <div class="col-sm-10">
                        <?php echo $this->Form->input('News.news_short_desc', array('type'=>'textarea', 'class' =>'form-control', 'maxlength'=>200));?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">News Desc</label>
                    <div class="col-sm-10">
                        <?php echo $this->Form->input('News.news_desc', array('type'=>'textarea', 'class' =>'form-control', 'maxlength'=>800));?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">News Type</label>
                    <div class="col-sm-10">
                        <?php echo $this->Form->input('News.news_type', array('type'=>'text', 'class' =>'form-control'));?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-10">
                        <?php echo $this->Form->input('News.news_city', array('type'=>'text', 'class' =>'form-control'));?>
                    </div>
                </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <?php echo $this->Form->submit('Create News', array('type' =>'submit', 'class' =>'btn btn-info pull-right'));?>
            </div><!-- /.box-footer -->
            <?php echo $this->Form->end();?>
        </div><!-- /.box -->
        <!-- general form elements disabled -->
    </section>
</div>