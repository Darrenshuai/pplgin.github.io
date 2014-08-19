<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
        <link href="<?php echo $baseUrl;?>/asserts/css/layout.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="top">
                    <div class="container clearfix">
                            <div class="top-l">
                                    <span>欢迎来到赏金网！</span>
                                    <a>免费注册</a>
                                    <a>立即登录</a>
                            </div>
                            <div class="top-r">
                                    <div class="links">
                                            <span>在线客服</span>
                                            <em class="lines"></em>
                                            <span>帮助中心</span>
                                            <em class="lines"></em>
                                            <span>招才纳贤</span>
                                            <em class="lines"></em>
                                            <span>导航</span>
                                    </div>
                            </div>
                    </div>
            </div>
            <div class="logo">
                    <div class="container">
                            <a class="wname">赏金网</a>
                    </div>
            </div>
            <div class="navbar">
                <div class="container clearfix"> 
                    <div class="filter top_c cur">
                        <a>所有分类</a>
                    </div>
                    <ul class="top_c clearfix">
                        <li>
                            <a href="<?php echo $baseUrl; ?>/">首页</a>
                        </li>
                        <li><a href="<?php echo $baseUrl; ?>/task/">需求广场</a></li>
                        <li><a href="<?php echo $baseUrl; ?>/talent/">人才市场</a></li>
<!--                            <li><a>娱乐机构</a></li>
                        <li><a>校企合作</a></li>
                        <li><a>发布需求</a></li>-->
                    </ul>
                </div>
            </div>
        </header>
            