<?php
/* Smarty version 3.1.30, created on 2017-07-22 12:26:14
  from "D:\wamp\www\blog\template\index\showPersonArtic.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5973284677daf1_87705274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '074191e125187ac05dc227bcad092d4afd8ad22b' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\index\\showPersonArtic.html',
      1 => 1500719173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_5973284677daf1_87705274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    body{
        position:relative;
    }
    /*文章底部信息*/
  .fllow_dtail{
        padding: 20px;
        background-color: #F1F1F1;
        border: 1px solid #e1e1e1;
        border-radius: 4px;
        font-size: 12px;
        width:620px;
        height:147px;
    }
    .fllow_dtail span{
        color:#969696;
    }
    .fllow_dtail span.name{
        margin-left: 0!important;
        color:#333;
    }
    .info{
        margin-bottom: 20px;
    }
    .signnature{
        margin-top: 40px;
        padding-top: 20px;
        border-top: 1px solid #e1e1e1;
        color: #969696;
        overflow: hidden;
        width:578px;
        height:38px;
    }
    /*内容*/
    .show_content p{
        color: #2f2f2f;
        font-size: 16px;
        font-weight: 400;
        line-height:2.5!important;
    }
    /*赞赏支持*/
    .support_author{
        width:100%;
        height:155px;
        padding: 30px 0 20px;
        text-align: center;
    }
    .support_author p{
        padding: 0 30px;
        margin-bottom: 20px;
        min-height: 24px;
        font-size: 17px;
    }
    div.btn_pay{
        margin-bottom: 20px;
        padding: 8px 25px;
        font-size: 16px;
        color: #fff;
        background-color: #ea6f5a;
        width:116px;height:40px;
        margin: 0 auto;
        border-radius: 4px;
    }
    .mate_bottom{
        width:100%;height:59px;
        margin-top: 20px;
    }
    .mate_bottom .link{
        width:169px;height:59px;
        border:1px solid #EA6F5A;
        border-radius: 59px;
        margin-right: 0;
    }
    /*喜欢按钮*/
    .link{
        cursor: pointer;
    }
    .link li{
        float:left;
    }
    .btn_link{
        padding:18px 15px 18px 30px;
        width:auto;
    }
    .btn_link span{
        font-size:18px;
        color:#EA6F5A;
    }
    .glyphicon-heart{
        padding-right:5px;
        overflow: hidden;
    }
    .model_wamp{
        padding:18px 20px 18px 17px;
        position:relative;
    }
    .model_wamp:before {
        content: '';
        display: block;
        background: #EA6F5A;
        width: 1px;
        height: 25px;
        position: absolute;
        top: 16px;
        left: 2px;
    }
    ul.active{
        background: #EA6F5A;
    }
    ul.active li span{
        color:#fff!important;

    }
    ul.active .model_wamp:before{
        background: #fff;
    }
    ul.active li{

    }
    .model_wamp span{
        font-size:18px;
        color:#EA6F5A;
    }
    /*打开评论*/
    .open_block{
        width:100%;
        height:100px;
        padding:20px 0 0 20px;
        border-top: 1px solid #dcdcdc;
        margin-top: 40px;
        display: none;
    }
    .open_block p{
        margin: 0 auto;
        width:106px;
        height:39px;
        text-align: center;
        line-height: 39px;
        font-size: 16px;
        color: #969696;
        border: 1px solid #dcdcdc;
        border-radius: 4px;

    }
    /*提示信息*/
    .tip_message2{
        height:0;
        width:300px;
        border-radius: 5px;
        border:0px solid #42C02E;
        background: #fff;
        color:#42C02E;
        position:absolute;
        top:130px;
        left:0;right:0;
        margin: auto;
        z-index: 200000;
        overflow: hidden;
        text-align: center;
        line-height: 40px;
        font-weight: bold!important;

    }
    .tip_message{
        height:0;
        width:300px;
        border-radius: 5px;
        border:1px solid #E05244;
        background: #fff;
        color:#E05244;
        position:fixed;
        top:500px;
        left:0;right:0;
        margin: auto;
        z-index: 200000;
        overflow: hidden;
        text-align: center;
        line-height: 40px;
        display: block;
        font-weight: bold;

    }
    @keyframes slide{
        0%{
            top:0px;
        }

        100%{
            top:150px;
        }
    }
    @keyframes tip{
        0%{
            height:0px;
        }
        20%{
            height:40px;
        }
        80%{
            height:40px;
        }
        100%{
            height:0px;
        }
    }

</style>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
showPersonArtic.css">
<section class="content_box" style="height:4000px;">
    <!--标题-->
    <div class="article">
        <h1><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['title'];?>
