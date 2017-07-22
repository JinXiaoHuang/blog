<?php
/* Smarty version 3.1.30, created on 2017-07-20 16:25:35
  from "D:\wamp\www\blog\template\index\wirter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5970bd5fbbf705_68077876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '701cc0ec7bc825400a7961b10af081cabfc5edf9' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\index\\wirter.html',
      1 => 1500559484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970bd5fbbf705_68077876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
com.css">-->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
wirte.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
angular.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
angular.note.js"><?php echo '</script'; ?>
>
    <title>写文章</title>
    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>
    <style>
        .tip_message{
            height:0;
            width:300px;
            border-radius: 5px;
            border:0px solid #E05244;
            background: #fff;
            color:#E05244;
            position:absolute;
            top:130px;
            left:0;right:0;
            margin: auto;
            z-index: 200000;
            overflow: hidden;
            text-align: center;
            line-height: 40px;

        }
        .tip_message2{
            height:0;
            width:300px;
            border-radius: 5px;
            border:0px solid #42C02E;
            background: #fff;
            color:#42C02E;
            position:absolute;
            top:57px;
            left:0;right:0;
            margin: auto;
            z-index: 200000;
            overflow: hidden;
            text-align: center;
            line-height: 40px;
            font-weight: bold!important;

        }
        @keyframes slide{
            0%{
                top:0px;
            }

            100%{
                top:150px;
            }
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
    </style>
</head>
<body>
<!--页面短暂遮罩-->
<div class="zhezhao">

</div>
<div class="loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
<!--左部分类-->
<section class="big-box">
<div class="left">
         <div class="home_wrap">
             <a href="index.php">回首页</a>
         </div>
         <div class="new_notebook">
             <p class="new"><span class="glyphicon glyphicon-plus"></span>新建文集</p>
             <div class="new_notebook_form">
                 <form action="index.php?d=index&f=category&a=addCon" method="post">
                     <input type="text" name="cname" placeholder="请输入分类名称..." value="">
                     <input type="submit" class="class_submit">
                     <div class="cancel">取消</div>
                 </form>
             </div>
         </div>
        <ul class="nav_list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li class="item">
                <div class=""></div>
                <ul class="option_box">
                    <li><a href="index.php?d=index&f=category&a=change&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['mcid'];?>
"><em class="glyphicon glyphicon-edit"></em>&nbsp;&nbsp;修改文集名</a></li>
                    <li><a href="index.php?d=index&f=category&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['mcid'];?>
"><em class="glyphicon glyphicon-trash"></em>&nbsp;&nbsp;删除文集</a></li>
                </ul>
                <a class="class_" href="javascript:;" val="<?php echo $_smarty_tpl->tpl_vars['v']->value['mcname'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['mcname'];?>
<span class="glyphicon glyphicon-cog"></span></a>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <div class="commercal">
            <a href="javascript:;">
                <span class="glyphicon glyphicon-trash"></span>
                <span>回收站</span>
            </a>
        </div>
</div>
<!--中间文章列表-->
<div class="center">
     <div class="new-note">
         <a href="javascript:;" class="new-note-link"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;&nbsp;新建文章</a>
     </div>
    <ul class="note-nav">
    </ul>
</div>
<!--右部文章内容-->
<div class="right">
    <section class="note_box">
        <form action="" method="" class="form_box">
            <div class="header">
                 <h3 style="padding-left:30px;">
                     <input type="hidden" class="oldtitle" name="oldtitle">
                     <input type="text" value="" class="newtitle" name="newtitle" style="border:0;outline: none;background: none;width:100%;">
                     <input type="hidden" class="mcname" name="mcname">
                 </h3>
            </div>
            <!--工具栏-->
            <ul class="toolbar">
                <li class="glyphicon glyphicon-picture"><input type="file"></li>
                <li class="glyphicon glyphicon-repeat"></li>
                <li class="glyphicon glyphicon-refresh"></li>
                <li>
                    <span style="margin-left: 8px;" class="glyphicon glyphicon-share-alt"></span>&nbsp;
                    <input type="submit" value="发布文章" class="submit">发布文章<span></span>
                </li>
            </ul>
            <div class="note_title">
                <textarea id="" cols="30" rows="10" class="text" name="text" style="height:500px;overflow: auto"></textarea>
            </div>

        </form>
    </section>
</div>
</section>
<section class="tip_message2">
</section>
<section class="tip_message">
</section>
</body>
</html>
<style>

</style>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        //提示信息函数
        function tip_message(tip='继续操作前请登录或注册'){
            $(".tip_message").html(tip);
            setTimeout(function(){
                $(".tip_message").css("display","block")
                $('.tip_message').css('animation','tip 3s linear').css('height','0').css('border','1px solid #E05244');
            },500);
            //监听动画完成
            $(".tip_message")[0].addEventListener("webkitAnimationEnd",function(){
                $(".tip_message").css("display","none")
            })
        }
        function tip_message2(tip='继续操作前请登录或注册'){
            $(".tip_message2").html(tip);
            setTimeout(function(){
                $(".tip_message2").css("display","block")
                $('.tip_message2').css('animation','tip 3s linear').css('height','0').css('border','1px solid #42C02E');
            },500);
            //监听动画完成
            $(".tip_message2")[0].addEventListener("webkitAnimationEnd",function(){
                $(".tip_message2").css("display","none")
            })
        }
        //淡进
        $('body').fadeTo(1100,1);
        $('.zhezhao').fadeTo(1300,0);
        setTimeout(function(){
            $('.zhezhao').css('display','none');
            $('.loader').css('display','none');
        },1000);

        //新建文集下拉效果
        $('.new').each(function(index,value){
            $(this).click(function(){
                $(this).next().slideToggle(400);
            })
        })
        //选项卡
        $('.item').each(function(index,value){
            $(this).click(function(){
                $('.item').find('div').removeClass('active');
                $('.item').find('a').children('span').removeClass('active');
                $(this).children().first().addClass('active');
                $(this).children().last().children().addClass('active');
            })
        })
        //删除或修改文集名
        $('span.glyphicon-cog').click(function(){
            if($(this).parent().parent().find('.option_box').css('display')=='none'){
                $(this).parent().parent().find('.option_box').show();
            }
            else{
                $(this).parent().parent().find('.option_box').hide();
            }
        })
        //ajax传输接受数据
        $('.class_').click(function(){
            $('.new-note-link').attr('mcname',$(this).attr('val'));
            $.ajax({
                url:'index.php?d=index&f=category&a=show',
                type:'post',
//                dataType: 'json',
                data:{ mcid:$(this).attr('val')
                },
                success:function(e){
                    $('.note-nav').html(e);
                    //console.log(e)
                }
            })
        })
        //新建文章
        $('.new-note-link').click(function(){
            //alert($(this).attr('mcname'));
            if($(this).attr('mcname')==undefined){
                  tip_message('操作前请添加文集或选择文集');
            }else{
                $('.note-nav').prepend(`
             <li class="note-list">
                <span class="glyphicon glyphicon-ok" style="position:absolute;left:20px;top:40px;font-size:18px;"></span>
                <a href="javascript:;">
                <h4 class="title">无标题文章</h4>
                </a>
                <span class=""></span>
              </li>
            `);
                $.ajax({
                    url:'index.php?d=index&f=category&a=addTitle',
                    type:'post',
//                dataType: 'json',
                    data:{ mcid:$(this).attr('mcname'),title:$('.title').html()
                    },
                    success:function(e){
                        $('.note-nav').html(e);
                        //console.log(e)
                    }
                })
            }


        })
        //文章列表选项卡
        let title;
        $(".note-nav").on("click","li",function(){
            $('.note_box').css('display','block');
            $('.header input').val($(this).children('a').children().val());
            $('.note-nav li i').removeClass('active2');
            $(this).children('i').addClass('active2');
            $('.note-nav div').removeClass('active2');
            $(this).children('div').addClass('active2');
            $('.note-nav li').css('background','#fff');
            $(this).css('background','#efefef');
            title=$(this).children('a').children().text();
            $('input[type=hidden]').val($(this).attr('note_class'));
            $('.oldtitle').val($(this).attr('note_title'));
        });
        //修改文章标题内容
//        $('.header input').keyup(function(){
//            console.log($(this).index())
//            ele=$(this).val();
//            //console.log(ele)
////            return ele;
//            $('.note-title').eq($(this).index()).val(ele);
//        })

        var ele;
        $('.header input').focus(function(){
            ele=$(this).val();
            //console.log(ele)
            return ele;
        })
        //console.log(ele);
        $('.header input').bind('input propertychange', function() {
//            var ele=$('.header input').val();
//            const ele1=ele;
//            console.log(ele1);
//            var element=$("input[value='无标题文章']");
//            console.log(element)
//            //value=$('.header input').val()
//            var change=$(this).val();
//            element.val(change);
        });
        //文章列表操作选项
        $('.note-nav').on("click",'i',function(){
            //$('.option_list_box').css('display','none');
            if($(this).prev().css('display')=='none'){
                $(this).prev().show();
            }else{
                $(this).prev().hide();
            }

        })
        //内容区域
        $('.note-list').click(function(){
            alert(1)
            $('.note_box').css('display','block');
        })
        //发布文章
        $('.submit').click(function(){
//            var data=$('.form-box').serialize();
//            data=decodeURIComponent(data,true);
//            alert(data);
            $.ajax({
               url:'index.php?d=index&f=publish',
                type:'post',
                data:{
                    oldtitle:$('.oldtitle').val(),
                    text:$('.text').val(),
                    newtitle:$('.newtitle').val(),
                    mcname:$('.mcname').val()
                },
                success:function(e){
                    tip_message2(e);
                }

            })
            return false;
        })

    })
<?php echo '</script'; ?>
><?php }
}
