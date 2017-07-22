<?php
/* Smarty version 3.1.30, created on 2017-07-21 11:12:33
  from "D:\wamp\www\blog\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5971c58182b114_00453015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '354fd6b3a0fbb0f6693c5d9da7d562631ba5c28f' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\index\\header.html',
      1 => 1500628352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5971c58182b114_00453015 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
header_write.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
person.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
tipMessage.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo STATIC_PATH;?>
fonts/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
header.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
person_set.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
comCon.css">

    <title>个人主页</title>
    <style>
        .find,.gz{
            width:70px!important;
            height:56px!important;
        }
        .find a,.gz a{
            display: block;
            width:70px!important;
            height:56px!important;
            color: #333;
            line-height: 26px;
            padding: 15px;
            font-size:17px;
        }
        .search input{
            margin-top: 10px;
        }
        .search span{
            margin-top: 14px!important;
        }
        .login_box .login_out_btn{
            height:57px!important;
        }
    </style>
</head>
<body>

<!--登陆后的导航-->
<div class="tip_message"></div>
<nav class="logined_fiex_nav" style="top:0;">

    <div class="logo_box">blog</div>
    <div class="index_box">
        <ul>
            <li class="find"><a href="index.php">发现</a></li>
            <li class="gz"><a href="">关注</a></li>
            <!--<li><?php echo $_smarty_tpl->tpl_vars['mname']->value;?>
</li>-->
            <!--<li><?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
</li>-->

            <li class="search">
                <input class="search" type="text" placeholder="搜索">
                <span style="font-size: 15px;" class="glyphicon glyphicon-search"></span>
            </li>
        </ul>
    </div>
    <div class="login_box">
        <a class='write_artic_btn' href="javascript:;" style="height:40px;">写文章</a>

        <a class='login_out_btn' href="javascript:;"
           style="width:80px;height:57px;margin-top: 0;line-height: 57px;position:relative;" target="_blank">
            <div class="touxiang">
                <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['photo'];?>
" alt="" style="width:40px;height:40px;">
                <span class="glyphicon glyphicon-triangle-bottom" style="color:#969696;"></span>
            </div>
        </a>
        <ul class="person_box">
            <li>
                <a href="index.php?d=index&f=person&a=indexPage">
                    <div class="glyphicon glyphicon-user"></div>
                    <div>我的主页</div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="glyphicon glyphicon-bookmark"></div>
                    <div>收藏的文章</div>
                </a>
            </li>
            <li>
                <a href="index.php?d=index&f=person">
                    <div class="glyphicon glyphicon-heart"></div>
                    <div>喜欢的文章</div>
                </a>
            </li>
            <li>
                <a href="index.php?d=index&f=person&a=seting">
                    <div class="glyphicon glyphicon-cog"></div>
                    <div>设置</div>
                </a>
            </li>
            <li class="loginOut">
                <a href="javascript:;">
                    <div class="glyphicon glyphicon-log-out"></div>
                    <div class="">退出</div>
                </a>
            </li>
        </ul>
    </div>
    <div class="">

    </div>
</nav>

<?php }
}
