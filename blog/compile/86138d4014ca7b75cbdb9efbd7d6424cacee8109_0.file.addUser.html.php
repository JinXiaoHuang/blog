<?php
/* Smarty version 3.1.30, created on 2017-07-12 04:27:15
  from "D:\wamp\www\blog\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596589034876f0_42088230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86138d4014ca7b75cbdb9efbd7d6424cacee8109' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\admin\\addUser.html',
      1 => 1499826431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596589034876f0_42088230 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h3 style="height:100%;line-height:65px; padding-left:20px;">管理员信息管理</h3>
    </div>
    <div class="nav" style=" border-top: 1px solid #ccc;">
        <ul>
            <li>首页</li>
            <li class="fg">/</li>
            <li>管理员添加</li>
        </ul>
    </div>
    <div class="list_box">
        <form action="index.php?d=admin&f=user&a=addCon" method="post">
            <section class="btn_toolbar">
                <button type="submit" class="btn save">
                    确认添加
                </button>
                <!--                <button type="submit" class="del">-->
                <!--                    删除信息-->
                <!--                </button>-->
            </section>
            <section class="well">
                <!--                <ul class='nav_tabs'>-->
                <!--                    <li class="active">基本信息</li>-->
                <!--                    <li>密码</li>-->
                <!--                </ul>-->
                <ul class="base_mess com">
                    <li>
                        <select name="rid" id="" class="form-control">
                            <option value="">
                                --选择角色--
                            </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['rid'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>

                            </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </li>
                    <li>
                        <label>用户名：</label><br>
                        <input type="text" id="" name="uname" value="" />
                    </li>
                    <li>
                        <label>密码：</label><br>
                        <input type="password" name="upass" id="" value="" />
                    </li>
                    <li>
                        <label>昵称:</label><br>
                        <input type="text" id="" name="nichen" value="" />
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
