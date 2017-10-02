</section>
</div>
<style>
    .nav-tabs {
        background-color: transparent;
        margin-bottom: 20px;
    }

    .nav-tabs > li > a {
        color: #000;
        display: block;
        font-size: 15px;
        border-radius: 4px;
        padding: 10px 14px;
        font-weight: 700;
        letter-spacing: 0.5px;
        overflow: hidden;
    }
</style>
<section class="featured-jobs section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-8">
                <h2 class="section-title">
                    Your Ads
                </h2>
                <ul class="nav nav-tabs">
                    <?php if (isset($adsCategories) && !empty($adsCategories)) {
                        $count = 0;
                        foreach ($adsCategories as $adsCategory) {
                            ($count == 0) ? ($active = 'active') : ($active = '')
                            ?>
                            <li class="category_i_li text-center cat_div <?= $active ?>">
                                <a style="color: <?php echo $adsCategory['AdsCategory']['color'] ?>" data-toggle="tab"
                                   href="#<?= str_replace(" ", "_", $adsCategory['AdsCategory']['name']) ?>">
                                    <?= $adsCategory['AdsCategory']['name'] ?><br/>
                                    <?php echo $adsCategory['AdsCategory']['font_icon']; ?>
                                </a>
                            </li>
                            <?php $count++;
                        }
                    } ?>
                </ul>

                <div class="tab-content">
                    <?php if (isset($adsCategories) && !empty($adsCategories)) {
                        $count = 0;
                        foreach ($adsCategories as $adsCategory) {
                            ($count == 0) ? ($active = 'active') : ($active = '')
                            ?>
                            <div id="<?= str_replace(" ", "_", $adsCategory['AdsCategory']['name']) ?>"
                                 class="tab-pane fade in <?= $active ?>">
                                <h3><?= $adsCategory['AdsCategory']['name'] ?></h3>
                            </div>
                            <?php $count++;
                        }
                    } ?>
                </div>
            </div>
            <div class="col-md-4" style="border-left: 2px solid black">
                <div style="min-height: 200px;background: #FFF;border-radius: 12px">
                    <div class="">
                        <p class="text-center">Quick Links</p>
                    </div>
                    <div style="padding: 8px;">
                        <?php $userId = $this->Session->read('userId');
                        echo $userId;
                        if (empty($userId)) { ?>
                            <p>
                                <?php echo $this->Html->link('Login', '#',
                                    array('style' => 'text-decoration: none;font-size:16px',
                                        "data-toggle" => "modal", "data-target" => "#login", 'escape' => false)); ?>
                                /&nbsp;<?php echo $this->Html->link('Registration', '#',
                                    array('style' => 'text-decoration: none;font-size:16px',
                                        "data-toggle" => "modal", "data-target" => "#register", 'escape' => false)); ?>
                            </p>
                        <?php } ?>

                        <p>
                            <?php echo $this->Html->link('Post new ad', '#',
                                array('style' => 'text-decoration: none;font-size:16px', 'escape' => false)); ?>
                        </p>

                        <p>
                            <?php echo $this->Html->link('Edit', '#',
                                array('style' => 'text-decoration: none;font-size:16px', 'escape' => false)); ?>

                            / &nbsp; <?php echo $this->Html->link('Remove Ad', '#',
                                array('style' => 'text-decoration: none;font-size:16px', 'escape' => false)); ?>
                        </p>

                        <p>
                            <?php echo $this->Html->link('Terms & Conditions', array('controller' => 'homes', 'action' => 'terms_conditions'),
                                array('style' => 'text-decoration: none;font-size:16px', 'escape' => false)); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<!--<div class="" style="min-height: 500px;background: #f6f6f6;padding: 5px">
    <h2>Recent List</h2>

</div>
<div class="" style="min-height: 200px;background: #f6f6f6;padding: 5px;margin-top: 5px">
    <h2>Paid Ads </h2>

</div>-->
<script>
</script>