<div class="">
    <?php
    if ((isset($job) && !empty($job))) {
        ?>
        <div class="col-md-9 col-xs-12">
            <div style="">
                <div class="title_style">
                    <p class="text-left"><?= $job['Job']['job_title'] ?> <span style="float: right;"> <?= date('d-M-Y', strtotime($job['Job']['created'])) ?></span></p>
                </div>
                <p class="text-left" style="margin: 10px 15px;">
                    <?= $job['Job']['job_description'] ?> <span style="float:right;">City : <b><?= $job['Job']['job_location'] ?></b></span>
                </p>
                <div class="clearfix" style="border:solid 1px #32c9ff"></div>
                <p class="text-left" style="margin: 20px 10px;">
                    <?= $job['Job']['job_description'] ?>
                </p>
                <div class="clearfix" style="border:solid 1px #32c9ff"></div>
                <p class="text-left" style="margin: 10px 15px;background: #fff">
                    <a title="Forward this as a Message(Only in Mobile browsers)"
                       onclick="msg(this,'sms:?body=<?= $job['Job']['job_description'] ?>....... Click Here to Read More : http://<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>');"
                       href="" class="no-background">
                        <i class="fa fa-paper-plane action-btn"></i> Forward as Message
                    </a>
                    |
                    <a title="Click to Share on whatsapp"
                       onclick="msg(this, 'whatsapp://send?text=<?= $job['Job']['job_description'] ?>');"
                       href="" data-action="share/whatsapp/share" class="">
                        <i class="fa fa-whatsapp action-btn" aria-hidden="true"></i> Share
                    </a>
                    |
                    <a href="https://www.facebook.com" title="Click to Share on Facebook" class="no-background"
                       onclick="postFb('<?= $job['Job']['job_title'] ?>', '<?= $job['Job']['job_description'] ?>', '<?= $job['Job']['job_description'] ?>');">
                        <i class="fa fa-facebook-official"></i> Share on Facebook
                    </a>
                </p>
                <p class="text-right" style="margin: 10px 15px;">
                    Job Type : <b><?= $job['Job']['job_type'] ?></b>
                </p>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="col-md-9 col-xs-12">
            No Job Found
        </div>
        <?php
    }
    ?>
    <div class="col-md-3 col-xs-12">
        
    </div>
    <div class="clearfix"></div>
</div>
<script>
    function msg(context, msg){
        $(context).attr("href", msg+"%0D%0A %0D%0ARead more at: "+window.location.href);
    }
    function postFb(name, caption, description) {
        FB.ui({
            method: 'feed',
            name: name,
            link: window.location.href,
            //picture: 'http://www.tumhomerijaan.com/fb-app.png',
            caption: decodeURIComponent(caption),
            description: decodeURIComponent(description),
            message: ''
        });
    }
</script>