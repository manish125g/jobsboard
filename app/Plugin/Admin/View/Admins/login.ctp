<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <?php $url = array("controller" => "admins", "action" => "login", "plugin" => 'admin');
    echo $this->Form->create("Admin", array("url" => $url, "id" => "admin_login", "class" => "form-horizontal",
        "role" => "form", 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false)));?>
        <div class="form-group has-feedback">
            <?php echo $this->Form->input('Admin.email', array('type' =>'email', 'class' =>'form-control', 'placeholder' =>'Email'));?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <?php echo $this->Form->input('Admin.password', array('type' =>'password', 'class' =>'form-control', 'placeholder' =>'Password'));?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
        </div>
    <?php echo $this->Form->end();?>
    <a href="#" onclick="open_forgot_modal()">I forgot my password</a><br>

</div><!-- /.login-box-body -->
<div class="example-modal">
    <div class="modal modal-info" id="forgotPasswordModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Enter your email to request new password</h4>
                </div>
                <form id="f_password" action="#" method="post">
                    <div class="modal-body">

                            <label>Email : </label>
                            <input type="email" name="email" id="fEmail" class="form-control" />

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline">Send Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-success" id="successModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Request Successfully Submitted</h4>
            </div>
            <div class="modal-body">
                <h4>Check your mail to change password</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    function open_forgot_modal(){
        $('#forgotPasswordModal').modal('show');
        $('#f_password').submit( function(e){
            e.preventDefault();
            jQuery.ajax({
                url: "<?php echo Router::url('/admin/admins/forgot_password')?>",
                type:"POST",
                data:'email=' + $('#fEmail').val(),
                beforeSend:function () {
                    jQuery("#loaderBox").show();
                },
                success:function (response) {
                    if(JSON.parse(response) ==='Success') {
                        $('#forgotPasswordModal').modal('hide');
                        $('#successModal').modal('show');
                    }
                },
                complete:function (jqXHR, textStatus) {
                    jQuery("#loaderBox").hide();
                }
            });
        });
    }
</script>