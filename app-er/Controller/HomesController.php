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

    public $uses = array('User', 'News', 'Job', 'Advertise');
    public $layout = 'main_layout';
    public function index(){

    }

    public function home(){
        $hotJobs = $this->Job->find('all', array('limit' => 5));
        $this->set('hotJobs', $hotJobs);
        $hotNews = $this->News->find('all', array('limit' => 5));
        $this->set('hotNews', $hotNews);
        $this->set('sliderImages', $this->Advertise->getMainAds('Main', 4));
        $this->set('paidAds', $this->Advertise->getMainAds('Paid Ads', 1));
        $this->set('trendingAds', $this->Advertise->getMainAds('Trending', 5));
        $this->set('posterAds', $this->Advertise->getMainAds('Poster Image', 2));
    }

    public function job_search(){

    }

    public function videos(){}
    public function contact_us(){}

}