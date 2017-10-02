<div class="banner-bottom">
    <div class="banner-bottom-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="text-center"> Contact us</h1>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-part2">
    <div class="container">
        <div class="col-md-2 col-xs-12"></div>
        <div class="col-md-8 col-xs-12">
            <div class="panel">
                <div class="panel-heading text-center" style="background: #000000;color: #ffffff;">
                    <h5>Please enter your details and message</h5>
                </div>
                <div class="panel-body" style="background: #483D45;color: #ffffff;">
                    <?php
                    echo $this->Form->create("Contact", array("url" => '#', "id" => "contactUs", "class" => "form-horizontal", "type" => "file",
                        "role" => "form", 'inputDefaults' => array('label' => false, 'div' => false))); ?>
                    <div class="form-group">
                        <label for="subject" class="col-sm-2 control-label">Subject<span> * </span></label>

                        <div class="col-sm-10">
                            <?php echo $this->Form->input('subject', array('class' => 'form-control', 'id' => 'subject',
                                'type' => 'text', 'placeholder' => 'Subject', 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Contact No" class="col-sm-2 control-label">Contact No<span> * </span></label>

                        <div class="col-sm-10">
                            <?php echo $this->Form->input('phone_number', array('class' => 'form-control', 'id' => 'number',
                                'type' => 'number', 'placeholder' => 'Contact Number', 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Contact No" class="col-sm-2 control-label">Email<span> * </span></label>

                        <div class="col-sm-10">
                            <?php echo $this->Form->input('email', array('class' => 'form-control', 'id' => 'email',
                                'type' => 'email', 'placeholder' => 'Email Number', 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Contact No" class="col-sm-2 control-label">Message<span> * </span></label>

                        <div class="col-sm-10">
                            <?php echo $this->Form->textarea('message', array('class' => 'form-control', 'id' => 'message',
                                'type' => 'textarea', 'placeholder' => 'Your Message', 'style'=>'resize:none', 'required')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-success btn-block',
                                'type' => 'submit', 'style' =>'background: #C30078')); ?>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="clearfix"></div>
    </div>
</div>
<div id="loader" style="visibility: hidden;z-index: -1"><div id="image"></div></div>
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" style="top: 30%">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: #483D45;color: #ffffff;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center"></h4>
            </div>
            <div class="modal-body text-center">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<script>
    jQuery('#contactUs').submit(function (e){
        e.preventDefault();
        var data = jQuery('#contactUs').serialize();
        jQuery.ajax({
           url: "<?php echo Router::url('homes/contact_us')?>",
            type: 'POST',
            data: data,
            success: function (response){
                if(JSON.parse(response)=='Success'){
                    jQuery('#successModal').modal('show');
                    jQuery('.modal-title').html('<h4>Successfully Submitted your query</h4>');
                    jQuery('.modal-body').html('<p>Thanks for contacting us we will get back to you soon !</p>');
                    $('#contactUs').each(function(){
                        this.reset();
                    });
                }
            }
        });
    });
</script>