<?php

/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 21/07/2017
 * Time: 11:05 AM
 */
class HeadingController extends AdminAppController
{
    public $name = 'Heading';

    public $layout = 'admin_dashboard_layout';

    public $uses = array('Admin.Heading');

    public function change_heading()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Heading->set($data);
            $fields = array('heading');
            if ($this->Heading->validates(array('fieldList' => $fields))) {
                $data['News']['created_by'] = $this->Session->read('userId');
                if ($this->Heading->save($data, false)) {
                    $this->Flash->success('Heading changed successfully.', array(
                        'key' => 'success'));
                    $url = array('controller' => 'heading', 'action' => 'change_heading', 'plugin' => 'admin');
                    $this->redirect($url);
                } else {
                    $this->Flash->failure('Heading changed failed.', array(
                        'key' => 'failure'));
                }
            }
        }
    }
}