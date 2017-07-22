<?php
/* Smarty version 3.1.30, created on 2017-07-12 12:44:12
  from "D:\wamp\www\blog\template\admin\addPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965fd7c083be0_14420363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67546ca658d7d907aa06fe93ebe7af8e308e8e73' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\admin\\addPos.html',
      1 => 1499856211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965fd7c083be0_14420363 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html style="overflow: hidden">
<head>
    <title>修改个人信息</title>
    <link rel="stylesheet" type="text/css" href="<?php echo FONTS_PATH;?>
font3/iconfont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
right.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
jquery.js" ><?php echo '</script'; ?>
>
    <style>
        .base_mess li{
            display: block;
        }
    </style>
</head>
<body style="width:100%;overflow: hidden">
<section class="admin">
    <div class="title">
        <h3 style="height:100%;line-height:65px; padding-left:20px;">推荐位管理</h3>
    </div>
    <div class="nav" style=" border-top: 1px solid #ccc;">
        <ul>
            <li>首页</li>
            <li class="fg">/</li>
            <li>推荐位添加</li>
        </ul>
    </div>
    <div class="list_box">
        <form action="index.php?d=admin&f=position&a=addCon" method="post">
            <section class="btn_toolbar">
                <button type="submit" class="btn save">
                    确认添加
                </button>
            </section>
            <section class="well">

                <ul class="base_mess com">
                    <li>
                        <label>推荐位名称：</label><br>
                        <input type="text" id="" name="posname" value="" />
                    </li>

                </ul>
            </section>
        </form>
    </div>
</section>
</body>
</html>
<?php echo '<script'; ?>
>
    $('.nav_tabs li').click(function(){
        $('.nav_tabs li').each(function(index,value){
            $('.com').eq(index).addClass('active2');
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        console.log($(this).index());
        $('.com').eq($(this).index()).removeClass('active2');
    })

<?php echo '</script'; ?>
><?php }
}
