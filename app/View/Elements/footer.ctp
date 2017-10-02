<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 27/08/2017
 * Time: 11:52 PM
 */
?>

<!-- Footer Section Start -->
<footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title"><a class="text-center" href="<?= $this->Html->url('/');  ?>"><?= $this->Html->image('/logo/logo.jpg', array('alt' => 'Go Tabbing', 'style'=>'width: 100px')) ?></a></h3>
                        <div class="textwidget">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Quick Links</h3>
                        <ul class="menu">
                            <?php
                            $userId = $this->Session->read('userId');
                            if (empty($userId)) { ?>
                                <li>
                                    <?php echo $this->Html->link('Login', '#',
                                        array('style' => 'text-decoration: none;',
                                            "data-toggle" => "modal", "data-target" => "#login", 'escape' => false)); ?>
                                </li>

                                <li>
                                    <?php echo $this->Html->link('Registration', '#',
                                        array('style' => 'text-decoration: none;',
                                            "data-toggle" => "modal", "data-target" => "#register", 'escape' => false)); ?>
                                </li>
                            <?php } ?>

                            <li>
                                <?php echo $this->Html->link('Terms & Conditions', array('controller' => 'homes', 'action' => 'terms_conditions'),
                                    array('style' => 'text-decoration: none;', 'escape' => false)); ?>
                            </li>
<!--                            <li><a href="#">License</a></li>-->
                            <li><?php echo $this->Html->link('Contact US', array('controller' => 'homes', 'action' => 'contact_us')) ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Follow Us</h3>
                        <div class="bottom-social-icons social-icon">
                            <a class="twitter" href="https://twitter.com/GrayGrids"><i class="ti-twitter-alt"></i></a>
                            <a class="facebook" href="https://web.facebook.com/GrayGrids"><i class="ti-facebook"></i></a>
                            <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                            <a class="dribble" href="https://dribbble.com/GrayGrids"><i class="ti-dribbble"></i></a>
                            <a class="linkedin" href="https://www.linkedin.com/GrayGrids"><i class="ti-linkedin"></i></a>
                        </div>
                        <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                        <form class="subscribe-box">
                            <input type="text" placeholder="Your email">
                            <input type="submit" class="btn-system" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer area End -->

    <!-- Copyright Start  -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info text-center">
                        <p>All Rights reserved &copy; 2017 - Designed & Developed by <a rel="nofollow" href="#">Credessol Creative Solutions LLP</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

</footer>
<!-- Footer Section End -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="ti-arrow-up"></i>
</a>

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
        </div>
    </div>
</div>
