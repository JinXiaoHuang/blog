<?php
/* Smarty version 3.1.30, created on 2017-07-01 08:49:03
  from "D:\wamp\www\blog\template\index\index.ejs" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595745df99baa8_95722436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67794fe860079a64da6c4e6dbf3f5ddc3b454680' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\index\\index.ejs',
      1 => 1498891739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595745df99baa8_95722436 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
com.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo STATIC_PATH;?>
fonts/iconfont.css">
    <title>前台主页</title>
</head>
<body>
<!--登陆后的导航-->
<?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
<nav class="logined_fiex_nav">
    <div class="logo_box">blog</div>
    <div class="index_box">欢迎<?php echo $_smarty_tpl->tpl_vars['mname']->value;?>
</div>
    <div class="login_box">
        <a class='write_artic_btn' href="javascript:;">写文章</a>
        <a class='login_out_btn' href="javascript:;">退出</a>

    </div>
</nav>
<?php }?>
<!--未登陆的导航-->
<?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
<nav class="fiex_nav">
    <div class="logo_box">blog</div>
    <div class="index_box">首页</div>
    <div class="login_box">
        <a class='write_artic_btn' href="javascript:;">写文章</a>
        <a class='reg_btn' href="javascript:;">注册</a>
        <a class='login_btn' href="javascript:;">登录</a>
    </div>
</nav>
<?php }?>
<!--登录注册框-->
<section class="loginBox">
    <div class="fg">&</div>
    <ul class="xue">
        <li class="active">登录</li>
        <li>注册</li>
    </ul>
  <!--登录-->
    <div class="box">
    <form class="login_form active1" action="" method="" >
        <div class="mname">
            <laber class="iconfont icon-iconuser"></laber>
            <input type="text" name="mname" placeholder="输入用户名">
        </div>
        <div class="mpass">
            <laber class="iconfont icon-mima "></laber>
            <input type="password" name="mpass" placeholder="输入密码">
        </div>
        <div class="vcode">
            <laber class="iconfont icon-yanzhengma"></laber>
            <input type="text" name="validecode" placeholder="输入验证码">
            <img src="index.php?d=index&f=login&a=code" onclick="this.src=this.src+'&code'+Math.random()" alt="">
        </div>
        <div class="sub_login">
            <input type="submit" value="登录">
        </div>
    </form>
<!--注册-->
    <form class="reg_form" action="" method="" >
        <div class="mname">
            <laber class="iconfont icon-nicheng"></laber>
            <input type="text" name="nichen" placeholder="输入昵称">
        </div>
        <div class="mname">
            <laber class="iconfont icon-iconuser"></laber>
            <input type="text" name="mname" placeholder="输入用户名">
        </div>
        <div class="mpass">
            <laber class="iconfont icon-mima "></laber>
            <input type="password" name="mpass" placeholder="输入密码">
        </div>
        <div class="comfirepass">
            <laber class="iconfont icon-mima "></laber>
            <input type="password" name="comfirepass" placeholder="再次确认密码">
        </div>
        <div class="sub_reg">
            <input type="submit" value="注册">
        </div>
    </form>
    </div>
    <div class="close_btn iconfont icon-guanbi"></div>
</section>
<!--遮罩-->
<section class="zhezao">

</section>
<section class="tip_message">
</section>
<div style="position:absolute;top:58px;">
    dddd
    dddd
    dddd
    dddd
    dddd
    dddd
    dddd
    dddd
</div>
</body>
</html>
<style>
    /*选项卡*/
    .xue{
        overflow: hidden;
        margin-bottom: 30px;
        cursor: pointer;
    }
    .xue li{
        float:left;
        width:50%;
        font-size: 18px;
        color:#969696;
    }
    .xue li:last-child{
        text-align: left;
        padding-left:20px;
    }
    .xue li:first-child{
        text-align: right;
        padding-right:20px;
    }
    .xue li.active{
        color:#E05244;
        font-weight: bold;
    }
    form.active1 {
        display: block;
    }
    .login_form,.reg_form{
        display: none;
    }
    .fiex_nav,.logined_fiex_nav{
        width:100%;
        height:58px;
        background:#fff;
        border-bottom:1px solid #F0F0F0;
        position:fixed;
        z-index: 500;
    }
    .fg{
        width:10px;
        text-align: center;
        position:absolute;
        left:0;
        right:0;
        top:50px;
        margin: auto;
        font-size: 18px;
        color:#969696;
    }




    .fiex_nav > div,.logined_fiex_nav >div{
        float:left;
    }
    .logo_box{
        width:20%;
        height:100%;
    }
    .index_box{
        width:60%;
        height:100%;
    }
    .login_box{
        width:20%;
        height:100%;
    }
    /*登录框区域*/
    .loginBox{
        width: 400px;
        margin: 60px auto 0;
        padding: 50px 50px 30px;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0 0 8px rgba(0,0,0,.1);
        box-sizing: border-box;
        position:absolute;
        top:-800px;left:0;right:0;
        margin: auto;
        width:400px;
        height:400px;
        display: none;
        margin-top: 0;
        animation: slide 0.3s ease;
        z-index: 10001;

    }
    .login_form > div,.reg_form > div{
        width:300px;
        height:auto;
        position:relative;
        overflow: hidden;
    }
    .login_form > div input,.reg_form > div input{
        outline: none;
        width:300px;
        height:40px;
        border-radius: 4px;
        box-sizing: border-box;
        padding: 4px 12px 4px 35px;
        border: 1px solid #c8c8c8;
        border-bottom:none;
        background: #F8F8F8;
        color:#969696;
        font-size:14px;
    }
    .login_form > .vcode input{
        width:230px;
        float:left;
        border-bottom: 1px solid #c8c8c8;
    }
    .reg_form > .comfirepass input{
        float:left;
        border-bottom: 1px solid #c8c8c8;
    }
    .login_form > .vcode img{
        display: block; width:70px;height:40px;float:right;border-radius:4px!important;
    }
    .login_form > .sub_login{
        margin-top: 20px;
    }
    .reg_form > .sub_reg{
        margin-top: 20px;
    }
    .login_form > .sub_login input{
        height:43px;
        background: #187CB7;
        font-size:18px;
        color:#fff;
        border-radius: 5px;
    }
    .reg_form > .sub_reg input{
        height:43px;
        background: #42C02E;
        font-size:18px;
        color:#fff;
        border-radius: 5px;
    }
    .login_form > .sub_login input:hover{
        background: #2471A2;
    }
    .reg_form > .sub_reg input:hover{
        background: #36B221;
    }
    .tip_message{
        height:0;
        width:250px;
        border-radius: 5px;
        border:0px solid #E05244;
        background: #fff;
        color:#E05244;
        position:absolute;
        top:130px;
        left:0;right:0;
        margin: auto;
        z-index: 200000;
        overflow: hidden;
        text-align: center;
        line-height: 40px;

    }
    .close_btn{
        position:absolute;
        top:7px;
        right:7px;
        color:#969696;
        font-size:25px;
        cursor: pointer;
        width:auto!important;
    }
    .close_btn:hover{
        color:#E05244;
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
        25%{
            height:40px;
        }
        75%{
            height:40px;
        }
        100%{
            height:0px;
        }
    }
    laber{
       position:absolute!important;
        top: 10px!important;
        left: 10px!important;
        color:#969696;
   }
    /*遮罩*/
    .zhezao{
        display: none;
        width:100%;
        height:100%;
        z-index: 10000;
        background: #F1F1F1;
        opacity: 1;
        position: absolute;
        top:0;left:0;
    }
