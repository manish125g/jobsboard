<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: #def6e4">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="registerLabel">Registration Form</h4>
            </div>
            <form name="register" id="registerForm" class="form-horizontal" role="form" action="#">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="registerForm_email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="registerForm_email"
                                   placeholder="Email" required/>
                            <div class="user_error" style="color: red"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="registerForm_name" class="col-sm-2 control-label">Name</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="registerForm_name"
                                   placeholder="Name" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="registerForm_phone" class="col-sm-2 control-label">Mobile No</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone_number" id="registerForm_phone"
                                   placeholder="Mobile Number" required/>
                            <div class="m_error" style="color: red"></div>
                        </div>
                    </div>

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
                        <label for="registerForm_password" class="col-sm-2 control-label">Password</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" id="registerForm_password"
                                   placeholder="Password" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birth_date" class="col-sm-2 control-label">DOB</label>

                        <div class='col-sm-10'>
                            <input type='text' name="dob" class="datepicker form-control" readonly/>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" id="submit" class="btn btn-primary">Register</button>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal modal-success" id="registerModal">
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
<script type="text/javascript">
    $(function () {
        $('.datepicker').datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: '1960:2012',
            dateFormat: 'yy-mm-dd',
            maxDate: new Date()
        });

        $("#registerForm").submit(function (e) {
            e.preventDefault();
            var data = jQuery('#registerForm').serialize();
            jQuery.ajax({
                url: "<?php echo Router::url(array('controller' => 'users', 'action' => 'register'), true);?>",
                type: 'POST',
                data: data,
                success: function (response) {
                    result = JSON.parse(response).result;
                    if (result == 'Success') {
                        jQuery('#register').modal('hide');
                        jQuery('#registerModal').modal('show');
                        jQuery('#registerModal .modal-title').html('<h4>Your are successfully registered</h4>');
                        jQuery('#registerModal .modal-body').html('<p>Please Login to access!</p>');
                        $('#registerForm').each(function () {
                            this.reset();
                        });
                        location.reload(true);
                    } else if (result == 'password_empty') {
                        jQuery('.p_error').html('<h4>Password Required</h4>');
                    } else if (result == 'email_empty') {
                        jQuery('.e_error').html('<h4>Email Required</h4>');
                    } else if (result == 'phone_empty') {
                        jQuery('.m_error').html('<h4>Phone Required Or Invalid Phone Number.</h4>');
                    } else if (result == 'user_exist') {
                        jQuery('.user_error').html('<h4>User Already Exist</h4>');
                    }
                }
            });
        });
    });
</script>