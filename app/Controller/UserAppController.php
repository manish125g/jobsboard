<?php
/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 2/12/2017
 * Time: 12:28 AM
 */

App::uses('Controller', 'Controller');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class UserAppController extends AppController
{
    public $name ='UserApp';

    public $components = array(
        "RequestHandler",
        "Session",
        "Flash",
        "Acl",
        "Security",
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('email' => 'email', 'password' => 'password'),
                    'userModel' => 'User',
                    'passwordHasher' => array(
                        'className' => 'Blowfish'
                    ),
                    "scope" => array("User.status" => 1)
                )
            ),
            'loginAction' => array(
                'controller' => 'homes',
                'action' => 'home',
                'plugin' => null
            ),
            'logoutRedirect' => array(
                'controller' => 'users',
                'action' => 'logout',
                'plugin' => null
            ),
            'authError' => 'Did you really think you are allowed to see that?',)
    );

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Security->blackHoleCallback = 'black_hole';
        $groupId = $this->Auth->user("groupId");
        $isAjax = $this->request->is('ajax');
        if (!empty($groupId) && $groupId != 1 && !$isAjax) {
            return $this->redirect($this->request->referer());
        }
    }

    public function black_hole($type)
    {
        CakeLog::error(json_encode($type));
        $this->redirect($this->referer());
    }

    public function __sendVerificationMail($id, $mail){

    }


}