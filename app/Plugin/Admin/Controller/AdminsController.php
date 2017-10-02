<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/7/2017
 * Time: 10:21 PM
 */
class AdminsController extends AdminAppController
{
    public $name = "Admins";

    public $layout = 'admin_dashboard_layout';

    public $uses = array('Admin.Admin', 'Admin.Group', 'Admin.Job', 'Admin.News', 'Admin.Advertise', 'Admin.Roles', 'Admin.Menu', 'Admin.RolePermission');

    /**
     * @author Himanshu Mishra
     * @reason To filter if any function require to open
     */
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow("login", "init_admin");
    }


    /**
     * @author Himanshu Mishra
     * insert default admins values
     */
    public function init_admin()
    {
        $data = array(
            0 => array(
                "Admin" => array(
                    "name" => "Him",
                    "email" => "himanshu@bradproperty.com",
                    "password" => "12345678",
                    "phone_number" => '9090909090',
                    "created" => date('Y-m-d H:i:s'),
                    "updated" => date('Y-m-d H:i:s')
                )
            ),
            1 => array(
                "Admin" => array(
                    "name" => "Shaili",
                    "email" => "shaili@bradproperty.com",
                    "password" => "12345678",
                    "phone_number" => '9090909090',
                    "created" => date('Y-m-d H:i:s'),
                    "updated" => date('Y-m-d H:i:s')
                )
            ),
            2 => array(
                "Admin" => array(
                    "name" => "Real SubAdmin",
                    "email" => "sub-admin@bradproperty.com",
                    "password" => "12345678",
                    "phone_number" => '9090909090',
                    "created" => date('Y-m-d H:i:s'),
                    "updated" => date('Y-m-d H:i:s')
                )
            ),
            3 => array(
                "Admin" => array(
                    "name" => "Real Admin",
                    "email" => "admin@bradproperty.com",
                    "password" => "12345678",
                    "phone_number" => '9090909090',
                    "created" => date('Y-m-d H:i:s'),
                    "updated" => date('Y-m-d H:i:s')
                )
            ),
            4 => array(
                "Admin" => array(
                    "name" => "Manish",
                    "email" => "manish011994@gmail.com",
                    "password" => "12345678",
                    "phone_number" => '9090909090',
                    "created" => date('Y-m-d H:i:s'),
                    "updated" => date('Y-m-d H:i:s')
                )
            ),
            5 => array(
                "Admin" => array(
                    "name" => "Parent Admin",
                    "email" => "parent_admin@gmail.com",
                    "password" => "12345678",
                    "group_id"=>4,
                    "phone_number" => '9090909090',
                    "created" => date('Y-m-d H:i:s'),
                    "updated" => date('Y-m-d H:i:s')
                )
            ),
            6 => array(
                "Admin" => array(
                    "name" => "News and Ads Admin",
                    "email" => "news@gmail.com",
                    "password" => "12345678",
                    "group_id"=>1,
                    "phone_number" => '9090909090',
                    "created" => date('Y-m-d H:i:s'),
                    "updated" => date('Y-m-d H:i:s')
                )
            ),
            7 => array(
                "Admin" => array(
                    "name" => "Posting Jobs and Staffing zone Admin",
                    "email" => "jobs@gmail.com",
                    "password" => "12345678",
                    "group_id"=>3,
                    "phone_number" => '9090909090',
                    "created" => date('Y-m-d H:i:s'),
                    "updated" => date('Y-m-d H:i:s')
                )
            ),
            8 => array(
                "Admin" => array(
                    "name" => "Entertainment Admin",
                    "email" => "entertainment@gmail.com",
                    "password" => "12345678",
                    "group_id"=>2,
                    "phone_number" => '9090909090',
                    "created" => date('Y-m-d H:i:s'),
                    "updated" => date('Y-m-d H:i:s')
                )
            ));
        foreach ($data as $user) {
            $this->Admin->create();
            $this->Admin->save($user, false);
        }
        exit;
    }

    public function login()
    {
        $this->layout = 'admin_login';
        if ($this->Auth->loggedIn()) {
            $url = array("controller" => "admins", "action" => "dashboard", "plugin" => 'admin');
            $this->redirect($url);
        }
        if ($this->request->is("post")) {
            $data = $this->request->data;
            $this->Admin->set($data);
            $fields = array("email", "password");
            if ($this->Admin->validates(array('fieldList' => $fields))) {
                $user = $data["Admin"]["email"];
                $userId = $this->Admin->getUserIdByUserName($user);
                $userData = $this->Admin->getLoggedInUserData($user);
                $userPermission = $this->RolePermission->getPermissions($userData['Admin']['group_id']);
                $data = array("id" => $userId);
                $flag = $this->Auth->login($data);
                if ($flag) {
                    $userName = $userData['Admin']['name'];
                    $this->Session->write('userId', $userId['Admin']['id']);
                    $this->Session->write('email', $user);
                    $this->Session->write('userName', $userName);
                    $this->Session->write('userType', 'admin');
                    $menuPermissions = explode("#", trim($userPermission['RolePermission']['menu_permissions']));
                    $menus = array();
                    foreach ($menuPermissions as $menu){
                        $menuDetails = $this->Menu->find('first', array('conditions'=>array('Menu.id'=>$menu,'Menu.status'=>'Y'), 'fields'=>array('Menu.id', 'Menu.menu_name', 'Menu.parent_id', 'Menu.url')));
                        array_push($menus, $menuDetails['Menu']);
                    }
                    $this->Session->write('menus', $menus);
                    $this->request->data = null;
                    $url = array("controller" => "admins", "action" => "dashboard", "plugin" => 'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function logout()
    {
        $this->Auth->logout();
        $this->Session->write('menus', '');
        $this->Session->write('userId', '');
        $this->Session->write('email', '');
        $this->Session->write('userName', '');
        $this->Session->write('userType', '');
        $name = $this->Session->read('name');
        if(empty($name)){
            $url = $this->Auth->redirectUrl();
            $this->redirect($url);
        } else {
            $this->Session->write('userId', '');
            $this->Session->write('name', '');
            $this->Session->write('menus', '');
            $this->redirect(array('controller'=>'Homes','action'=>'home', 'plugin'=>''));
        }
    }

    public function dashboard()
    {
        $users = $this->Admin->find('count');
        $this->set('users', $users);
        $jobs = $this->Job->find('count');
        $this->set('jobs', $jobs);
        $news = $this->News->find('count');
        $this->set('news', $news);
        $advertise = $this->Advertise->find('count');
        $this->set('ads', $advertise);
    }

    public function forgot_password()
    {
        $this->__sendForgotMail(1, "Hello Text File");
        echo json_encode("Success");
        exit;
    }
}