<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 11/10/2017
 * Time: 12:03 AM
 */
?>
</section>
</div>

<h3 class="text-center" style="margin-top: 40px;">Applying Job for <?= $job['Job']['job_title'] ?> at <?= $job['Job']['company_name'] ?></h3>
<div class="col-md-12 col-sm-12" style="background: #fff;padding: 10px">
    <div class="col-md-offset-2 col-md-8">
        <?php if(!empty($flashMessage)) {?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
                    <span class="sr-only"><?php echo __("Close");?></span></button>
                <?php echo $flashMessage; ?>
            </div>
        <?php } ?>
        <!-- form start -->
        <?php $url = array("controller" =>"job_seekers", "action" =>"apply_job", $id, 'plugin' => null);
        echo $this->Form->create("JobSeeker", array("url" => $url, "class" => "form-horizontal",
            "role" => "form", 'type' => 'file', 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false))); ?>
        <?php echo $this->Form->input('JobSeeker.applied_jobid', array('type'=>'hidden', 'class' =>'form-control', 'id' =>'job_id', 'value'=>$job['Job']['id']));?>
        <div class="box-body">
            <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('JobSeeker.name', array('type'=>'text', 'class' =>'form-control', 'id' =>'user_name'));?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('JobSeeker.email', array('type'=>'text', 'class' =>'form-control',
                        'id' =>'jobseeker_email'));?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_phone" class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('JobSeeker.phone', array('type'=>'text', 'class' =>'form-control',
                        'id' =>'jobseeker_phone'));?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_birthday" class="col-sm-2 control-label">D.O.B.</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('JobSeeker.dob', array('type'=>'text', 'class' =>'datepicker form-control',
                        'id' =>'jobseeker_birthday', 'readonly'));?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_birthday" class="col-sm-2 control-label">Experience <sub>Numbers Only</sub></label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('JobSeeker.experience', array('type'=>'text', 'class' =>'form-control',
                        'id' =>'experience', 'maxlength'=>2));?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Resume </label>
                <div class="col-sm-10" style="border: 2px inset #32c9ff">
                    <?php echo $this->Form->input('JobSeeker.resume_file', array('class' => 'form-control', 'type' => 'file',
                        'accept'=>'document/*', 'placeholder'=>"Please Select Your Resume")); ?>Click to Choose File
                </div>
            </div>

        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo $this->Form->submit('Apply', array('type' =>'submit', 'class' =>'btn btn-info pull-right'));?>
        </div><!-- /.box-footer -->
        <?php echo $this->Form->end();?>
    </div>
    <div class="clearfix"></div>
</div>
