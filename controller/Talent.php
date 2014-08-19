<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Talent
 *
 * @author 帅
 */
class Talent extends BaseController{
    function __construct() {
        parent::__construct();
    }
    function Index()
    {
       $data['title']="赏金网--找人才";
       $this->app->render("talent.php",$data);
    }
}
