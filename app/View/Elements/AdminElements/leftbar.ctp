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
                <?php $user =  $this->Session->read('Auth.User.User.name'); ?>
                <p><?= (isset($user) && !empty($user)) ? $user : $this->Session->read('userName') ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="treeview">
                <?php echo $this->Html->link('Home', array('controller'=>'homes', 'action' =>'home', 'plugin' => null), array('escape' =>false, 'class'=>'active'));?>
            </li>
            <?php
            $menus = $this->Session->read('menus');
                foreach ($menus as $menu){
                    if($menu['parent_id'] == 0 && $menu['url'] == '#'){
                        ?>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-wifi"></i> <span><?php echo $menu['menu_name']; ?></span>
                                </a>
                        <?php
                        $subMenus = $this->Menu->searchForId($menu['id'], $menus);
                        foreach ($subMenus as $subMenu){?>
                            <ul class="treeview-menu ">
                                <?php
                                if($subMenu['parent_id'] == 0 && $subMenu['url'] == '#'){
                                    ?>
                                    <li class="treeview <?php echo (!empty($this->params['controller']) && ($this->params['controller']==$action[2]) )?'active' :'inactive' ?>">
                                        <a href="#">
                                            <i class="fa fa-wifi"></i> <span><?php echo $subMenu['menu_name']; ?></span>
                                        </a>
                                    </li>
                                    <?php
                                } else {
                                    $action = explode("/",$subMenu['url']);
                                    $action[1] = (isset($action[1]) && !empty($action[1])) ? $action[1] : "";
                                    $action[2] = (isset($action[2]) && !empty($action[2])) ? $action[2] : "";
                                    $action[3] = (isset($action[3]) && !empty($action[3])) ? $action[3] : "";
                                    ?>
                                    <li <?php echo (!empty($this->params['action']) && ($this->params['action']==$action[3]) )?'active' :'inactive' ?>>
                                        <?php echo $this->Html->link('<i class="fa fa-circle-o"></i>'.$subMenu['menu_name'], array('plugin' =>$action[1],
                                            'controller'=>$action[2], 'action' =>$action[3]), array('escape' =>false, 'class'=>'active'));?>
                                    </li>
                                    <?php
                                }?>
                            </ul>
                            <?php
                        }
                        ?>
                            </li>
                        <?php
                    } else if($menu['parent_id'] == 0){
                        $action = explode("/",$menu['url']);
                        $action[1] = (isset($action[1]) && !empty($action[1])) ? $action[1] : "";
                        $action[2] = (isset($action[2]) && !empty($action[2])) ? $action[2] : "";
                        $action[3] = (isset($action[3]) && !empty($action[3])) ? $action[3] : "";
                        ?>
            <li class="treeview <?php echo (!empty($this->params['action']) && ($this->params['action']==$action[3]) )?'active' :'inactive' ?>">
                <?php echo $this->Html->link('<i class="fa fa-wifi"></i><span>'. $menu['menu_name'] .'</span>', array('plugin' =>$action[1],
                    'controller'=>$action[2], 'action' =>$action[3]), array('escape' =>false, 'class'=>'active'));?>
            </li>
            <?php
                    }
                }
            ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
