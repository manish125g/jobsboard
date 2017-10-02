<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 1/7/2017
 * Time: 10:23 PM
 */
class News extends AdminAppModel
{
    public $name = 'News';

    public $useTable = 'news';

    public $belongsTo = array(
        'Admin' => array(
            'className' =>'Admin',
            'foreignKey' => 'created_by'
        )
    );

    public $validate = array(
        'news_title' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'News Title cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'News Title should be minimum of 3 characters',
                "last" => true
            )
        ),
        'news_short_desc' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'News Short Description cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'News Short Desc should be minimum of 3 characters',
                "last" => true
            )
        ),
        'news_desc' => array(
            'notBlank' => array(
                'rule' => 'notBlank',
                'message' => 'News Description cannot be left blank',
                'last' => true
            ),
            'minimum' => array(
                'rule' => array('minLength', '3'),
                'message' => 'News Desc should be minimum of 3 characters',
                "last" => true
            )
        ),
    );

}