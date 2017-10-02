<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 28/08/2017
 * Time: 12:00 AM
 */
?>
<div class="search-container" style="padding: 20px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="">
                <h1 class="text-center" style="margin-bottom: 1%;">Paid Ads</h1>
                <?php if (isset($paidAds) && !empty($paidAds)) { ?>
                    <marquee scrollamount="5" onmouseover="this.stop();" direction="up" onmouseout="this.start();">
                        <?php
                        foreach ($paidAds as $ads) {
                            ?>
                            <div class="" style="width: 20%; display: inline-block; margin-right: 1%;">
                                <?php $imageFile = '/files/ads/' . $ads['Advertise']['id'] . '/' . $ads['Advertise']['image'];
                                echo $this->Html->image($imageFile, array('class' => 'img-responsive', 'style' => 'max-height:150px; max-width:150px;', )); ?>
                            </div>
                        <?php } ?>
                    </marquee>
                <?php } ?>
            </div>
            <div class="col-md-12">
                <h1>Find the job that fits your life</h1><br><h2>More than <strong>12,000</strong> jobs are waiting to Kickstart your career!</h2>
                <div class="content">
                    <?php $url = array("controller" => "jobs", "action" => "search");
                    echo $this->Form->create("Job", array("url" => $url, "class" => "form-horizontal",
                        "role" => "form", 'novalidate' => true, 'inputDefaults' => array('label' => false, 'div' => false))); ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <?php echo $this->Form->input('Job.job_title', array('class' => 'form-control', 'type' => 'text', 'placeholder' => 'job title / keywords / company name')); ?>

                                <i class="ti-time"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <?php echo $this->Form->input('Job.job_location', array('class' => 'form-control', 'type' => 'text', 'placeholder' => 'city / province / zip code')); ?>
                                <i class="ti-location-pin"></i>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            
                        </div>
                        <div class="col-md-1 col-sm-6">
                            <button type="submit" class="btn btn-search-icon"><i class="ti-search"></i>
                            </button>
                        </div>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
                <!--<div class="popular-jobs">
                    <b>Popular Keywords: </b>
                    <a href="#">Web Design</a>
                    <a href="#">Manager</a>
                    <a href="#">Programming</a>
                </div>-->
            </div>
            <div class="col-md-12">
                <h1 class="text-center" style="margin-bottom: 2%;">Trending Ads</h1>
                <marquee>
                    <?php if (isset($trendingAds) && !empty($trendingAds)) {
                        foreach ($trendingAds as $ads) {
                            ?>
                            <div class="" style="width: 50%;">
                                <?php $imageFile = '/files/ads/' . $ads['Advertise']['id'] . '/' . $ads['Advertise']['image'];
                                echo $this->Html->image($imageFile, array('class' => 'img-responsive', 'style' => 'max-height: 150px')); ?>
                            </div>
                        <?php }
                    } ?>
                </marquee>
            </div>
        </div>
    </div>
