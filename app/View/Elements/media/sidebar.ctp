<div class="top-navigation">
    <div class="t-menu">MENU</div>
    <div class="t-img">
        <?php echo $this->Html->image("/media/images/lines.png"); ?>
    </div>
    <div class="clearfix"></div>
</div>
<div class="drop-navigation drop-navigation">
    <ul class="nav nav-sidebar">
        <li class="active">
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home',
                array('controller' =>'medias', 'action' =>'home'), array('escape' => false, 'class' =>'home-icon'));?>
        </li>
        <script>
            $("li a.menu1").click(function () {
                $("ul.cl-effect-2").slideToggle(300, function () {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-menu -->
        <script>
            $("li a.menu").click(function () {
                $("ul.cl-effect-1").slideToggle(300, function () {
                    // Animation complete.
                });
            });
        </script>
    </ul>
    <!-- script-for-menu -->
    <script>
        $(".top-navigation").click(function () {
            $(".drop-navigation").slideToggle(300, function () {
                // Animation complete.
            });
        });
    </script>
    <div class="side-bottom">
        <div class="side-bottom-icons">
            <ul class="nav2">
                <li><a href="#" class="facebook"> </a></li>
                <li><a href="#" class="facebook twitter"> </a></li>
                <li><a href="#" class="facebook chrome"> </a></li>
                <li><a href="#" class="facebook dribbble"> </a></li>
            </ul>
        </div>
        <div class="copyright">
            <p>Copyright © 2017 job Portal. All Rights Reserved</p>
        </div>
    </div>
</div>