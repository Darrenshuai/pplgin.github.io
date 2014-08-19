<?php require '_layout/_header.php';?>
<link href="<?php echo $baseUrl;?>/asserts/css/page/task.css" rel="stylesheet" type="text/css"/>
<!--PageCon S-->
<div class="wrap task">
    <div class="container clearfix">
        <div class="task_l">
            <!--  筛选列表 S-->
            <div class="task_class_filter">
                <div class="task_class_list_box clearfix">
                    <b>任务大类：</b>
                    <div class="c_items clearfix">
                        <a href="#" class="select">全部</a>
                        <a href="#" target="_self">设计</a>
                        <a href="#" target="_self">开发</a>
                        <a href="#" target="_self">文案</a>
                        <a href="#" target="_self">装修</a>
                        <a href="#" target="_self">营销</a>
                        <a href="#" target="_self">商务</a>
                        <a href="#" target="_self">生活</a>
                    </div>
                </div>
                <div class="task_class_list_box clearfix">
                    <b>任务模型：</b>
                    <div class="c_items clearfix" >
                        <a href="#" class="select">全部</a>
                        <a href="#">单人悬赏</a>
                        <a href="#">多人悬赏</a>
                        <a href="#">计件任务</a>
                        <a href="#">招标任务</a>
                        <a href="#">雇佣任务</a>
                        <a href="#">直接雇佣</a>
                   </div>
                </div>
                <div class="task_class_list_box clearfix">
                    <b>赏金状态：</b>
                    <div class="c_items clearfix">
                        <a href="#" class="select">全部</a>
                        <a href="#">未托管赏金</a>
                        <a href="#">已托管赏金</a>
                        <a href="#">已支付赏金</a>
                        <a href="#">已经加价</a>
                    </div>
                </div>
                <div class="task_class_list_box clearfix bor_none">
                    <b>任务时间：</b>
                    <div class="c_items clearfix">
                        <a href="#" class="select">全部</a>
                        <a href="#">加急</a>
                        <a href="#">一周内到期</a>
                        <a href="#">3天内到期</a>
                        <a href="#">2天内到期</a>
                        <a href="#">24小时内到期</a>
                        <a href="#">已结束</a>
                   </div>
                </div>
            </div>
            <!-- 筛选列表 E-->
            
            <!--任务列表 S-->
            <div class="tasks border">
                <div class="tabs clearfix">
                    <ul class="bts clearfix">
                        <li class="select"><a href="#">进行中</a></li>
                        <li class="m_off-10"><a href="#">圆满结束</a></li>
                    </ul>
                </div>
                <div class="sort clearfix">
                    <span><a>默认<i class="glyphicon glyphicon-arrow-up"></i></a></span>
                    <span><a>发布时间<i class="glyphicon glyphicon-arrow-up"></i></a></span>
                    <span><a>剩余时间<i class="glyphicon glyphicon-arrow-up"></i></a></span>
                    <span><a>投递数<i class="glyphicon glyphicon-arrow-up"></i></a></span>
                    <span><a>价格<i class="glyphicon glyphicon-arrow-up"></i></a></span>
                </div>
                
                <div class="tasks_con">
                    <div class="tasks_con_hd clearfix">
                        <span class="w350">标题/关注度</span>
                        <span class="w150">竞价</span>
                        <span class="w170">类型/剩余时间</span>
                        <span class="w150">操作</span>
                    </div>
                    <div class="tasks_con_bd">
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn">投标</a><a class="btn">收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn">投标</a><a class="btn">收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn">投标</a><a class="btn">收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn">投标</a><a class="btn">收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn">投标</a><a class="btn">收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn" >投标</a><a class="btn"a>收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn">投标</a><a class="btn">收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn">投标</a><a class="btn">收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn">投标</a><a class="btn">收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        <div class="list-task clearfix">
                             <div class="w350 tastit">
                                <a>Web动态表单数据库系统开发</a>
                                <samp class="c999">
                                    404人浏览 /<font class="red">11</font> 人已经投标
                                </samp>
                            </div>
                            <div class="w150 taspri">
                                <b class="red">￥5000-10000</b>
                            </div>
                            <div class="w170 tastype">
                                <em>招标任务</em>
                                 <samp class="c999">
                                   <span class="c999">
                                        <span class="red">9</span>&nbsp;小时后投稿截止
                                   </span>
                                </samp>
                            </div>
                            <div class="w150">
                                <span class="bts"><a class="btn">投标</a><a class="btn">收藏</a></span>
                                <span class="bts pt10"><a class="btn">发布类似任务</a></span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="page">
                        <a>1</a>
                        <a class="select">2</a>
                        <a>3</a>
                        <a>4</a>
                        <a>5</a>
                        <a>6</a>
                        <a>下一页</a>
                    </div>
                </div>
            </div>
            
            <div class="hots">
                <div class="hots-hd">
                    <h4>热门浏览</h4>
                </div>
                <div class="hots-bd">
                    <ul class="clearfix">
                        <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                         <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                         <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                         <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                         <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                         <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                         <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                         <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                         <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                         <li>
                            <b class="red">￥&nbsp;1000-5000</b>
                            <a>一个商品展示的网站制作</a>已有259人投标 
                        </li>
                    </ul>
                </div>
            </div>
            <!--任务列表 E-->
        </div>
        <div class="task_r">
            <section class="qs">
            	<div class="hds asid_hd">快速发布任务</div>
            	<div class="aside_bd">
            		<dl>
            			<dt>需求标题：</dt>
            			<dd><input type="text" /></dd>
            		</dl>
            		<dl>
            			<dt>需求分类：</dt>
            			<dd>
	            			<select>
	            				<option>设计</option>
		                        <option>开发</option>
		                        <option>文案</option>
		                        <option>装修</option>
		                        <option>营销</option>
		                        <option>商务</option>
		                        <option>生活</option>
	            			</select>
            			</dd>
            			<dd>
	            			<select>
	            				<option>单人悬赏</option>
		                        <option>多人悬赏</option>
		                        <option>计件任务</option>
		                        <option>招标任务</option>
		                        <option>雇佣任务</option>
		                        <option>直接雇佣</option>
	            			</select>
            			</dd>
            			<dd>
	            			<select>
	            				<option>加急</option>
		                        <option>一周内到期</option>
		                        <option>3天内到期</option>
		                        <option>2天内到期</option>
		                        <option>24小时内到期</option>
		                        <option>已结束</option>
	            			</select>
            			</dd>
            		</dl>
            		<dl>
            			<dt>验证码：</dt>
            			<dd><input type="text" /></dd>
            		</dl>
            		<dl>
            			<dt>手机号码：</dt>
            			<dd><input type="text" /></dd>
            		</dl>
            		<dl>
            			<dt>手机验证码：</dt>
            			<dd><input type="text" /></dd>
            		</dl>
            	</div>
            </section>
            
            <section>
                <div class="hds asid_hd">
                    相关度推荐
                </div>
                <div class="aside_bd">
                    <ul>
                        <li class="clearfix">
                            <a><img src="<?php echo $baseUrl; ?>/asserts/img/logo.jpg"/></a>
                            <div class="fr">
                            	<span class="tit">一个商品展示的网站制作</span>
                            	<span class="pri">赏钱:￥3000</span>
                            	<span>关注数(<em class="red">200</em>)</span>
                        	</div>
                        </li>
                        <li class="clearfix">
                            <a><img src="<?php echo $baseUrl; ?>/asserts/img/logo.jpg"/></a>
                            <div class="fr">
                            	<span class="tit">一个商品展示的网站制作</span>
                            	<span class="pri">赏钱:￥3000</span>
                            	<span>关注数(<em class="red">200</em>)</span>
                        	</div>
                        </li>
                        <li class="clearfix">
                            <a><img src="<?php echo $baseUrl; ?>/asserts/img/logo.jpg"/></a>
                            <div class="fr">
                            	<span class="tit">一个商品展示的网站制作</span>
                            	<span class="pri">赏钱:￥3000</span>
                            	<span>关注数(<em class="red">200</em>)</span>
                        	</div>
                        </li>
                        <li class="clearfix">
                            <a><img src="<?php echo $baseUrl; ?>/asserts/img/logo.jpg"/></a>
                            <div class="fr">
                            	<span class="tit">一个商品展示的网站制作</span>
                            	<span class="pri">赏钱:￥3000</span>
                            	<span>关注数(<em class="red">200</em>)</span>
                        	</div>
                        </li>
                        <li class="clearfix">
                            <a><img src="<?php echo $baseUrl; ?>/asserts/img/logo.jpg"/></a>
                            <div class="fr">
                            	<span class="tit">一个商品展示的网站制作</span>
                            	<span class="pri">赏钱:￥3000</span>
                            	<span>关注数(<em class="red">200</em>)</span>
                        	</div>
                        </li>
                    </ul>
                </div>
            </section>

            <section>
                
            </section>
            
            <section>
                
            </section>
        </div>
    </div>
</div>
<!--PageCon E-->

<?php require '_layout/_footer.php';