<?php

/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 17/07/2017
 * Time: 12:42 AM
 */
class MenuController extends AdminAppController
{
    public $name = 'menu';

    public $layout = 'admin_dashboard_layout';

    public $uses = array('Admin.Menu');


    public function add_menu() {
        $menus = $this->Menu->find('list',
            array(
                'fields' => array('id','menu_name'),
                'conditions'=>array(
                    'Menu.parent_id ' => '0',
                ),
            )
        );
        $this->set('parent_id',$menus);
        if ($this->request->is('post')) {
            $data = $this->request->data;
            //$data['Menu']['created_by'] = $this->Session->read('userId');
            $data['Menu']['parent_id'] = empty($data['Menu']['parent_id']) ? 0 : $data['Menu']['parent_id'];
            $this->Menu->set($data);
            $menus = $this->Menu->find('all', array('conditions' => array('Menu.menu_name' => $data['Menu']['menu_name'], 'Menu.parent_id'=> $data['Menu']['parent_id']), 'order' => array('Menu.id DESC')));
            if (count($menus)) {
                $this->Flash->failure('Menu Name already exist.', array(
                    'key' => 'failure'));
            } else {
                $fields = array('menu');
                if ($this->Menu->validates(array('fieldList' => $fields))) {
                    if ($this->Menu->save($data, false)) {
                            $this->Flash->success('Menu has been created successfully.', array(
                                'key' => 'success'));
//                    $this->Flash->set('Role has been created successfully.', "default", array('class' => 'alert alert-success', 'plugin' => 'admin'));
                        $url = array('controller' => 'menu', 'action' => 'add_menu', 'plugin' => 'admin');
                        $this->redirect($url);
                    } else {
                        $this->Flash->failure('Menu creation failed.', array(
                            'key' => 'failure'));
                    }
                }
            }
        }
    }

    public function admin()
    {
        $menus = $this->Menu->find('all', array('conditions'=> array('Menu.status !='=>'D', 'Menu.parent_id'=>0)));
        $this->set('menus', $menus);
    }

    public function change_status($id, $status)
    {
        $this->Menu->id = $id;
        if ($this->Menu->saveField('status', $status)) {
            $this->Flash->success('Menu Status has been updated successfully.', array(
                'key' => 'success'));
            $this->redirect($this->referer());
        }
    }

    public function showSubMenu()
    {
        $menus = $this->Menu->find('list',
            array(
                'fields' => array('id','menu_name'),
                'conditions'=>array(
                    'Menu.parent_id ' => '0',
                ),
            )
        );
        $this->set('parent_id',$menus);
        if (is_numeric($this->request->query('menuId'))) {
            $menu = $this->Menu->find('all', array('conditions'=> array('Menu.status !='=>'D', 'Menu.parent_id'=>$this->request->query('menuId'))));
            $this->set('menus', $menu);
        } else {
            throw new NotFoundException("Invalid Link");
        }
    }

    public function updateMenu()
    {
        $menus = $this->Menu->find('list',
            array(
                'fields' => array('id','menu_name'),
                'conditions'=>array(
                    'Menu.parent_id ' => '0',
                ),
            )
        );
        $this->set('parent_id',$menus);
        if (is_numeric($this->request->query('menuId'))) {
            $menu = $this->Menu->findById($this->request->query('menuId'));
            $this->set('menu', $menu);
            $this->Session->write('menuId', $this->request->query('menuId'));
        } else {
            throw new NotFoundException("Invalid Link");
        }
    }

    public function update_menu()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            //$data['Menu']['updated_by'] = $this->Session->read('userId');
            $data['Menu']['parent_id'] = empty($data['Menu']['parent_id']) ? 0 : $data['Menu']['parent_id'];
            $this->Menu->set($data);
            CakeLog::error(json_encode($data));
            $menus = $this->Menu->find('all', array('conditions' => array('Menu.menu_name' => $data['Menu']['menu_name'], 'Menu.parent_id'=> $data['Menu']['parent_id']), 'order' => array('Menu.id DESC')));
            if (count($menus)) {
                $menus = $this->Menu->find('list',
                    array(
                        'fields' => array('id','menu_name'),
                        'conditions'=>array(
                            'Menu.parent_id ' => '0',
                        ),
                    )
                );
                $this->set('parent_id',$menus);
                $this->set('menu', $data);
                $this->Flash->failure('Menu already exist.', array(
                    'key' => 'failure'));
            } else {
                $this->Menu->id = $this->Session->read('menuId');
                $fields = array('menu');
                if ($this->Menu->validates(array('fieldList' => $fields))) {
                    if ($this->Menu->save($data, false)) {
                        $this->Flash->success('Menu has been updated successfully.', array(
                            'key' => 'success'));
                        $url = array('controller' => 'menu', 'action' => 'admin', 'plugin' => 'admin');
                        $this->redirect($url);
                    }
                }
            }
        }
    }


    public function deleteMenu()
    {
        if (is_numeric($this->request->query('menuId'))) {
            $role = $this->Menu->findById($this->request->query('menuId'));
            if ($role) {
                $this->Menu->id = $this->request->query('menuId');
                $this->Menu->saveField('status', 'D');
                $this->Flash->success('Menu has been deleted successfully.', array(
                    'key' => 'success'));
                $this->redirect(
                    array(
                        "controller" => "Menu",
                        "action" => "admin"));
            } else {
                throw new NotFoundException("Invalid Link");
            }
        } else {
            throw new NotFoundException("Invalid Link");
        }
    }
}