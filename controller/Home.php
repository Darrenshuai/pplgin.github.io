<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author 帅
 */
class Home extends BaseController{
    function __construct() {
        parent::__construct();
    }
    
    function Index()
    {
        $data['title']="赏金网--真正大学生的天地";
        $this->app->render('Index.php',$data);
    }
}
