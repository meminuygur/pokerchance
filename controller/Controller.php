<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 15.11.2017
 * Time: 00:48
 */

class Controller
{

    public function index(){

        header("Location: /poker/index");

    }
    public function view($template_file, $data = null){

        ob_start();
        if( !is_null($data)) {
            extract($data);
        }
        require_once(__DIR__.'/../view/'.$template_file.'.php');

    }

}