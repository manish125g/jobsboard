<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php echo $this->Html->image('user2-160x160.jpg', array('class' =>'img-circle'));?>
            </div>
            <div class="pull-left info">
                <p>System Engineer</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">

            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wifi"></i>
                    <span>Heading</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Change Heading', array('controller' =>'heading',
                            'action'=>'change_heading', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wifi"></i>
                    <span>News</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Add News', array('controller' =>'news',
                            'action'=>'add_news', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> All News', array('controller' =>'news',
                            'action'=>'admin', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wifi"></i>
                    <span>Media</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Add Media', array('controller' =>'medias',
                            'action'=>'add', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> All Media', array('controller' =>'medias',
                            'action'=>'admin', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wifi"></i>
                    <span>Ads Category</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Add ads Category', array('controller' =>'advertisements',
                            'action'=>'add_category', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> All Ads Category', array('controller' =>'advertisements',
                            'action'=>'category_admin', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wifi"></i>
                    <span>Ads</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                    <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Add Ads', array('controller' =>'advertisements',
                        'action'=>'add_ads', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                    <li>
                    <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> All Ads', array('controller' =>'advertisements',
                        'action'=>'admin', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wifi"></i>
                    <span>Jobs</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Add Jobs', array('controller' =>'jobs',
                            'action'=>'add_job', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> All Job', array('controller' =>'jobs',
                            'action'=>'admin', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wifi"></i>
                    <span>Roles</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Add roles', array('controller' =>'roles',
                            'action'=>'add_roles', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Manage roles', array('controller' =>'roles',
                            'action'=>'admin', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wifi"></i>
                    <span>Menus</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Add Menu', array('controller' =>'menu',
                            'action'=>'add_menu', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i> Manage Menu', array('controller' =>'menu',
                            'action'=>'admin', 'plugin' =>'admin'), array('escape' =>false));?>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
