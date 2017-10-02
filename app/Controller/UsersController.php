<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 2/5/2017
 * Time: 6:19 PM
 */
App::uses('UserAppController', 'Controller');
class UsersController extends UserAppController
{
    public $name = 'Users';

    public $uses = array('Admin', 'User', 'Admin.RolePermission', 'Admin.Menu');

    public $layout = 'home';

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow("login", "register", "logout");
        $this->Security->unlockedActions = array("login", "register", "logout", "profile", "upload_profile");
        $this->Security->csrfCheck = false;
    }

    public function register(){
        if($this->request->is('ajax') && !empty($this->request->data)){
            $data = $this->request->data;
            if($data['userType'] == 'Recruiter'){
                $data['role_id'] = 6;
            } else if($data['userType'] == 'SalesOfficer'){
                $data['role_id'] = 7;
            } else {
                $data['role_id'] = 5;
            }
            if(empty($data['email'])){
                print_r(json_encode(array("result"=> 'email_empty')));exit;
            }else if(empty($data['phone_number']) || !is_numeric($data['phone_number'])){
                print_r(json_encode(array("result"=>'phone_empty')));exit;
            }else if(empty($data['password'])){
                print_r(json_encode(array("result"=>'password_empty')));exit;
            }else{
                $exist = $this->User->getUserIdByUserName($data['email']);
                if(!count($exist)){
                    $this->User->set($data);
                    $data['User']['dob'] = date('y-m-d', strtotime($data['dob']));
                    if($this->User->save($data)){
                        /*if($this->__sendVerificationMail($this->User->id, $data['User']['email'])){

                        }*/
                        print_r(json_encode(array("result" =>'Success', 'mail'=> false)));exit;
                    }
                } else {
                    print_r(json_encode(array("result" =>'user_exist')));exit;
                }
            }
        }
    }

    public function login()
    {
        $this->layout = 'login';
        /*if ($this->Auth->loggedIn()) {
            print_r(json_encode("Success"));exit;
        }*/
        if ($this->request->is("post")) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $data['userType'] = trim($_POST['userType']);
            $data['email'] = $email;
            $data['password'] = $password;
            if($data['userType'] == 'Recruiter'){
                $data['role_id'] = 6;
            } else if($data['userType'] == 'SalesOfficer'){
                $data['role_id'] = 7;
            } else {
                $data['role_id'] = 5;
            }
            $this->loadModel('User');
            if ($this->User->getValidUser($data) == true) {
                $user = $data["email"];
                $userData = $this->User->getUserDataByUserName($user);
                $flag = $this->Auth->login($userData);
                if ($flag) {
                    if($userData['User']['role_id'] == 6 || $userData['User']['role_id'] == 7){
                        $userPermission = $this->RolePermission->getPermissions($userData['User']['role_id']);
                        $menuPermissions = explode("#", trim($userPermission['RolePermission']['menu_permissions']));
                        $menus = array();
                        foreach ($menuPermissions as $menu){
                            $menuDetails = $this->Menu->find('first', array('conditions'=>array('Menu.id'=>$menu,'Menu.status'=>'Y'), 'fields'=>array('Menu.id', 'Menu.menu_name', 'Menu.parent_id', 'Menu.url')));
                            array_push($menus, $menuDetails['Menu']);
                        }
                        $this->Session->write('menus', $menus);
                    }
                    $this->Session->write('userId', $userData['User']['id']);
                    $this->Session->write('name', $userData['User']['name']);
                    print_r(json_encode("Success"));exit;
                }else{
                    print_r(json_encode('Failed'));exit;
                }
            }else{
               print_r(json_encode('Failed'));exit;
            }
        }
    }

    public function logout(){
        $this->Session->write('userId', '');
        $this->Session->write('name', '');
        $this->Session->write('menus', '');
        $this->Auth->logout();
        $this->redirect($this->referer());
    }

    public function profile(){
        $this->layout = 'main_layout1';
        $userId = $this->Session->read('userId');

        if(!empty($userId)){
            $user = $this->User->find('first', array('conditions' => array('User.id' => $userId)));
            $this->request->data = $user;
            unset($user['User']['id']);
        }
    }

    public function upload_profile(){
        print_r($_POST);exit;
        print_r($_FILES);exit;
    }


}