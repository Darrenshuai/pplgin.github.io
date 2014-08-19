/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var App = function () {
     return {
         //滚动事件
    scroller:function()
    {
        window.onscroll = function(){
        {
            var sh=document.documentElement.scrollTop || document.body.scrollTop;
            var h= $('.fbg').height();
            var _self=$(this).find('i');
            if(h>0)
            {
                _self.removeClass('glyphicon-arrow-up');
                _self.addClass('glyphicon-arrow-down');
                $('.fbg').css("height","0px"); 
            }
            if(sh>0)
            {
                $('.top').addClass('boxshoaw');
            }
            else
            {
                $('.top').removeClass('boxshoaw');
            }
          };
        };
    },
    seton:function(){
        var pn = window.location.pathname;
        var currli = $(".navbar li").find("a[href*='"+pn+ "']").parent();
        if (currli.length > 0) {
            var i = $(".navbar li").index(currli);
            $(".navbar li").eq(i).addClass("cur").siblings().removeClass("cur");
        }
    },
    //鼠标方向加入
    mousedir:function(models,div)
        {
            $(models).bind("mouseenter mouseleave",function(e) {
             var w = $(this).width();
             var index=$(this).index(models);
             var h =$(this).height(); 
             var bg=$(models).eq(index).find(div);
            // console.log(index);
             var x = (e.pageX - this.offsetLeft - (w / 2)) * (w > h? (h / w) : 1); var y = (e.pageY - this.offsetTop - (h / 2)) * (h > w ?(w / h) : 1); 
            var direction = Math.round((((Math.atan2(y, x) * (180 /Math.PI)) + 180) / 90) + 3) % 4; //direction的值为“0,1,2,3”分别对应着“上，右，下，左”
            var eventType = e.type;
            var dirName = new Array(0,1,2,3);
            if(e.type == 'mouseenter'){
             switch (direction) {
                case 0:
                    bg.css('top',"0").css('left',0);
                    //console.log('上方进入');
                  break;
                case 1:
                    bg.css('left',"0").css('top',"0");
                  //console.log('右侧进入');
                  break;
                case 2:
                  bg.css('top','0').css('left',"0");
                  //console.log('下方进入');
                  break;
                case 3:
                 bg.css('left','0').css('top',"0");
                 // console.log('左侧进入');
                  break;
              }
            }
            else{
                switch (direction) {
                   case 0:
                      bg.css('top',"-100%")
                    //console.log('上方离开');
                     break;
                   case 1:
                       bg.css('left','100%');
                    //console.log('右侧离开');
                     break;
                   case 2:
                      bg.css('top','100%');
                     //console.log('下方离开');
                     break;
                   case 3:
                      bg.css('left','-100%');
                    //console.log('左侧离开');
                     break;
                 }
             }
            }); 
        }
    }
}();