</h1>
    </div>
    <!--作者区域-->
    <div class="author">
        <a href="index.php?d=index&f=person" class="avatar">
            <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['photo'];?>
" alt="" style="width:48px;height:48px;border-radius: 100%">
        </a>
        <!--发布信息-->
        <div class="info">
            <span class="tag">作者</span>
            <sapn class="name" style="font-size:17px;margin:6px 0 0 7px"><?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['nichen'];?>
</sapn>
            <div class="article_mate" style="width:400px;">
                 <span class="public_time"><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['time'];?>
</span>
                 <span class="wordage">字数 39</span>
                 <span class="red_count">阅读 33</span>
                 <span class="comments_count">评论 23</span>
                 <span class="link_count">喜欢 12</span>
                 <span id="loginName"><?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['nichen'];?>
</span>
            </div>
        </div>
    </div>
    <!--展示的内容-->
    <div class="show_content">
       <p><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['content'];?>
</p>
    </div>
    <!--展示尾部-->
    <div class="show_foot">
        <a href="" class="notebook">
            <i class="glyphicon glyphicon-book"></i>
            <span><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['mcname'];?>
</span>
        </a>
        <div class="copyright">© 著作权归作者所有</div>
    </div>
    <!--文章底部作者信息-->
    <div class="fllow_dtail">
        <a href="index.php?d=index&f=person" class="avatar">
            <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['photo'];?>
" alt="" style="width:48px;height:48px;border-radius: 100%;">
        </a>
        <div class="info">
            <span class="name" style="font-size:17px;margin:6px 0 0 7px"><?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['nichen'];?>
</span>
            <div class="article_mate">
                <span class="public_time">写了300个字,</span>
                <span class="wordage">被0人关注，</span>
                <span class="red_count">获得了3个喜欢</span>
            </div>
        </div>
        <div class="signnature"><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['mcname'];?>
</div>
    </div>
    <!--赞赏作者-->
    <div class="support_author">
        <p>如果觉得文章对你有用，随意赞赏支持。您的支持将鼓励我们继续创作！</p>
        <div class="btn_pay">赞赏支持</div>
    </div>
    <!--喜欢按钮-->
    <div class="mate_bottom">
        <ul class="link">
             <li class="btn_link">
                  <span class="glyphicon glyphicon-heart"></span>
                  <span class="">喜欢</span>
             </li>
             <li class="model_wamp">
                  <span class="number">0</span>
             </li>
        </ul>
    </div>
    <!--评论区域-->
    <div class="comment_box" style="height:auto;">
        <div class="comment_area">
            <a href="" class="comment_people">
                <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['photo'];?>
" alt="" style="width:38px;height:38px;border-radius: 100%">
            </a>
            <form action="" class="comment_content">
                <textarea name="" id="" cols="30" rows="10" placeholder="写下你的评论..."></textarea>
            </form>
        </div>
        <div class="submit_block">
            <ul>
                <li class="cancel">取消</li>
                <li class="submit">发送</li>
            </ul>
        </div>
        <!--评论操作-->
        <div class="div_top">
            <div class="top_left">
                <span class="comment_count"></span>
                <a href="javascript:;" class="only_author">只看作者</a>
                <a href="javascript:;" class="colse_comment">关闭评论</a>
            </div>
            <div class="top_right">
                <a href="javascript:;" class="link_p">按喜欢排序</a>
                <a href="javascript:;" class="time_p">按时间正序</a>
                <a href="javascript:;" class="time_desc">按时间倒序</a>
            </div>

        </div>
        <!--评论的内容-->
        <div class="comment_content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <ul class="comment_item">
                <li class="comment_author_mess">
                    <div class="author">
                        <a href="index.php?d=index&f=person" class="avatar">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['photo'];?>
" alt="" style="width:38px;height:38px;border-radius: 100%">
                        </a>
                        <!--发布信息-->
                        <div class="info">
                            <span class="tag">作者</span>
                            <sapn class="name" style="font-size:15px;margin:6px 0 0 7px"><?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['nichen'];?>
</sapn>
                            <div class="article_mate" style="width:400px;">
                                <span class="wordage"></span>
                                <span class="public_time"><?php echo $_smarty_tpl->tpl_vars['v']->value['time'];?>
</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="comment_warp">
                    <p class="comment_show"><?php echo $_smarty_tpl->tpl_vars['v']->value['comcontent'];?>
</p>
                    <div class="other_option">
                        <a href="javascript:;" class="zhan_a">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <span class="zhan">赞</span>
                        </a>
                        <a href="javascript:;" class="res_a">
                            <span class="glyphicon glyphicon-comment"></span>
                            <span class="resphose">回复</span>
                        </a>
                        <a href="javascript:;" class="del" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['comid'];?>
