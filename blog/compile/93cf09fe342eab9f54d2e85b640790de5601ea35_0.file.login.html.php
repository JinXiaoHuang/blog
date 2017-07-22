<?php
/* Smarty version 3.1.30, created on 2017-07-12 03:26:36
  from "D:\wamp\www\blog\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59657accc3ba93_78822707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93cf09fe342eab9f54d2e85b640790de5601ea35' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\admin\\login.html',
      1 => 1498661499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59657accc3ba93_78822707 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form action="index.php?d=admin&f=login&a=check" method="post">
        <h2>博客系统</h2>
         <ul>
            <li>
                <laber>用户名</laber></br>
                <input type="text" name="username" value="Your name"
                       onfocus="this.value ='';this.style.borderRadius='5px'"
                       onblur="(this.value=='')?this.value='Your name':this.value=this.value"
                />
            </li>
            <li>
                <laber>密码</laber></br>
                <input type="password"  name="pass" value="......"
                       onfocus="this.value ='';this.style.borderRadius='5px'"
                       onblur="(this.value=='')?this.value='......':this.value=this.value"
                />
            </li>
            <li>
                <laber>验证码</laber></br>
                <input type="valide" name="valide" value="validecode"
                       onfocus="this.value ='';this.style.borderRadius='5px'"
                       onblur="(this.value=='')?this.value='validecode':this.value=this.value"
                />
                <img src="<?php echo SELF_PATH;?>
?d=admin&f=login&a=code"
                     onclick="this.src='<?php echo SELF_PATH;?>
?d=admin&f=login&a=code'"
                     style="width:70px;height:37px;
                     margin: 7px 0 0 5px;border-radius: 5px;cursor: pointer;"
                     title='看不清可单击图片刷新'
                />
            </li>
            <li>
                <input type="submit" name="sub" value="登录"/>
            </li>
        </ul>
    </form>
</section>
</body>
</html>
<style>
    body{
        background: url("<?php echo IMG_PATH;?>
login_bgx.gif");
    }
.form_box{
    width:400px;
    height:400px;
    position:absolute;
    top:0;bottom:0;left:0;right:0;
    margin: auto;
    /*background: url("<?php echo IMG_PATH;?>
login_m_bg.png") no-repeat;*/
    background: #F7F7F7;
    box-shadow: 0px 0px 30px #B7B7B7;
    border-radius: 5px;
}
.form_box form{
    display: block;
    width:100%;
    heigth:400px;
}
    .form_box h2{
        width:100%;
        height:40px;
        line-height: 40px;
        text-align: center;
        padding:10px 0 10px 0;
        color: #797979;
        border-bottom:solid 1px #ccc;
    }
.form_box ul{
    padding:0 40px 0 40px;
    margin-top:30px ;
}
.form_box ul li{
    overflow: hidden;
}
.form_box input{
    display: block;
        width: 295px;
        height: 36px;
        border: 1px solid #cad2db;
        padding: 0 5px;
        border-radius: 5px;
        line-height: 36px;
        margin-bottom: 12px;
        font-size: 14px;
        color: #717171;
        font-family: Arial;
    margin-top: 7px;

    }
.form_box laber{
        color: #4f5d80;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: normal;
        margin-bottom: 11px!important;
        margin-top: 10px;
    }
.form_box input[type='submit']{
        outline: none;
    width:307px;
    cursor: pointer;
    transition: all 0.5s;
    }
    .form_box input[type='submit']:hover{
        background: #BFBFBF;
        color:#797979;
    }
.form_box input[name='valide']{
        width:220px;
    float: left;
    }
.form_box input.active{
        outline:none;
    }
    .form_box input.active1{
           border-color:#6192C8;
           box-shadow: 0px 0px 10px #B3CAE2;
    }
</style>
<?php echo '<script'; ?>
>
    $(function(){
        $('input').each(function(){
            $(this).focus(function(){
                $(this).addClass('active');
                $(this).addClass('active1');
            })
            $(this).blur(function(){
                $(this).removeClass('active');
                $(this).removeClass('active1');
            })
        })
        $('input[type=submit]').click(function(){
            $(this).removeClass('active1');
        })

    })
<?php echo '</script'; ?>
><?php }
}
