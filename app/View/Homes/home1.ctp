<div class="">
    <div class="col-md-3 col-xs-12">
        <div style="min-height: 500px;background: #FFF;border-radius: 12px">
            <div class="title_style">
                <p class="text-center">Paid Ads</p>
            </div>
            <?php if (isset($paidAds) && !empty($paidAds)) {
                foreach ($paidAds as $ads) {
                    ?>
                    <marquee scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();" direction="up">
                        <div class="" style="padding: 5px">
                            <?php $imageFile = '/files/ads/' . $ads['Advertise']['id'] . '/' . $ads['Advertise']['image'];
                            echo $this->Html->image($imageFile, array('class' => 'img-responsive', 'style' => 'height: auto')); ?>
                        </div>
                    </marquee>
                <?php }
            } ?>
        </div>
    </div>
    <div class="col-md-6 col-xs-12">
        <div style="min-height: 170px;background: #ffffff;border-radius: 12px">
            <div class="title_style">
                <p class="text-center"><?= (isset($heading)&&!empty($heading)) ? $heading['Heading']['heading'] : "Hot News" ?></p>
            </div>
            <p>
                <marquee scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();" direction="up">
                    <ul><?php if (!empty($hotNews)) {
                            foreach ($hotNews as $news) { ?>
                                <li><?php echo $this->Html->link($news['News']['news_title'], array(
                                        'controller' => 'News',
                                        'action' => 'viewNews',
                                        '?' => array('newsId' => $news['News']['id'])
                                    )); ?></li>
                            <?php }
                        } ?>
                </marquee>
            </p>
        </div>
        <div style="min-height: 170px;background: #ffffff;border-radius: 12px">
            <div class="title_style">
                <p class="text-center">Hot Job</p>
            </div>
            <?php if (!empty($hotJobs)) {
                foreach ($hotJobs as $job) {
                    ?>
                    <ul>
                        <li><?php echo $this->Html->link($job['Job']['job_title'], '#') ?></li>
                    </ul>
                <?php }
            } ?>
        </div>
        <div style="min-height: 140px;background: #ffffff;border-radius: 12px">
            <div class="title_style">
                <p class="text-center">Upcoming Events</p>
            </div>
        </div>
    </div>
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
<div class="col-md-12" style="padding: 5px">
    <div style="background: #FFF; border-radius: 12px">
        <div class="title_style">
            <p class="text-center">Advertisements </p>
        </div>
        <?php include('ads_slidder.ctp'); ?>
    </div>
    <div class="clearfix"></div>
</div>
<div class="col-md-12">
    <div style="background: #ffffff; border-radius: 12px">
        <div class="title_style">
            <p class="text-center">Advertisements </p>
        </div>
        <?php if (isset($posterAds) && !empty($posterAds)) {
            foreach ($posterAds as $ads) {
                ?>
                <div class="col-md-6 col-xs-12" style="padding: 5px">
                    <?php $imageFile = '/files/ads/' . $ads['Advertise']['id'] . '/' . $ads['Advertise']['image'];
                    echo $this->Html->image($imageFile, array('class' => 'img-responsive', 'style' => 'height: auto')); ?>
                </div>
            <?php }
        } ?>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-12 col-xs-12">
    <div style="background: #ffffff; border-radius: 12px;min-height: 175px;">
        <div class="title_style">
            <p class="text-center">Trending </p>
        </div>
        <marquee>
            <?php if (isset($trendingAds) && !empty($trendingAds)) {
                foreach ($trendingAds as $ads) {
                    ?>
                    <div class="col-md-6 col-xs-6" style="padding: 5px">
                        <?php $imageFile = '/files/ads/' . $ads['Advertise']['id'] . '/' . $ads['Advertise']['image'];
                        echo $this->Html->image($imageFile, array('class' => 'img-responsive', 'style' => 'height: 150px')); ?>
                    </div>
                <?php }
            } ?>
        </marquee>
    </div>
</div>
