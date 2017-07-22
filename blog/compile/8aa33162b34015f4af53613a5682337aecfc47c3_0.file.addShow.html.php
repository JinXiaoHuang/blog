<?php
/* Smarty version 3.1.30, created on 2017-07-12 12:29:12
  from "D:\wamp\www\blog\template\admin\addShow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965f9f8210578_89531702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8aa33162b34015f4af53613a5682337aecfc47c3' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\admin\\addShow.html',
      1 => 1499855035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965f9f8210578_89531702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html style="overflow: hidden">
<head>
    <title>修改个人信息</title>
    <link rel="stylesheet" type="text/css" href="<?php echo STATIC_PATH;?>
fonts/font3/iconfont.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
jquery.js" ><?php echo '</script'; ?>
>
    <style>
        body{
            width:100%;
        }
        .admin{
            width:1084px;
            height:100%;
            background: #fff;
        }
        .title{
            width:100%;
            height:65px;
            background: -webkit-gradient(linear, left bottom,
            left top, color-stop(0, #e6e6e6), color-stop(1, #ffffff));
        }
        .title h3{
            height:100%;
            line-height: 65px!important;
            margin: 0;
            padding-left:20px!important;
        }
        .nav{
            height:38px;
            width:1084px;
            background-clip: padding-box;
            background: #eee;
            border-bottom: 1px solid #aaa;
            border-top: 1px solid red;
            border-left: 1px solid #fff;
            box-sizing: border-box;
            margin-bottom: .5em;
            margin: 0;
        }
        .nav ul{
            margin: 0;
            margin-left: 20px;
            height:38px;
            padding-left:0;

        }
        .nav li{
            list-style: none!important;
            width:auto;
            height:38px;
            float:left;
            color:#999999;
            line-height: 38px;
            font-size:13px;
        }
        .nav ul li:first-child{
            color:#0088D5;
        }
        .fg{
            width:30px!important;
            text-align: center;
        }
        .list_box{
            background: #fff;
            width:1004px;
            height:412px;

            padding:0px 20px 0 20px;
            margin: 0!important;
        }
        .well{
            width:1034px;
            height:auto;
            background-color: #fff;
            border: 1px solid #ccc;
            -webkit-box-shadow: 1px 1px 0px #ffffff;
            -moz-box-shadow: 1px 1px 0px #ffffff;
            box-shadow: 1px 1px 0px #ffffff;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
            -moz-background-clip: padding;
            -webkit-background-clip: padding-box;
            background-clip: padding-box; padding:20px 20px 40px 20px;
            box-sizing: border-box;
            overflow: auto;
        }
        .well th,.well td{
            width:12%;
            text-align: center;
            border-bottom:1px solid #ddd!important;
            padding:0;
            padding-top:8px;
            padding-bottom:8px;
            color:#333;
        }
        .well table,.well table tr{
            width:100%;
        }
        .well td{
            font-size:12px;
        }
        .well table tr{
            border-bottom:1px solid #ddd!important;
        }
        .well table tr th:last-child{
            border:0;
        }
        .btn_toolbar{
            height:30px!important;
            width:1068px;

            margin: 10px 0 10px 0;
        }
        td a{
            color:#1788CC;
            text-decoration: none;
            font-size:13px;
            font-weight: bold;
            cursor: pointer;
        }
        .btn_toolbar .btn{
            background-color: #113355;
            background-image: linear-gradient(to bottom, #446688, #113355);
            width:106px;
            height:30px;
            text-align: center;
            line-height: 30px;
            color:#fff;
            font-size:14px;
        }
        .btn_toolbar .btn a{
            color:#fff;
            text-decoration: none;
        }
        .link a:hover{
            color:darkred;
        }
    </style>
</head>
<body style="width:100%;overflow: hidden">
<section class="admin">
    <div class="title">
        <h3 style="height:100%;
                line-height:65px; padding-left:20px;">内容</h3>
    </div>
    <div class="nav" style=" border-top: 1px solid #ccc;">
        <ul>
            <li>首页</li>
            <li class="fg">/</li>
            <li>内容信息</li>
        </ul>
    </div>
    <div class="list_box">
        <section class="btn_toolbar">
            <div class="btn">
                <a href="add_admin.php" target="content_right">无用</a>
            </div>
        </section>
        <section class="well">
            <table>
                <tr style="font-size:15px;">
                    <th>id</th>
                    <th>所属分类</th>
                    <th>标题</th>
                    <th>推荐位</th>
                    <th>状态</th>
                    <th>发表时间</th>
                    <th>作者</th>
                    <th>操作</th>
                </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["posid"];?>

                    </td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['v']->value["status"] == 0) {?>
                        未审核
                        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 1) {?>
                        审核中
                        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 2) {?>
                        通过
                        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 3) {?>
                        精华
                        <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["status"] == 4) {?>
                        违规
                        <?php }?>
                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["mname"];?>

                    </td>
                    <td class="link">
                        <a href="index.php?m=admin&f=show&a=del&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" class='iconfont icon-shanchu'></a>
                        <a href="index.php?m=admin&f=show&a=edit&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
&mid=<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
" class='iconfont icon-shanchu'></a>
                    </td>
                </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </table>
                <a href="index.php?m=admin&f=show&a=add">
                    全部
                </a>
                <a href="index.php?m=admin&f=show&a=add&status=2">
                    通过
                </a>
                <a href="index.php?m=admin&f=show&a=add&status=1">
                    审核中
                </a>
                <a href="index.php?m=admin&f=show&a=add&status=0">
                    未审核
                </a>
                <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>


        </section>
    </div>
</section>
</body>
</html>
<?php echo '<script'; ?>
>
    $('.icon-shanchu').click(function(){
        $(this).parent().parent().attr('style','display: none');


    })
<?php echo '</script'; ?>
><?php }
}
