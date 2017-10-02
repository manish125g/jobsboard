<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 2/6/2017
 * Time: 9:16 PM
 */
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
class User extends AppModel
{
    public $name = 'User';

    public $useTable = 'users';

    public function getValidUser($data)
    {
        //$nick = array_shift($data);
        $nick = $data['email'];
        $role = $data['role_id'];
        $password = $data["password"];
        if (!empty($password)) {
            $conditions = array("User.email" => $nick, "User.role_id" => $role);
            $fields = array("User.password", "User.status");
            $result = $this->find("first", array("conditions" => $conditions, "fields" => $fields));
            if (count($result)) {
                $status = $result[$this->alias]["status"];
                if (!$status) {
                    return false;
//                    return __("This Account is not active.");
                }
                else {
                    $storedHash = $result[$this->alias]["password"];
                    $passwordHasher = new BlowfishPasswordHasher();
                    $correct = $passwordHasher->check($password, $storedHash);
                    if ($correct) {
                        return true;
                    }
                    return false;
//                    return __("Username & Password not match");
                }
            }
            return false;
//            return __("User account does not exists");
        }
        return false;
    }

    public function getUserIdByUserName($user){
        $conditions = array('User.email' => $user);
        $fields = array('User.id', 'User.role_id', 'User.name');
        $results = $this->find('first', array('conditions'=> $conditions, 'fields' => $fields));
        return $results;
    }

    public function getUserDataByUserName($email){
        $conditions = array('User.email' => $email);
        return $results = $this->find('first', array('conditions'=> $conditions));
    }

    public function beforeSave($options = array())
    {
        if (!empty($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }

}