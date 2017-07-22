<?php
/* Smarty version 3.1.30, created on 2017-07-14 08:07:17
  from "D:\wamp\www\blog\template\index\changeCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59685f95c7a9f0_10512409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c79b6f88453d3ac258bcc0db9d47e443ba2eab23' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\index\\changeCategory.html',
      1 => 1500012436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59685f95c7a9f0_10512409 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
com.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <title>修改文集名</title>
</head>
<style>
    *{
        padding:0;margin: 0;
        text-decoration: none;
        list-style: none;
    }
    /*提示信息*/
    .tip_message{
        height:0;
        width:300px;
        border-radius: 5px;
        border:0px solid #4CAF50;
        background: #fff;
        color:#4CAF50;
        position:absolute;
        top:30px;
        left:0;right:0;
        margin: auto;
        z-index: 200000;
        overflow: hidden;
        text-align: center;
        line-height: 40px;
        font-weight: bold;

    }
    @keyframes tip{
        0%{
            height:0px;
        }
        20%{
            height:40px;
        }
        80%{
            height:40px;
        }
        100%{
            height:0px;
        }
    }
    .change_box{
        width:560px;
        height:235px;
        position:absolute;
        left:0;right:0;top:0;bottom:0;margin:50px auto 0;
    }
    .model_header{
        height:63px;
    }
    h4{
        text-align: center;
        font-weight:bold;
        height:100%;
        line-height:63px;
        border-bottom: 1px solid #eee;
    }
    .model_body{
        height:100px;
        padding: 30px;
        margin: 0 auto;
        text-align: center;
    }
    .model_body input{
        outline: none;
        transition: border linear 0.2s, box-shadow linear 0.2s;
        border:none;
        background-color: white;
        border: 1px solid #cccccc;
        height: 30px;
        padding: 4px 6px;
        margin-bottom: 10px;
        font-size: 14px;
        line-height: 20px;
        color: #555555;
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
        border-radius: 4px;
    }
    .model_footer{
        height:72px;
    }
    .option_box{

        width:150px;
        margin: 0 auto;
        overflow: hidden;
    }

    .option_box div{
        border: 1px solid #cccccc;
        width:70px;height:32px;
        box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
        border-radius: 4px;
        float:left;
    }
    .option_box .cancel{
        float:right;
        text-align: center;
        line-height: 32px;
        cursor: pointer;
        background: #F5F5F5;
    }
    .sub input{
        width:100%;
        height:100%;
        border:none;
       background: #3194D0;
        outline: none;
        color:#fff;
    }

</style>
<body>
<div class="change_box">
    <ul>
        <li class="model_header"><h4>修改文集名</h4></li>
        <li class="model_body">
            <form action="" method="">
                <input type="text" name="mcname" placeholder="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['mcname'];?>
">

            </form>

        </li>
        <li class="model_footer">
            <section class="option_box">
                <div class="sub">
                    <input type="submit" value="提交">
                </div>
                    <div class="cancel">取消</div>
            </section>
        </li>
    </ul>
</div>
<!--提示信息-->
<section class="tip_message">
</section>
</body>
</html>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        //提示信息
        function tip_message(tip=''){
            $(".tip_message").html(tip);
            setTimeout(function(){
                $(".tip_message").css("display","block")
                $('.tip_message').css('animation','tip 3s linear').css('height','0').css('border','1px solid #4CAF50');
            },500);
            //监听动画完成
            $(".tip_message")[0].addEventListener("webkitAnimationEnd",function(){
                $(".tip_message").css("display","none")
            })
        }


        $('body').fadeTo(1100,1);
        $('.cancel').click(function(){
            window.history.go(-1);

        })
        $('input[type=submit]').click(function(){
            return false;
        })


        $('.sub input').click(function(){
            var str=$('input[type=text]').serialize();
            $.ajax({
                url:'index.php?d=index&f=category&a=changeCon',
                type:'POST',
                data:str,
                success:function(e){
                    if(e='修改成功'){
                        tip_message(e);
                        setTimeout(function(){
                            location.href='index.php?d=index&f=category&a=select';
                        },1500)
                    }
                }
            })
        })
    })
<?php echo '</script'; ?>
><?php }
}
