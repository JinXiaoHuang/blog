<?php
/* Smarty version 3.1.30, created on 2017-07-18 17:52:27
  from "D:\wamp\www\blog\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596e2ebb932e21_38135499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28ded543264fb9ce4efa767c3db316b277d801db' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\index\\index.html',
      1 => 1500393146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_596e2ebb932e21_38135499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
        /*个人中心*/
        .login_box{
            position: relative;
        }
        .person_box{
            width:130px;
            height:auto!important;
            box-shadow: 0 0 5px #999;
            position:absolute;
            top:57px;right:90px;
            background: #fff!important;
            display: none;
             transition: all 1s;
        }
        .person_box li{
            width:100%;
            height:50px;
            margin-right: 0!important;

        }
        .person_box li:hover{
            background: #EEEEEE;
        }
        .person_box li a{
            display: block;
            width:100%;height:100%;
            margin: 0;
        }
        .person_box li a div{
            height:100%!important;
            float:left;
            text-align: center;
            line-height:50px!important;
        }
        .person_box li a div:first-child{
            width:40px!important;
            color:#EA6F5A;
        }
        .person_box li a div:last-child{
            font-size:13px;
            text-align: left;
            width:80px!important;
            color:#333333;
        }
        .touxiang{
            width:80px!important;
            height:57px;
        }
        .touxiang img{
            width:40px;height:40px;border-radius: 100%;
            text-align: left;
        }
        .touxiang span{
            margin-right: 20px;
            font-size:10px;
        }
        .touxiang:hover span{
            transform: rotateX(180deg);
        }
    </style>
<!--未登陆的导航-->
<?php $_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
<nav class="fiex_nav">
    <div class="logo_box">blog</div>
    <div class="index_box">
        <ul>
            <li><a href="">首页</a></li>
            <li>
                <input class="search" type="text" placeholder="搜索">
                <span style="font-size: 15px;" class="glyphicon glyphicon-search"></span>
            </li>
        </ul>
    </div>
    <div class="login_box">
        <a class='write_artic_btn' href="javascript:;">写文章</a>
        <a class='reg_btn' href="javascript:;" style="height:40px!important;">注册</a>
        <a class='login_btn' href="javascript:;">登录</a>
        <a class='change_style' href="javascript:;">Aa</a>
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
<div style="height:1000px;background: #ddd">
    
</div>
</body>
</html>

<?php }
}