">删除</a>
                    </div>
                </li>

            </ul>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
    <div class="open_block">
        <p>打开评论</p>
    </div>
</section>

<section class="tip_message" style="position:fixed;top:57px;"></section>
<section class="tip_message2" style="position:fixed;top:57px;"></section>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
tipMessage.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function(){
        //提示信息
        function tip_message2(tip='继续操作前请登录或注册'){
            $(".tip_message2").html(tip);
            setTimeout(function(){
                $(".tip_message2").css("display","block")
                $('.tip_message2').css('animation','tip 3s linear').css('height','0').css('border','1px solid #42C02E');
            },500);
            //监听动画完成
            $(".tip_message2")[0].addEventListener("webkitAnimationEnd",function(){
                $(".tip_message2").css("display","none")
            })
        }
        function tip_message(tip='继续操作前请登录或注册'){
            $(".tip_message").html(tip);
            setTimeout(function(){
                $(".tip_message").css("display","block")
                $('.tip_message').css('animation','tip 3s linear').css('height','0').css('border','1px solid #E05244');
            },500);
            //监听动画完成
            $(".tip_message")[0].addEventListener("webkitAnimationEnd",function(){
                $(".tip_message").css("display","none")
            })
        }
       //赞赏支持按钮效果
        $('.link').click(function(){
            if($(this).find('.number').text()=='0'){
                $(this).addClass('active');
                $('.number').text('1');
            }
            else{
                $(this).removeClass('active');
                $('.number').text('0');
            }
        })
        //发送评论
        $('textarea').focus(function(){
            $('.submit_block').fadeIn();
        })
        $('.cancel').click(function(){
            $('.submit_block').fadeOut();
        })
        //赞赏
        $('.btn_pay').click(function(){
            if($('span.name').text()==$('#loginName').text()){
                tip_message('不能给自己的文章赞赏');
            }
        })
        //评论的条数
        var count=$('.comment_item').length;
        //删除评论
        $('.del').click(function(){
            var comid=parseInt($(this).attr('value'));
            
            $.ajax({
                url:'index.php?d=index&f=person&a=delComment',
                type:'post',
                data:{comid:comid},
                success:function(e){
                    $('.comment_count').text(e+'条评论');
                    tip_message2('删除成功');
                }
            })
            
            $(this).parent().parent().parent().remove();

        })
        //评论
        $('.submit').click(function(){
            var str=$('textarea').val();
            if(str==''){
                tip_message('评论不能为空');
                return;
            }
            
            $.ajax({
                url:'index.php?d=index&f=person&a=comment',
                type:'post',
                data:{content:str},
                success:function(e){
                    $('.comment_count').text(e+'条评论');
                   tip_message2('评论成功');
                }
            })
            
            $('div.comment_content').prepend(`
                  <ul class="comment_item">
                <li class="comment_author_mess">
                    <div class="author">
                        <a href="index.php?d=index&f=person" class="avatar">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['photo'];?>
" alt="" style="width:38px;height:38px;border-radius: 100%">
                        </a>

                <div class="info">
                <span class="tag">作者</span>
                <sapn class="name" style="font-size:15px;margin:6px 0 0 7px"><?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['nichen'];?>
</sapn>
                <div class="article_mate" style="width:400px;">
                <span class="wordage">1楼</span>
                <span class="public_time"></span>
                </div>
                </div>
                </div>
                </li>
                <li class="comment_warp">
                <p class="comment_show"></p>
                <div class="other_option">
                <a href="javascript:;" class="zhan_a">
                <span class="glyphicon glyphicon-thumbs-up"></span>
                <span class="zhan">赞</span>
                </a>
                <a href="javascript:;" class="res_a">
                <span class="glyphicon glyphicon-comment"></span>
                <span class="resphose">回复</span>
                </a>
                <a href="javascript:;" class="del">删除</a>
                </div>
                </li>

                </ul>
            `)
            $('div.comment_content .comment_item:first-child .comment_show').html($('textarea').val());
            //评论条数
            //count=count+1;
            //$('.comment_count').text(count+'条评论');
            return false;
        })
        $('.comment_count').text(count+'条评论');
        $('.comment_item').each(function(index,val){
            $(this).find('.wordage').text(index+1+'楼');
        })

        //关闭评论
        $('.colse_comment').click(function(){
            $('.comment_content').css('display','none');
            $('.comment_box').css('display','none')
            $('.open_block').css('display','block')
        })
        //打开评论
        $('.open_block p').click(function(){
            $('.comment_content').css('display','block');
            $('.comment_box').css('display','block')
            $('.open_block').css('display','none')
        })

    })
<?php echo '</script'; ?>
><?php }
}
