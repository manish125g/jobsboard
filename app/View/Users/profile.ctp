<style>
    .kv-avatar .file-preview-frame,.kv-avatar .file-preview-frame:hover {
        margin: 0;
        padding: 10px;
        border: none;
        box-shadow: none;
        text-align: center;
    }
    .kv-avatar .file-input {
        display: table-cell;
        width: auto;
    }
</style>
</section>
</div>
<div class="col-md-12 col-sm-12" style="background: #fff;padding: 10px">
    <div class="col-md-4">
        <?php $url = array("controller" =>"users", "action" =>"profile", 'plugin' => null);
        echo $this->Form->create("dffd", array("url" => $url, "class" => "form-horizontal",
            "role" => "form", 'novalidate' => true, "type"=>"file", 'inputDefaults' => array('label' => false, 'div' => false))); ?>
            <input name="profile_image" class="custom-file-input form-control" type="file"/>
        <?php echo $this->Form->end(); ?>
    </div>
    <div class="col-md-8">
        <!-- form start -->
        <?php $url = array("controller" =>"users", "action" =>"profile", 'plugin' => null);
        echo $this->Form->create("User", array("url" => $url, "class" => "form-horizontal",
            "role" => "form", 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false))); ?>
        <div class="box-body">
            <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('User.name', array('type'=>'text', 'class' =>'form-control', 'id' =>'user_name'));?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('User.email', array('type'=>'text', 'class' =>'form-control',
                        'id' =>'user_email'));?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_phone" class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('User.phone_number', array('type'=>'text', 'class' =>'form-control',
                    'id' =>'user_phone'));?>
                </div>
            </div>
            <div class="form-group">
                <label for="user_birthday" class="col-sm-2 control-label">D.O.B.</label>
                <div class="col-sm-10">
                    <?php echo $this->Form->input('User.dob', array('type'=>'text', 'class' =>'datepicker form-control',
                    'id' =>'user_birthday', 'readonly'));?>
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo $this->Form->submit('Update', array('type' =>'submit', 'class' =>'btn btn-info pull-right'));?>
        </div><!-- /.box-footer -->
        <?php echo $this->Form->end();?>
    </div>
    <div class="clearfix"></div>
</div>
<script>
    $("#file-1").fileinput({
        uploadUrl: "<?php echo Router::url(array('controller' =>'users', 'action' =>'upload_profile'))?>", // you must set a valid URL here else you will get an error
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: true,
        maxFileSize: 2000,
        initialPreviewAsData: false,
        showUpload: true,
        showCaption: false,
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
//        slugCallback: function (filename) {
//            return filename.replace('(', '_').replace(']', '_');
//        }
    });
    $('.datepicker').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1940:2012',
        dateFormat: 'yy-mm-dd',
        maxDate: new Date()
    });
    var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' +
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>';
    var defaultImage = '<?php echo $this->Html->image("avatar.png", array("alt" =>"Your Avatar", "style"=>"width:160px"))?>';
    $("#avatar-1").fileinput({
        uploadUrl: "<?php echo Router::url(array('controller' =>'users', 'action' =>'upload_profile'))?>",
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        showUpload: true,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors-1',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: defaultImage,
        layoutTemplates: {main2: '{preview} {remove} {browse}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
</script>