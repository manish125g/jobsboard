<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 12/15/2016
 * Time: 11:08 PM
 */
class HomesController extends AppController
{
    public $name = 'Homes';

    public $uses = array('User', 'News', 'Job', 'Advertise', 'Heading');
    public $layout = 'main_layout1';

    public function beforeFilter(){
        parent::beforeFilter();
        $heading = $this->Heading->find('first', array('order'=>array('Heading.id DESC')));
        $this->set('heading', $heading);
        $hotJobs = $this->Job->find('all', array('order'=>array('Job.id DESC'), array('limit' => 5)));
        $this->set('hotJobs', $hotJobs);
        $hotNews = $this->News->find('all', array('conditions'=>array('News.status'=>1), 'order'=>array('News.id DESC'), 'limit' => 5));
        $this->set('hotNews', $hotNews);
        $this->set('sliderImages', $this->Advertise->getMainAds('Main', 4));
        $this->set('paidAds', $this->Advertise->getMainAds('Paid Ads', 1));
        $this->set('trendingAds', $this->Advertise->getMainAds('Trending', 5));
        $this->set('posterAds', $this->Advertise->getMainAds('Poster Image', 2));
        
    }
    public function index(){
	
    }

    public function home(){
	$this->set('jobsCount',$this->Job->find('count'));
        $this->set('newsCount',$this->News->find('count'));
        $this->set('userCount',$this->User->find('count'));
        $this->set('adsCount',$this->Advertise->find('count'));
    }

    public function job_search(){

    }

    public function videos(){}
    
    public function contact_us(){}
    
    public function terms_conditions(){
    	
    }


}