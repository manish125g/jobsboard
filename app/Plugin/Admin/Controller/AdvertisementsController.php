<?php
/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/15/2017
 * Time: 10:14 AM
 */
class AdvertisementsController extends AdminAppController
{
    public $name = 'Advertisements';

    public $uses = array('Admin.Advertise', 'Admin.AdvertiseCategory');

    public $layout = 'admin_dashboard_layout';

    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->Security->unlockedActions = array("add_category", "update_category", 'remove_category',
            'change_category_visible_status', 'add_ads', 'update', 'remove', 'change_visible_status');
        $this->Auth->allow("");
        $this->Security->csrfCheck = false;
    }

    public function add_category(){
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->AdvertiseCategory->set($data);
            $file = $data['AdvertiseCategory']['image'];
            $fileName = $file['name'];
            if($this->AdvertiseCategory->validates()){
                $data['AdvertiseCategory']['image'] = $fileName;
                $data['AdvertiseCategory']['status'] = false;
                $this->AdvertiseCategory->save($data);
                if(!empty($fileName)){
                    $flag = $this->__writeFile($file, $this->AdvertiseCategory->id, 'adscategory');
                }
                $this->Flash->set('Ads Category has been added successfully');
                $url = array('controller' =>'advertisements','action' =>'category_admin', 'plugin' => 'admin');
                $this->redirect($url);
            }
        }
    }


    public function update_category($id){
        $this->set('id', $id);
        if($this->request->is('get') && !empty($id)){
            $data = $this->AdvertiseCategory->getCategoryById($id);
            $this->request->data = $data;
            unset($data["AdvertiseCategory"]["id"]);
        }
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->AdvertiseCategory->set($data);
            $fields = array('name', 'description');
            $file = $data['AdvertiseCategory']['image_file'];
            $fileName = $file['name'];
            if(!empty($fileName)){
                $data['AdvertiseCategory']['image'] = $fileName;
                $fields = array_merge($fields, 'image_file');
            }
            if($this->AdvertiseCategory->validates(array('fieldList' => $fields))){
                $this->AdvertiseCategory->id = $id;
                $this->AdvertiseCategory->save($data, false);
                if(!empty($fileName)){
                    $file = $data['AdvertiseCategory']['image_file'];
                    $fileName = $file['name'];
                    $flag = $this->__writeFile($file, $this->AdvertiseCategory->id, 'adscategory');
                }
                $this->Flash->set('Ads Category has been updated successfully');
                $url = array('controller' =>'advertisements','action' =>'category_admin', 'plugin' => 'admin');
                $this->redirect($url);
            }
        }
    }

    public function category_admin(){
        $categories = $this->AdvertiseCategory->getAllAdsCategory();
        $this->set('categories', $categories);
    }

    public function change_category_visible_status($id, $status){
        $this->AdvertiseCategory->id = $id;
        if($this->AdvertiseCategory->saveField('status', $status)){
            $this->Flash->set('Ads Category Status has been updated successfully');
            $this->redirect($this->referer());
        }
    }

    public function remove_category($id){
        $this->AdvertiseCategory->id = $id;
        if($this->AdvertiseCategory->delete($id)){
            $this->Flash->set('Ads Category has been deleted successfully');
            $this->redirect($this->referer());
        }
    }

    public function add_ads(){
        $this->set('categories',$this->AdvertiseCategory->getActiveCategoryList());
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->Advertise->set($data);
            $file = $data['Advertise']['image'];
            $fileName = $file['name'];
            if($this->Advertise->validates()){
                $data['Advertise']['image'] = $fileName;
                $data['Advertise']['status'] = true;
                if($this->Advertise->save($data)){
                    $flag = $this->__writeFile($file, $this->Advertise->id, 'ads');
                    $this->Flash->set('Ads has been created successfully');
                    $url = array('controller' =>'advertisements','action' =>'admin', 'plugin' => 'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function admin(){
        $ads = $this->Advertise->find('all');
        $this->set('ads', $ads);
    }

    public function update($id){
        $this->set('id', $id);
        $this->set('categories',$this->AdvertiseCategory->getActiveCategoryList());
        if(empty($this->request->data) && !empty($id)){
            $data = $this->Advertise->getById($id);
            $this->request->data = $data;
            unset($data['Advertise']['id']);
        }
        if($this->request->is('post')){
            $data = $this->request->data;
            $this->Advertise->set($data);
            CakeLog::error(json_encode($data));
            $this->Advertise->id = $id;
            $fields = array('name', 'description', 'category_id', 'url');
            $file = $data['Advertise']['image_file'];
            $fileName = $file['name'];
            if(!empty($fileName)){
                $data['Advertise']['image'] = $fileName;
                $fields = array_merge($fields, $file);
            }
            if($this->Advertise->validates(array('fieldList' => $fields))){
                $this->Advertise->id = $id;
                if($this->Advertise->save($data, false)){
                    if(!empty($fileName)){
                        $flag = $this->__writeFile($file, $id, 'ads');
                    }
                    $this->Flash->set('Ads has been created successfully');
                    $url = array('controller' =>'advertisements','action' =>'admin', 'plugin' => 'admin');
                    $this->redirect($url);
                }
            }
        }
    }

    public function change_visible_status($id, $status){
        $this->Advertise->id = $id;
        if($this->Advertise->saveField('status', $status)){
            $this->Flash->set('Ads Status has been updated successfully');
            $this->redirect($this->referer());
        }
    }

    public function remove($id){
        $this->Advertise->id = $id;
        if($this->Advertise->delete($id)){
            $this->Flash->set('Ads has been deleted successfully');
            $this->redirect($this->referer());
        }
    }

}