</style>
<?php echo '<script'; ?>
>
    $(function(){
        //提示信息函数
        function tip_message(tip='请登录或注册'){
            $(".tip_message").html(tip);
            setTimeout(function(){
                $(".tip_message").css("display","block")
                $('.tip_message').css('animation','tip 1.5s linear').css('height','0').css('border','1px solid #E05244');
            },500);
            //监听动画完成
            $(".tip_message")[0].addEventListener("webkitAnimationEnd",function(){
                $(".tip_message").css("display","none")
            })
        }

      $('.write_artic_btn').click(function(){

          //ajax验证登录状态
          $.ajax({
               url:'index.php?d=index&f=info&a=add',
               type:'post',
               success:function(e){
                   if(e=='noLogined'){
                       $('.zhezao').css('display','block');
                       $('.loginBox').css('display','block').css('top','150px');
                       tip_message();
                      $('.close_btn').click(function(){
                          $('.loginBox').css('display','none');
                          $('.zhezao').css('display','none');
                      })
                       //阻止默认的表单提交
                       $('input[type=submit]').click(function(){
                           return false;
                       })
                       //通过ajax提交表单数据到后台,验证登录
                       $('.sub_login input').click(function(){
                           //serialize()将表单中的数据自动组合
                           var str=$('.login_form input').serialize();
                           $.ajax({
                               url:'index.php?d=index&f=login&a=check_login',
                               type:'post',
                               data:str,
                               success:function(e){
                                   if(e=='验证码错误'){
                                      tip_message(e);
                                   }
                                   if(e=='用户名不能为空'){
                                       tip_message(e);
                                   }
                                   if(e=='密码不能为空'){
                                       tip_message(e);
                                   }
                                   if(e=='用户名或密码错误'){
                                       tip_message(e);
                                   }
                                   if(e=='登录成功,即将跳转....'){
                                       tip_message(e);
                                       setTimeout(function(){
                                           location.href='index.php';
                                       },1500)

                                   }
                               }
                           })
                       })
                       //通过ajax提交表单数据到后台,验证注册
                       $('.sub_reg input').click(function(){
                           //serialize()将表单中的数据自动组合
                           var str=$('.reg_form input').serialize();
                           $.ajax({
                               url:'index.php?d=index&f=login&a=check_reg',
                               type:'post',
                               data:str,
                               success:function(e){
                                   if(e=='昵称不能为空'){
                                       tip_message(e);
                                   }
                                   if(e=='用户名不能为空'){
                                       tip_message(e);
                                   }
                                   if(e=='用户名存在'){
                                       tip_message(e);
                                   }
                                   if(e=='密码不能为空'){
                                       tip_message(e);
                                   }
                                   if(e=='确定密码不能为空'){
                                       tip_message(e);
                                   }
                                   if(e=='两次密码不一致'){
                                       tip_message(e);
                                   }
                                   if(e=='注册成功,请登录'){
                                       tip_message(e);
                                       setTimeout(function(){

                                       },1000)
                                   }
                               }
                           })
                       })


                   }
               }

          })
      })
        //登录注册选项卡
        $('.xue li').click(function(){
            $('.xue li').removeClass('active');
            $(this).addClass('active');
            $('.box form').removeClass('active1');
            $('.box form').eq($(this).index()).addClass('active1');
        })
     //退出登录
      $('.login_out_btn').click(function(){
            $.ajax({
                url:'index.php?d=index&f=login&a=out_login',
                type:'post',
                success:function(e){
                    if(e=='退出成功'){
                        tip_message(e);
                        setTimeout(function(){
                            location.href='index.php'
                        },2000)
                      ;
                    }
                },
            })

      })
    })
<?php echo '</script'; ?>
><?php }
}
