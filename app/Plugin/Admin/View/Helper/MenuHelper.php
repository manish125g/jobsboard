<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 24/07/2017
 * Time: 2:15 AM
 */
//App::uses('AppModel', 'Model');
class MenuHelper extends AppHelper {
    public $name = 'Menu';

    public $useTable = 'menu';

    public function getMenu($menu){
        $conditions = array('Menu.id'=>$menu,'Menu.status'=>'Y');
        $fields = array('Menu.id', 'Menu.menu_name', 'Menu.parent_id', 'Menu.url');
        return $this->Menu->find('first', array('conditions'=>$conditions, 'fields'=>$fields));
    }

    public function searchForId($id, $array) {
        $keys = array();
        foreach ($array as $key => $val) {
            if ($val['parent_id'] === $id) {
                array_push($keys, $val);
            }
        }
        return $keys;
    }

}