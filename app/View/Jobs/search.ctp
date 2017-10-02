<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 03/09/2017
 * Time: 7:37 PM
 */
?>
</section>
</div>
<!-- Page Header Start -->
<div class="page-header" style="background: url('../assets/img/banner1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-container" style="padding: 20px 0px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
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
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="breadcrumb-wrapper">
                    <h2 class="product-title">Job Results</h2>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="ti-home"></i> Home</a></li>
                        <li class="current">Job Search</li>
                    </ol>
                </div>-->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Find Job Section Start -->
<section class="find-job section">
    <div class="container">
        <h2 class="section-title">Job Results</h2>

        <div class="row">

            <?php if (isset($searchResult) && !empty($searchResult)) {
                foreach ($searchResult as $key => $value) { ?>
                    <div class="col-md-12">
                        <div class="job-list">
                            <div class="thumb">

                            </div>
                            <div class="job-list-content">
                                <h4><?php
                                    echo $this->Html->link($value['Job']['job_title'], array('controller' => 'jobs', 'action' => 'job_detail', $value['Job']['id'], 'plugin' => null)); ?>
                                    <span class="full-time"><?php echo $value['Job']['job_type'] ?></span>
                                </h4>

                                <p><?php echo $value['Job']['job_description']; ?></p>

                                <div class="job-tag">
                                    <div class="pull-left">
                                        <div class="meta-tag">
                                            <span><i
                                                    class="ti-location-pin"></i><?php echo $value['Job']['job_location']; ?></span>
                                            <span><i
                                                    class="ti-time"></i><?php echo $value['Job']['job_department'] ?></span>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <div class="icon">
                                            <i class="ti-heart"></i>
                                        </div>
                                        <div class="btn btn-common btn-rm"><?php
                                            echo $this->Html->link('More Details', array('controller' => 'jobs', 'action' => 'job_detail', $value['Job']['id'], 'plugin' => null)); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>

            <div class="col-md-12">
                <!--                <div class="showing pull-left">-->
                <!--                    <a href="#">Showing <span>6-10</span> Of 24 Jobs</a>-->
                <!--                </div>-->
                <!--                <ul class="pagination pull-right">-->
                <!--                    <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>-->
                <!--                    <li><a href="#">1</a></li>-->
                <!--                    <li><a href="#">2</a></li>-->
                <!--                    <li><a href="#">3</a></li>-->
                <!--                    <li><a href="#">4</a></li>-->
                <!--                    <li><a href="#">5</a></li>-->
                <!--                    <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>-->
                <!--                </ul>-->
            </div>
        </div>
    </div>
</section>
<!-- Find Job Section End -->

