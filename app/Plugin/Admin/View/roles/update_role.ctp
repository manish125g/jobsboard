<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 30/06/2017
 * Time: 2:37 AM
 */
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php echo $this->Flash->render('success') ?>
        <?php echo $this->Flash->render('failure') ?>
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Update Roles</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php $url = array("controller" =>"roles", "action" =>"update_role", 'plugin' => 'admin');
            echo $this->Form->create("Roles", array("url" => $url, "class" => "form-horizontal",
                "role" => "form", 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false))); ?>
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Role</label>
                    <div class="col-sm-10">
                        <?php echo $this->Form->input('Roles.role', array('value'=> $role['Roles']['role'], 'type'=>'text', 'class' =>'form-control'));?>
                    </div>
                </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <?php echo $this->Form->submit('Update Role', array('type' =>'submit', 'class' =>'btn btn-info pull-right'));?>
            </div><!-- /.box-footer -->
            <?php echo $this->Form->end();?>
        </div><!-- /.box -->
        <!-- general form elements disabled -->
    </section>
</div>
