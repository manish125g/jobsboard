<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 2/5/2017
 * Time: 3:40 PM
 */
class Media extends AppModel
{
    public $name = 'Media';

    public $useTable = 'medias';

    public $belongsTo = array(
        'Admin' =>array(
            'className' =>'Admin',
            'foreignKey' =>'created_by'
        ),
        'UpdateAdmin' =>array(
            'className' =>'Admin',
            'foreignKey' =>'updated_by'
        )
    );

}