<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Task
 *
 * @author 帅
 */
class Task extends BaseController{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    function Index()
    {
        $data['title']="赏金网--需求市场";
        $this->app->render("task.php",$data);
    }
}
