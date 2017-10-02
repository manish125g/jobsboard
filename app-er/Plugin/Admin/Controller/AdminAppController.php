<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/7/2017
 * Time: 10:20 PM
 */
class AdminAppController extends Controller
{
    public $name = 'AdminApp';

    public $components = array(
        "RequestHandler",
        "Session",
        "Acl",
        "Flash",
        "Security",
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('email' => 'email', 'password' => 'password'),
                    'userModel' => 'Admin',
                    'passwordHasher' => array(
                        'className' => 'Blowfish'
                    ),
                    "scope" => array("Admin.status" => 1)
                )
            ),
            'loginAction' => array(
                'controller' => 'admins',
                'action' => 'login',
                'plugin' => 'admin'
            ),
            'loginRedirect' => array(
                'controller' => 'admins',
                'action' => 'dashboard',
                'plugin' => 'admin'
            ),
            'logoutRedirect' => array(
                'controller' => 'admins',
                'action' => 'logout',
                'plugin' => 'admin'
            ),
            'authError' => 'Did you really think you are allowed to see that?',)
    );

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Security->blackHoleCallback = 'black_hole';
    }

    public function __sendForgotMail($userId = null, $message = null){
        App::uses('CakeEmail', 'Network/Email');
        $Email = new CakeEmail();
        $Email->config('smtp');
        $Email->from(array('hmishra1509@gmail.com' => 'Himanshu Mishra'));
        $Email->to(array('himanshu15990@gmail.com'));
        $Email->addBcc(array('hmishra1509@gmail.com'));
        $Email->subject('Access Request Done');
        $Email->template('default', 'default');
        $Email->emailFormat('both');
        $Email->viewVars(array('message' => $message));
        $Email->send();
        return true;
    }

    public function black_hole($type)
    {
        CakeLog::error(json_encode($type));
        $this->redirect($this->referer());
    }

    protected function __writeFile($file, $id, $module)
    {
        $fileName = $file["name"];
        $dir = WWW_ROOT . "files" . DS . $module . DS . $id;
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        $flag = move_uploaded_file($file["tmp_name"], $dir . DS . $fileName);
        return $flag;
    }
}