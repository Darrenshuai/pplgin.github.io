<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of basecontroller
 *
 * @author 帅
 */
class BaseController {
    public $app=null;
    function __construct() {
        session_start();
        $this->app = \Slim\Slim::getInstance();
        //数据库实例化
       // $this->db=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME,DB_PORT);
    }
}
