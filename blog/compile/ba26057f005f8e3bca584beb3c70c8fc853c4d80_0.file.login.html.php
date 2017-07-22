<?php
/* Smarty version 3.1.30, created on 2017-06-27 12:12:36
  from "D:\wamp\www\blog\template\admin\j_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59522f94ca45a1_63360435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba26057f005f8e3bca584beb3c70c8fc853c4d80' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\admin\\j_login.html',
      1 => 1498558347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59522f94ca45a1_63360435 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录页</title>
    <link href="<?php echo CSS_PATH;?>
com.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js" rel="stylesheet"><?php echo '</script'; ?>
>
</head>
<body>
<section class="form_box">
    <form action="" method="post">
         <ul>
            <li>
                <laber>用户名</laber></br>
                <input type="text" name="username"/>
            </li>
            <li>
                <laber>密码</laber></br>
                <input type="password"  name="pass"/>
            </li>
            <li>
                <laber>验证码</laber></br>
                <input type="valide" name="valide"/>
                <img src="">
            </li>
            <li>
                <input type="submit" name="sub"/>
            </li>
        </ul>
    </form>
</section>
</body>
</html>
<style>
.form_box{
    width:400px;
    height:400px;
    position:absolute;
    top:0;bottom:0;left:0;right:0;
    margin: auto;
    background: url("<?php echo IMG_PATH;?>
login_m_bg.png") no-repeat;
}
form{
    display: block;
    width:100%;
    heigth:400px;
}
ul{
    padding:0 40px 0 40px;
    margin-top:30px ;
}
    input{
        width: 295px;
        height: 36px;
        border: 1px solid #cad2db;
        padding: 0 5px;
        border-radius: 5px;
        line-height: 36px;
        margin-bottom: 10px;
        font-size: 14px;
        color: #717171;
        font-family: Arial;
    }
    laber{
        color: #4f5d80;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: normal;
        margin-bottom: 11px;
    }
    input[type='submit']{
        outline: none;
    }
    input[name='valide']{
        width:200px;
    }
</style><?php }
}
