<?php
/* Smarty version 3.1.30, created on 2017-07-20 18:05:25
  from "D:\wamp\www\blog\template\index\person_set.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5970d4c5973f08_43543241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b87067909fe360641110581d91619e617a2834' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\index\\person_set.html',
      1 => 1500566724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_5970d4c5973f08_43543241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
person_set.css">
<style>
    .option_list{
        /*margin-top: 40px;*/
    }
    .option_list li{
        width:263px;height:52px;
        background: #fff;
        /*background-color: #f0f0f0;*/
        border-radius: 4px;
        padding: 10px 15px;
        font-size: 15px;
        color: #333;
        line-height: 32px;
        cursor: pointer;
    }
    .option_list li span{
        margin-left: 15px;

    }
    .option_list li.active{
        background: #F0F0F0!important;
    }
    .right .active1{
        display: block!important;
    }
    .right > div{
        display: none;
    }
    .base_set span{
        font-size:16px;
        color:#969696;
        display: block;
        float:left;
        line-height:30px;
        width:64px;
    }
    div.seting-icon{
        background-color: #a0a0a0;
        width:32px!important;height:32px;
        border-radius: 4px;
        float:left;
        text-align: center;
        line-height: 32px;
    }
    .seting_icon em{
        color:#fff!important;
    }
    .right{
        /*margin-top: 40px;*/
    }
    .change_touxiang{
        height:120px;
    }
    .change_touxiang img,.change_touxiang input{
       float:left;
    }
    .change_touxiang input{
        position:absolute;
        top:35px;
        z-index: 1000;
    }
    .change_touxiang div{
        width: 100px;
        height: 100px;
        float:left;
        position:relative;
        margin-left: 60px;
    }
    .change_touxiang div span{
        display: block;
        position:absolute;
        border: 1px solid rgba(59,194,29,.7);
        color: #42c02e!important;
        display: block;
        width:82px;height:29px;
        border-radius: 29px;
        text-align: center;line-height: 29px;
        margin-top: 35px;
        cursor: pointer;
        font-size:13px;
    }
    .change_touxiang div span:hover{
        background: #eeeeee;
    }
    .change_touxiang input[type=file]{
        opacity: 0;
        border: 1px solid rgba(59,194,29,.7);
        color: #42c02e!important;
        display: block;
        width:82px;height:29px;
    }
    .basic_email,.basic_nichen,.basic_phone,.basic_submit{
        width:100%!important;
        width:150px;
        padding:20px;
        padding-left:0;
        border-bottom: 1px solid #F0F0F0;
    }
    .basic_submit{
        border:0;
    }
    .basic_submit input{
        width: 100px;
        height:35px;
        margin: 30px 0 60px;
        border-radius: 4px;
        border:0;
        background-color: #349724;
        color:#fff;
    }
    .basic_nichen input,.basic_phone input,.basic_email input{
        border:none;
        width:214px;
        height:33px;
        padding:5px 10px;
        border-radius: 4px;
        border: 1px solid #c8c8c8;
        font-size:14px;
        outline: none;
        margin-left: 80px;
        background: #F8F8F8;
    }
    .sex{
        height:74px!important;
    }
    .sex input{
        width:15px;
        height:15px;
        margin-left: 10px;
    }
    .sex div{
        margin-left: 80px!important;
        float:left;
    }
    .basic_email textarea{
        width: 475px;
        height: 100px;
        margin-left: 145px;
        margin-bottom: 10px;
        padding: 8px 10px;
        font-size: 15px;
        border: 1px solid #c8c8c8;
        border-radius: 4px;
        background-color: hsla(0,0%,71%,.1);
        display: block;
        resize: none;
        outline-style: none;
        margin-top: 10px!important;

    }
    input.upload{
        z-index: 13333!important;
        position:absolute!important;
        left:100px;
        display: block;
        border: 1px solid rgba(59,194,29,.7);
        color: #42c02e!important;
        width: 82px!important;
        height: 29px;
        border-radius:29px;
        background: #fff!important;
        outline: none;
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
    .tip_message{
        height:0;
        width:300px;
        border-radius: 5px;
        border:0px solid #E05244;
        background: #fff;
        color:#E05244;
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
<section class="content_box" style="margin-top: 57px" >
    <div class="left">
       <ul class="option_list">
           <li class="active">
               <div class="seting-icon" style="float:left;"><em class="glyphicon glyphicon-th-list" style="color:#fff;"></em></div>
               <span>基础设置</span>
           </li>
           <li>
               <div class="seting-icon"><em class="glyphicon glyphicon-user" style="color:#fff;"></em></div>
               <span>个人资料</span>
           </li>
       </ul>
    </div>
    <div class="right" style="margin-top: 0">
         <div class="base_set active1" style="display: none">
             <form action="" method="post" enctype="multipart/form-data">
                <ul>
                    <li class="change_touxiang">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['photo'];?>
" alt="" style="width:100px;height:100px;border-radius: 50%;" id="img">
                        <div>
                            <div class="progress" id="progress" style="display: none"></div>
                            <input type="file" value="" id="file" name="img">
                            <span>选择头像</span>
                            <input type="hidden" name="imgurl" id="imgurl" value="" />
                            <input type="submit" class="upload" value=更换>
                        </div>
                    </li>
                </ul>
             </form>
             <form action="" method="" class="base_mess">
                 <ul>

                    <li class="basic_nichen">
                        <span>昵称</span>
                        <input type="text" name="nichen" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['nichen'];?>
">
                    </li>
                    <li class="basic_email">
                        <span>电子邮件</span>
                        <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['email'];?>
">
                    </li>
                    <li class="basic_phone">
                        <span>手机</span>
                        <input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['phone'];?>
">
                    </li>
                    <li class="basic_submit">
                        <input type="submit" class="basic_btn" value="保存">
                    </li>
                </ul>
             </form>
         </div>
        <div class="person_data base_set">
            <form action="" class="person_mess">
                <ul>
                    <li class="basic_nichen sex">
                        <span>性别</span>
                        <div>
                            <input type="radio" name="sex" value="男" checked>&nbsp;&nbsp;男
                            <input type="radio" name="sex" value="女">&nbsp;&nbsp;女
                            <input type="radio" name="sex" value="保密">&nbsp;&nbsp;保密
                        </div>

                    </li>
                    <li class="basic_email">
                        <span>个人简介</span>
                        <textarea name="descripsion" id="descripsion" cols="30" rows="10" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['des'];?>
">

                        </textarea>
                    </li>
                    <li class="basic_phone">
                        <span>个人网站</span>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['url'];?>
" name="url">
                    </li>
                    <li class="basic_submit">
                        <input type="submit" class="set_btn" value="保存">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</section>
<!--提示信息-->
<section class="tip_message2">
</section>
<section class="tip_message">
</section>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(function(){
        $('textarea').html($('textarea').val());
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
        //ajax异步传输（头像信息）
        $('.upload').click(function(){
            var str=$('#imgurl').val();
            
            $.ajax({
                url:'index.php?d=index&f=upload&a=add',
                type:'post',
                data:{imgurl:str},
                success:function(e){
                    if(e=='头像更换成功'){
                        tip_message2(e);
                    }
                    if(e=='请选择头像'){
                        tip_message(e);
                    }
                }
            })
            
            return false;
        });
        //保存基本信息
        $('.basic_btn').click(function(){
            var str=$('.base_mess').serialize();
            alert(str)
            
            $.ajax({
                url:'index.php?d=index&f=upload&a=saveBase',
                type:'post',
                data:str,
                success:function(e){
                    if(e='个人资料保存成功'){
                        tip_message2(e);
                    }
                }
            })
            
            return false;
        });
        //保存个人资料信息
        $('.set_btn').click(function(){
            var str=$('.person_mess').serialize();
            str=decodeURIComponent(str,true);
            
            $.ajax({
                url:'index.php?d=index&f=upload&a=savePerson',
                type:'post',
                data:str,
                success:function(e){
                    if(e='个人资料保存成功'){
                        console.log(e)
                        tip_message2(e);
                    }
                }
            })
            
            return false;
        });
    })
<?php echo '</script'; ?>
><?php }
}
