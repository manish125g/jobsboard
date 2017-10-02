<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: #def6e4">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="loginLabel">Login Form</h4>
            </div>
            <form name="login" action="#" id="loginForm" class="form-horizontal" role="form">
            <div class="modal-body">
                <div class="user-error" style="color: red; font-size: 16px;"></div>
                <div class="form-group">
                    <label for="registerForm_phone" class="col-sm-2 control-label">You are </label>

                    <div class="col-sm-10">
                        <select name="userType" required class="form-control" id="userType">
                            <option value="User">User</option>
                            <option value="Recruiter">Recruiter</option>
                            <option value="SalesOfficer">Sales Officer</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="l_email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="l_email" placeholder="Email" required />
                        <span class="e_error"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="l_password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="l_password" required />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="loginSubmit" class="btn btn-primary">Login</button><br/>
                <a href="#" style="text-decoration: none;" id="reg" data-toggle="modal" data-target="#register">Do not have account? Register Here</a>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-success" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content" style="background: #def6e4">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#loginForm").submit(function (e) {
        e.preventDefault();
        var data = jQuery('#loginForm').serialize();
        jQuery.ajax({
            url: "<?php echo Router::url(array('controller' => 'users', 'action' =>'login'), true);?>",
            type: 'POST',
            data: data,
            success: function (response) {
                console.log(response);
                if (JSON.parse(response) == 'Success') {
                    jQuery('#login').modal('hide');
                    jQuery('#loginModal').modal('show');
                    jQuery('#loginModal .modal-title').html('<h4>Successful Logged-in</h4>');
                    jQuery('#loginModal .modal-body').html('<p>Please wait !</p>');
                    $('#loginForm').each(function () {
                        this.reset();
                    });
                    location.reload(true);
                } else if (JSON.parse(response) == 'password_empty') {
                    jQuery('.p_error').html('<h4>Password Required</h4>');
                } else if (JSON.parse(response) == 'email_empty') {
                    jQuery('.e_error').html('<h4>Email Required</h4>');
                } else if(JSON.parse(response) == 'Failed') {
                    $(".user-error").html('<h4 style="text-align: center;color:red;">Invalid User</h4>');
                }
            }
        });
    });
    $("#reg").click(function() {
        $("#login").modal('hide');
    });
</script>