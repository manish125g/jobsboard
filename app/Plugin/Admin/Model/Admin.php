<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/7/2017
 * Time: 11:10 PM
 */
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class Admin extends AdminAppModel
{
    public $name = 'admins';

    public $useTable = 'admins';

    public $validate = array(
        'email' => array(
            'mustNotEmpty' => array(
                'rule' => 'notBlank',
                'message' => "User name must not be blank",
                "last" => true
            ),
            'alphabet' => array(
                'rule' => 'email',
                'message' => 'User name should be a email'
            )
        ),
        'password' => array(
            'mustNotEmpty' => array(
                'rule' => 'notBlank',
                'message' => "Password must not be blank"
            )
        ),
        'name' => array(
            'mustNotEmpty' => array(
                'rule' => 'notBlank',
                'message' => "Name must not be blank"
            )
        )
    );

    public function getValidUser($data)
    {
        $nick = array_shift($data);
        $password = trim($this->data[$this->alias]["password"]);
        if (!empty($password)) {
            $conditions = array("Admin.email" => $nick);
            $fields = array("Admin.password", "Admin.status");
            $result = $this->find("first", array("conditions" => $conditions, "fields" => $fields));
            if (!empty($result)) {
                $status = $result[$this->alias]["status"];
                if (!$status) {
                    return __("This Account is not active.");
                }
                else {
                    $storedHash = $result[$this->alias]["password"];
                    $passwordHasher = new BlowfishPasswordHasher();
                    $correct = $passwordHasher->check($password, $storedHash);
                    if ($correct) {
                        return true;
                    }
                    return __("Username & Password not match for admin");
                }
            }
            return __("Admin account does not exists");
        }
        return true;
    }


    public function beforeSave($options = array())
    {
        if (!empty($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }

    public function getUserIdByUserName($user){
        $conditions = array('Admin.email' => $user);
        $fields = array('Admin.id');
        return $this->find('first', array('conditions'=> $conditions, 'fields' => $fields));
    }

    public function getLoggedInUserData($user){
        $conditions = array('Admin.email' => $user);
        return $this->find('first', array('conditions'=> $conditions));
    }


}