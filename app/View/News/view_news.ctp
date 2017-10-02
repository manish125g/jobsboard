</section>
</div>
<div class="" style="margin-top: 50px;">
    <?php
    if ((isset($news) && !empty($news))) {
        ?>
        <div class="col-md-9 col-xs-12">
            <div style="min-height: 170px;background: #ffffff;border-radius: 12px">
                <div class="title_style">
                    <p class="text-left"><?= $news['News']['news_title'] ?> <span style="float: right;"> <?= date('d-M-Y', strtotime($news['News']['date'])) ?></span></p>
                </div>
                <p class="text-left" style="margin: 10px 15px;">
                    <?= $news['News']['news_short_desc'] ?> <span style="float:right;">City : <b><?= $news['News']['news_city'] ?></b></span>
                </p>
                <div class="clearfix" style="border:solid 1px #32c9ff"></div>
                <p class="text-left" style="margin: 20px 10px;">
                    <?= $news['News']['news_desc'] ?>
                </p>
                <div class="clearfix" style="border:solid 1px #32c9ff"></div>
                <p class="text-left" style="margin: 10px 15px;">
                    <a title="Forward this as a Message(Only in Mobile browsers)"
                       onclick="msg(this,'sms:?body=<?= $news['News']['news_short_desc'] ?>....... Click Here to Read More : http://<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>');"
                       href="" class="no-background">
                        <i class="fa fa-paper-plane action-btn"></i> Forward as Message
                    </a>
                    |
                    <a title="Click to Share on whatsapp"
                       onclick="msg(this, 'whatsapp://send?text=<?= $news['News']['news_desc'] ?>');"
                       href="" data-action="share/whatsapp/share" class="no-background">
                        <i class="fa fa-whatsapp action-btn" aria-hidden="true"></i> Share
                    </a>
                    |
                    <a href="https://www.facebook.com" title="Click to Share on Facebook" class="no-background"
                            onclick="postFb('<?= $news['News']['news_title'] ?>', '<?= $news['News']['news_desc'] ?>', '<?= $news['News']['news_desc'] ?>');">
                        <i class="fa fa-facebook-official"></i> Share on Facebook
                    </a>
                </p>
                <p class="text-right" style="margin: 10px 15px;">
                    News Type : <b><?= $news['News']['news_type'] ?></b>
                </p>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="col-md-9 col-xs-12">
            No News Found
        </div>
        <?php
    }
    ?>
    <div class="col-md-3 col-xs-12">
        <div style="min-height: 500px;background: #FFF;border-radius: 12px">
            <div class="title_style">
                <p class="text-center">Quick Links</p>
            </div>
            <div style="padding: 8px;">
                <?php $userId = $this->Session->read('userId');
                echo $userId;
                if (empty($userId)) { ?>
                    <p>
                        <?php echo $this->Html->link('<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp; Login', '#',
                            array('style' => 'text-decoration: none;font-size:16px',
                                "data-toggle" => "modal", "data-target" => "#login", 'escape' => false)); ?>
                    </p>

                    <p>
                        <?php echo $this->Html->link('<i class="fa fa-registered"></i>&nbsp; Registration', '#',
                            array('style' => 'text-decoration: none;font-size:16px',
                                "data-toggle" => "modal", "data-target" => "#register", 'escape' => false)); ?>
                    </p>
                <?php } ?>

                <p>
                    <?php echo $this->Html->link('<i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Terms & Conditions', '#',
                        array('style' => 'text-decoration: none;font-size:16px', 'escape' => false)); ?>
                </p>
            </div>
        </div>
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
            caption: decodeURIComponent(caption),
            description: decodeURIComponent(description),
            message: ''
        });
    }
</script>