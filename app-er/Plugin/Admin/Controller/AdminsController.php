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

    public $uses = array('Admin.Admin', 'Admin.Group', 'Admin.Job', 'Admin.News', 'Admin.Advertise');

    /**
     * @author Himanshu Mishra
     * @reason To filter if any function require to open
     */
    public function beforeFilter(){
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
            )
        );
        foreach ($data as $user) {
            $this->Admin->create();
            $this->Admin->save($user, false);
        }
        exit;
    }

    public function login(){
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
                $data = array("id" => $userId);
                $flag = $this->Auth->login($data);
                if ($flag) {
                    $userName = $userData['Admin']['name'];
                    $this->Session->write('userId', $userId['Admin']['id']);
                    $this->Session->write('email', $user);
                    $this->Session->write('userName',$userName);
                    $this->request->data = null;
                    $url = array("controller" => "admins", "action" => "dashboard", "plugin" => 'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function logout(){
        $this->Auth->logout();
        $url = $this->Auth->redirectUrl();
        $this->redirect($url);
    }

    public function dashboard(){
        $users = $this->Admin->find('count');
        $this->set('users', $users);
        $jobs = $this->Job->find('count');
        $this->set('jobs', $jobs);
        $news = $this->News->find('count');
        $this->set('news', $news);
        $advertise = $this->Advertise->find('count');
        $this->set('ads', $advertise);
    }

    public function forgot_password(){
        $this->__sendForgotMail(1, "Hello Text File");
        echo json_encode("Success");exit;
    }
}