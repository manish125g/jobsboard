<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/26/2017
 * Time: 11:47 PM
 */
class MediasController extends AdminAppController
{
    public $name = 'Medias';

    public $uses = array('Admin.Media', 'Admin.Admin');

    public $layout = 'admin_dashboard_layout';

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Security->unlockedActions = array("add", "update_category", 'remove_category',
            'change_category_visible_status', 'add_ads', 'update', 'remove', 'change_visible_status');
        $this->Auth->allow("");
        $this->Security->csrfCheck = false;
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $this->Media->set($data);
            if (!empty($data['Media']['file'])) {
                $file = $data['Media']['file'];
                $fileName = $file['tmp_name'];
                $fileType = $data['Media']['media_type'];
                $data['Media']['file'] = $fileName;
            }
            $data['Media']['type'] = $data['Media']['media_type'];
            $data['Media']['status'] = true;
            $data['Media']['position'] = true;
            $data['Media']['created_by'] = $this->Session->read('userId');
            $fields = array('name', 'description', 'media_type', 'published_on', 'url', 'file');
            if ($this->Media->validates(array('fieldList' => $fields))) {
                if($this->Media->save($data)){
                    if(!empty($fileName)){
                        $this->__writeFile($file, $this->Media->id, $fileType);
                    }
                    $this->Flash->set('Media has been added successfully');
                    $url = array('controller' =>'medias', 'action' =>'admin', 'plugin' =>'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function admin(){
        $this->set('medias', $this->Media->find('all'));
    }

    public function update($id){
        $this->set('id', $id);
        if(empty($this->request->data) && !empty($id)){
            $data = $this->Media->find('first', array('conditions' =>array('Media.id' => $id)));
            $this->request->data = $data;
            unset($data['Media']['id']);
        }
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->Media->set($data);
            if (!empty($data['Media']['media_file'])) {
                $file = $data['Media']['media_file'];
                $fileName = $file['name'];
                $fileType = $data['Media']['media_type'];
                $data['Media']['file'] = $fileName;
            }
            $data['Media']['type'] = $data['Media']['media_type'];
            $data['Media']['updated_by'] = $this->Session->read('userId');
            $fields = array('name', 'description', 'media_type', 'published_on', 'url');
            if ($this->Media->validates(array('fieldList' => $fields))) {
                $this->Media->id = $id;
                if($this->Media->save($data)){
                    if(!empty($fileName)){
                        $this->__writeFile($file, $this->Media->id, $fileType);
                    }
                    $this->Flash->set('Media has been Updated successfully');
                    $url = array('controller' =>'medias', 'action' =>'admin', 'plugin' =>'admin');
                    $this->redirect($url);
                }
            }
        }
    }
}