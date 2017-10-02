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
                <h3 class="box-title">Add Job</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php $url = array("controller" =>"jobs", "action" =>"add_job", 'plugin' => 'admin');
            echo $this->Form->create("Job", array("url" => $url, "class" => "form-horizontal",
                "role" => "form", 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false))); ?>
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Company Name</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('Job.company_name', array('type'=>'text', 'class' =>'form-control'));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Job Title</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('Job.job_title', array('type'=>'text', 'class' =>'form-control'));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Job Designation</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('Job.job_designation', array('type'=>'text', 'class' =>'form-control'));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Job Department</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('Job.job_department', array('type'=>'text', 'class' =>'form-control'));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Job Location</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('Job.job_location', array('type'=>'text', 'class' =>'form-control'));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Contact Number</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('Job.job_contact_number', array('type'=>'text', 'class' =>'form-control'));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Job Description</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('Job.job_description', array('type'=>'text', 'class' =>'form-control'));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Job Last Date</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('Job.job_expiry_date', array('type'=>'text', 'class' =>'form-control'));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Job Skills</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('Job.job_skills', array('type'=>'text', 'class' =>'form-control'));?>
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="col-sm-2 control-label">Is Hot(*listing in hot job)</label>
                        <div class="col-md-10">
                            <?php
                            $options = array('type' => "checkbox");
                            echo $this->Form->input('Job.is_hot_job', $options);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Is New job</label>
                        <div class="col-md-10">
                            <?php
                            $options = array('type' => "checkbox");
                            echo $this->Form->input('Job.is_new_job', $options);
                            ?>
                        </div>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <?php echo $this->Form->submit('Create Job', array('type' =>'submit', 'class' =>'btn btn-info pull-right'));?>
                </div><!-- /.box-footer -->
            <?php echo $this->Form->end();?>
        </div><!-- /.box -->
        <!-- general form elements disabled -->
    </section>
</div>