</div>
</section>
<!-- end intro section -->
</div>
<!-- Find Job Section Start -->
<section class="find-job section">
    <div class="container">
        <h2 class="section-title"><?= (isset($heading)&&!empty($heading)) ? $heading['Heading']['heading'] : "Hot News" ?></h2>
        <div class="row">
            <div class="col-md-12">
                <?php if (!empty($hotNews)) { ?>
                    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" loop="true">
                        <?php foreach ($hotNews as $news) {
                            ?>
                            <div class="job-list col-sm-12">
                                <!--<div class="thumb">
                                <?/*= $this->Html->image("/assets/img/jobs/img-".$img[0].".jpg", array(
                                "alt" => $news['News']['news_title'],
                                'url' => array('controller' => 'News', 'action' => 'viewNews', '?' => array('newsId' => $news['News']['id'])
                                ))) */?>
                            </div>-->
                                <div class="job-list-content" style="margin-left: 10px;">
                                    <h4><?= $this->Html->link($news['News']['news_title'], array(
                                            'controller' => 'News',
                                            'action' => 'viewNews',
                                            '?' => array('newsId' => $news['News']['id'])
                                        )); ?><span class="full-time"><?= $news['News']['news_type'] ?></span></h4>
                                    <p><?= $news['News']['news_short_desc'] ?></p>
                                    <div class="job-tag">
                                        <div class="pull-left">
                                            <div class="meta-tag">
                                                <span><a href="#"><i class="ti-calendar"></i><?= $news['News']['date'] ?></a></span>
                                                <span><i class="ti-location-pin"></i><?= $news['News']['news_city'] ?></span>
                                            </div>
                                        </div>
                                        <div class="pull-right">
                                            <!--<div class="icon">
                                                <i class="ti-heart"></i>
                                            </div>-->
                                            <?= $this->Html->link("More Detail", array(
                                                'controller' => 'News',
                                                'action' => 'viewNews',
                                                '?' => array('newsId' => $news['News']['id'])),
                                                array('class'=>'btn btn-common btn-rm')); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </marquee>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- Find Job Section End -->

<!-- Featured Jobs Section Start -->
<section class="featured-jobs section">
    <div class="container">
        <h2 class="section-title">
            Hot Jobs
        </h2>
        <div class="row">
            <?php if (!empty($hotJobs)) {
                foreach ($hotJobs as $job) {
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="featured-item">
                            <div class="featured-wrap">
                                <div class="featured-inner">
                                    <!--<figure class="item-thumb">
                                        <?/*= $this->Html->image("/assets/img/features/img-".$img[0].".jpg", array(
                                            "alt" => $job['Job']['job_title'],
                                            "class"=>"hover-effect",
                                            'url' => "#"
                                            )) */?>
                                    </figure>-->
                                    <div class="item-body">
                                        <h3 class="job-title">
                                            <?php echo $this->Html->link($job['Job']['job_title'], array('controller' =>'jobs', 'action' =>'job_detail', $job['Job']['id']), array(
                                                'escape' => false
                                            ));?></h3>
                                        <div class="adderess"><i class="ti-location-pin"></i> <?= $job['Job']['company_name'] ?> | <?= $job['Job']['job_location'] ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-foot">
                                <span><i class="ti-calendar"></i> <?= date('Y-m-d', strtotime($job['Job']['created'])) ?></span>
                                <span><i class="ti-time"></i> <?= ucwords($job['Job']['job_type']) ?></span>
                                <div class="view-iocn">
                                    <?php echo $this->Html->link('<i class="ti-arrow-right"></i>', array('controller' =>'jobs', 'action' =>'job_detail', $job['Job']['id']), array(
                                        'escape' => false
                                    ));?>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</section>
<!-- Featured Jobs Section End -->

<!-- Start Purchase Section -->
<section class="section purchase" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="section-content text-center">
                <h1 class="title-text">
                    Looking for a Job
                </h1>
                <p>Join thousand of employers and earn what you deserve!</p>
                <?= $this->Html->link('Get Started Now', '#', array('class'=>'btn btn-common')) ?>
            </div>
        </div>
    </div>
</section>



<!--<section id="blog" class="section">-->
<!--    -->
<!--    <div class="container">-->
<!--        <h2 class="section-title">-->
<!--            Upcoming Events-->
<!--        </h2>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">-->
<!--                -->
<!--                <div class="blog-item-wrapper">-->
<!--                    <div class="blog-item-text">-->
<!--                        <div class="meta-tags">-->
<!--                            <span class="date"><i class="ti-calendar"></i> Dec 20, 2017</span>-->
<!--                            <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>-->
<!--                        </div>-->
<!--                        <a href="#">-->
<!--                            <h3>-->
<!--                                Tips to write an impressive resume online for beginner-->
<!--                            </h3>-->
<!--                        </a>-->
<!--                        <p>-->
<!--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.-->
<!--                        </p>-->
<!--                        <a href="#" class="btn btn-common btn-rm">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                -->
<!--            </div>-->
<!---->
<!--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">-->
<!--                -->
<!--                <div class="blog-item-wrapper">-->
<!--                    <div class="blog-item-text">-->
<!--                        <div class="meta-tags">-->
<!--                            <span class="date"><i class="ti-calendar"></i> Jan 20, 2018</span>-->
<!--                            <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>-->
<!--                        </div>-->
<!--                        <a href="#">-->
<!--                            <h3>-->
<!--                                Let's explore 5 cool new features in JobBoard theme-->
<!--                            </h3>-->
<!--                        </a>-->
<!--                        <p>-->
<!--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.-->
<!--                        </p>-->
<!--                        <a href="#" class="btn btn-common btn-rm">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                -->
<!--            </div>-->
<!---->
<!--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 blog-item">-->
<!--                -->
<!--                <div class="blog-item-wrapper">-->
<!--                    <div class="blog-item-text">-->
<!--                        <div class="meta-tags">-->
<!--                            <span class="date"><i class="ti-calendar"></i> Mar 20, 2018</span>-->
<!--                            <span class="comments"><a href="#"><i class="ti-comment-alt"></i> 5 Comments</a></span>-->
<!--                        </div>-->
<!--                        <a href="#">-->
<!--                            <h3>-->
<!--                                How to convince recruiters and get your dream job-->
<!--                            </h3>-->
<!--                        </a>-->
<!--                        <p>-->
<!--                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium asperiores ad vitae.-->
<!--                        </p>-->
<!--                        <a href="#" class="btn btn-common btn-rm">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                -->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- blog Section End -->

<!-- Testimonial Section Start -->
<section id="testimonial" class="section">
    <div class="container">
        <div class="row">
            <div class="touch-slider" class="owl-carousel owl-theme">
                <div class="item active text-center">
                    <img class="img-member" src="assets/img/testimonial/img1.jpg" alt="">
                    <div class="client-info">
                        <h2 class="client-name">Jessica <span>(Senior Accountant)</span></h2>
                    </div>
                    <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
                </div>
                <div class="item text-center">
                    <img class="img-member" src="assets/img/testimonial/img2.jpg" alt="">
                    <div class="client-info">
                        <h2 class="client-name">John Doe <span>(Project Menager)</span></h2>
                    </div>
                    <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
                </div>
                <div class="item text-center">
                    <img class="img-member" src="assets/img/testimonial/img3.jpg" alt="">
                    <div class="client-info">
                        <h2 class="client-name">Helen <span>(Engineer)</span></h2>
                    </div>
                    <p><i class="fa fa-quote-left quote-left"></i> The team that was assigned to our project... were extremely professional <i class="fa fa-quote-right quote-right"></i><br> throughout the project and assured that the owner expectations were met and <br> often exceeded. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Clients Section -->
<section class="clients section">
    <div class="container">
        <h2 class="section-title">
            <!--Clients & Partners-->Poster Ads
        </h2>
        <div class="row">
            <div id="clients-scroller">
                <?php include('ads_slidder.ctp'); ?>
                <div class="items">
                    <img src="assets/img/clients/img1.png" alt="">
                </div>
                <div class="items">
                    <img src="assets/img/clients/img2.png" alt="">
                </div>
                <div class="items">
                    <img src="assets/img/clients/img3.png" alt="">
                </div>
                <div class="items">
                    <img src="assets/img/clients/img4.png" alt="">
                </div>
                <div class="items">
                    <img src="assets/img/clients/img5.png" alt="">
                </div>
                <div class="items">
                    <img src="assets/img/clients/img6.png" alt="">
                </div>
                <!--<div class="items">
                    <img src="assets/img/clients/img6.png" alt="">
                </div>
                <div class="items">
                    <img src="assets/img/clients/img6.png" alt="">
                </div>-->
            </div>
        </div>

    </div>
</section>
<!-- Client Section End -->

<!-- Counter Section Start -->
<section id="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-briefcase"></i>
                    </div>
                    <div class="desc">
                        <h2>Jobs</h2>
                        <h1 class="counter"><?php echo isset($jobsCount) ? $jobsCount : ''; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-user"></i>
                    </div>
                    <div class="desc">
                        <h2>Members</h2>
                        <h1 class="counter"><?php echo isset($userCount) ? $userCount: ''; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-write"></i>
                    </div>
                    <div class="desc">
                        <h2>News</h2>
                        <h1 class="counter"><?php echo isset($newsCount) ? $newsCount : ''; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="counting">
                    <div class="icon">
                        <i class="ti-heart"></i>
                    </div>
                    <div class="desc">
                        <h2>Ads</h2>
                        <h1 class="counter"><?php echo isset($adsCount) ? $adsCount : ''; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->
