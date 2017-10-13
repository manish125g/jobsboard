<?php

/**
 * Created by IntelliJ IDEA.
 * User: Himanshu
 * Date: 10/12/2017
 * Time: 11:00 PM
 */

class FrontBasesController extends AppController
{
    public $name = 'FrontBases';

    public $components = array(
        "RequestHandler",
        "Session",
        "Flash",
    );
    protected function __writeFile($file, $id, $module)
    {
        $fileName = $file["name"];
        $dir = WWW_ROOT . "files" . DS . $module . DS . $id;
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        $flag = move_uploaded_file($file["tmp_name"], $dir . DS . $fileName);
        return $flag;
    }

}