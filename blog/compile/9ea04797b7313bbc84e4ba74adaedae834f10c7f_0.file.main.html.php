<?php
/* Smarty version 3.1.30, created on 2017-07-12 12:44:06
  from "D:\wamp\www\blog\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965fd76e6d1b3_30149571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ea04797b7313bbc84e4ba74adaedae834f10c7f' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\admin\\main.html',
      1 => 1499856211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965fd76e6d1b3_30149571 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
conment.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo FONTS_PATH;?>
font1/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
main.js"><?php echo '</script'; ?>
>
    <title>后台首页</title>
</head>
<body style="width:100%;">
<section class="top-bar">
    <div class="uer-pan" style="background: none">

    </div>
    <div class="title">
        您好，欢迎光临本系统
    </div>

    <div class="uer-set" style="height:50px;">
        <a href="javascript:;">设置</a>
        <a href="javascript:;"><span class="iconfont icon-zhanghu1"></span><span><?php echo '<?php ';?>echo $_SESSION['username']<?php echo '?>';?></span><span class="xial"></span></a>

    </div>
    <div class="time">
        <p style="position:absolute;right:20px;bottom:7px;"><?php echo '<?php ';?>echo '登录时间：'.$date<?php echo '?>';?></p>
    </div>
    <div class="hiddle">
        <a href="login_out.php">切换账户</a>
        <div class="space"></div>
        <a href="index.php?d=admin&f=login&a=loginout">安全退出</a>
        <a href="index.php" target="_blank">主页</a>
        <div class="sjiao"></div>
    </div>
</section>
<!--管理首页-->
<!--侧边栏登录信息-->
<section class="main">
    <div class="fun" style="background: #242424;">
        <div class="">
            <h4 class="iconfont icon-guanliyuan">&nbsp;&nbsp管理员管理</h4>
            <ul>
                <li><a href="index.php?d=admin&f=user&a=add" target="content_right">添加管理员</a></li>
                <li><a href="" target="content_right">编辑管理员信息</a></li>

            </ul>
        </div>
        <div class="">
            <h4 class="iconfont icon-guanliyuan">&nbsp;&nbsp角色管理</h4>
            <ul>
                <li><a href="index.php?d=admin&f=role&a=add" target="content_right">添加角色</a></li>
                <li><a href="" target="content_right">编辑角色信息</a></li>

            </ul>
        </div>
        <div class="">
            <h4 class="iconfont icon-xuesheng">&nbsp;&nbsp;会员管理</h4>
            <ul>
                <li><a href="index.php?d=admin&f=mumber&a=show" target="content_right">添加内容</a></li>
                <li><a href="" target="content_right">编辑会员信息</a></li>
            </ul>
        </div>
        <div class="">
            <h4 class="iconfont icon-xuesheng">&nbsp;&nbsp;分类管理</h4>
            <ul>
                <li><a href="index.php?d=admin&f=category&a=add" target="content_right">添加分类</a></li>
                <li><a href="" target="content_right">编辑分类</a></li>
            </ul>
        </div>
        <div class="">
            <h4 class="iconfont icon-kaoqin--">&nbsp;&nbsp;内容管理</h4>
            <ul>
                <li><a href="index.php?d=admin&f=show&a=add" target="content_right">添加内容</a></li>
                <li><a href="" target="content_right">编辑内容</a></li>
            </ul>
        </div>
        <div class="">
            <h4 class="iconfont icon-kaoqin--">&nbsp;&nbsp;推荐位管理</h4>
            <ul>
                <li><a href="index.php?d=admin&f=position&a=add" target="content_right">添加推荐位</a></li>
                <li><a href="" target="content_right">编辑推荐位</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <iframe src="" width="100%" height="100%" name="content_right"></iframe>


    </div>
</section>


<!--管理首页结束-->



<!--<div class="footer">太原学院</div>-->
</body>
</html>
<?php echo '<script'; ?>
>
    $('li').click(function(){
        $('li').each(function(){
            $('li').removeClass('active');
            //console1.log(1);
        })
        $(this).addClass('active');
        //console1.log($(this));
    })

<?php echo '</script'; ?>
>

<?php }
}
