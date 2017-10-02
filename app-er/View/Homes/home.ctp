<div class="">
    <div class="col-md-3 col-xs-12">
        <div style="min-height: 500px;background: #def6e4;border-radius: 12px">
            <div style="background: cornflowerblue;color: white">
                <p class="text-center">Paid Ads</p>
            </div>
            <?php if(isset($paidAds) && !empty($paidAds)){
                foreach($paidAds as $ads){?>
                    <div class="" style="padding: 5px">
                        <?php $imageFile = '/files/ads/'.$ads['Advertise']['id'].'/'.$ads['Advertise']['image'];
                        echo $this->Html->image($imageFile, array('class' => 'img-responsive', 'style' => 'height: auto')); ?>
                    </div>
                <?php }
            }?>
        </div>
    </div>
    <div class="col-md-6 col-xs-12">
        <div style="min-height: 170px;background: #ffffff;border-radius: 12px">
            <div style="background: cornflowerblue;color: white">
                <p class="text-center">Hot News</p>
            </div>
            <p><?php if (!empty($hotNews)){
                foreach ($hotNews as $news) { ?>
            <ul>
                <li><?php echo $this->Html->link($news['News']['news_title'], '#'); ?></li>
            </ul>
            <?php }
            } ?>
            </p>
        </div>
        <div style="min-height: 170px;background: #ffffff;border-radius: 12px">
            <div style="background: cornflowerblue;color: white">
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
            <div style="background: cornflowerblue;color: white">
                <p class="text-center">Upcoming Events</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xs-12">
        <div style="min-height: 500px;background: #def6e4;border-radius: 12px">
            <div style="background: cornflowerblue;color: white">
                <p class="text-center">Quick Links</p>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="col-md-12" style="padding: 5px">
    <div style="background: #def6e4; border-radius: 12px">
        <div style="background: cornflowerblue;color: white">
            <p class="text-center">Advertisements </p>
        </div>
        <?php include('ads_slidder.ctp'); ?>
    </div>
    <div class="clearfix"></div>
</div>
<div class="col-md-12">
    <div style="background: #ffffff; border-radius: 12px">
        <div style="background: cornflowerblue;color: white">
            <p class="text-center">Advertisements </p>
        </div>
        <?php if(isset($posterAds) && !empty($posterAds)){
            foreach($posterAds as $ads){?>
                <div class="col-md-6 col-xs-12" style="padding: 5px">
                    <?php $imageFile = '/files/ads/'.$ads['Advertise']['id'].'/'.$ads['Advertise']['image'];
                    echo $this->Html->image($imageFile, array('class' => 'img-responsive', 'style' => 'height: auto')); ?>
                </div>
            <?php }
        }?>
        <div class="clearfix"></div>
    </div>
</div>
<div class="clearfix"></div>
<div class="col-md-12 col-xs-12">
    <div style="background: #ffffff; border-radius: 12px;min-height: 175px;">
        <div style="background: cornflowerblue;color: white">
            <p class="text-center">Trending </p>
        </div>
        <marquee>
            <?php if(isset($trendingAds) && !empty($trendingAds)){
                foreach($trendingAds as $ads){?>
                    <div class="col-md-6 col-xs-12" style="padding: 5px">
                        <?php $imageFile = '/files/ads/'.$ads['Advertise']['id'].'/'.$ads['Advertise']['image'];
                        echo $this->Html->image($imageFile, array('class' => 'img-responsive', 'style' => 'height: 150px')); ?>
                    </div>
                <?php }
            }?>
        </marquee>
    </div>
</div>
