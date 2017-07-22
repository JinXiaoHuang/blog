<?php
/* Smarty version 3.1.30, created on 2017-06-30 11:24:16
  from "D:\wamp\www\blog\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595618c00efce2_47262504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a25fb474e7275a96507bb10b9a4da93e83a4f7f' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\admin\\main.html',
      1 => 1498814654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595618c00efce2_47262504 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
main.css"/>
    <link rel="stylesheet" type="text/css" href="../static/css/conment.css"/>
    <link rel="stylesheet" type="text/css" href="../font/iconfont.css">
    <link rel="stylesheet" type="text/css" href="../font/font1/iconfont.css">
    <?php echo '<script'; ?>
 src="../static/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../static/js/main.js"><?php echo '</script'; ?>
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
        <a href="login_out.php">退出</a>
        <div class="sjiao"></div>
    </div>
</section>
<!--管理首页-->
<!--<div class="welcome">欢迎来到基于人脸识别的考勤管理系统！点击解雇我...</div>-->
<!--侧边栏登录信息-->
<section class="main">
    <div class="fun" style="background: #242424;">
        <div class="">
            <h4 class="iconfont icon-guanliyuan">&nbsp;&nbsp;管理员信息管理</h4>
            <ul>
                <li><a href="admin_list.php" target="content_right">基本信息</a></li>
                <li><a href="revise_admin.php" target="content_right">编辑信息</a></li>

            </ul>
        </div>
        <div class="">
            <h4 class="iconfont icon-guanliyuan">&nbsp;&nbsp;栏目管理</h4>
            <ul>
                <li><a href="add_category.php" target="content_right">添加栏目</a></li>
                <li><a href="manage_category.php" target="content_right">编辑栏目</a></li>

            </ul>
        </div>
        <div class="">
            <h4 class="iconfont icon-xuesheng">&nbsp;&nbsp;内容管理</h4>
            <ul>
                <li><a href="add_content.php" target="content_right">添加内容</a></li>
                <li><a href="manage_content.php" target="content_right">编辑内容</a></li>
            </ul>
        </div>
        <div class="">
            <h4 class="iconfont icon-kaoqin--">&nbsp;&nbsp;推荐管理</h4>
            <ul>
                <li><a href="add_position.php" target="content_right">推荐位添加</a></li>
                <li><a href="manage_position.php" target="content_right">推荐位管理</a></li>
            </ul>
        </div>

        <!--                <div class="">-->
        <!--                    <h4 class="iconfont icon-kaoqin--">&nbsp;&nbsp;学生考勤管理</h4>-->
        <!--                    <ul>-->
        <!--                        <li><a href="">推荐位管理</a></li>-->
        <!--                        <li><a href="">推荐位添加</a></li>	 <li></li>-->
        <!--                    </ul>-->
        <!--                </div>-->
    </div>
    <div class="content">
        <iframe src="" width="100%" height="100%" name="content_right"></iframe>


    </div>
</section>


<!--管理首页结束-->



<div class="footer">太原学院</div>
</body>
</html>
<?php echo '<script'; ?>
>
    $('li').click(function(){
        $('li').each(function(){
            $('li').removeClass('active');
            //console.log(1);
        })
        $(this).addClass('active');
        //console.log($(this));
    })

<?php echo '</script'; ?>
>

<?php }
}
