<?php
/* Smarty version 3.1.30, created on 2017-07-20 18:07:55
  from "D:\wamp\www\blog\template\index\person_indexPage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5970d55b849672_36916982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '983b8d34dd26b951fee4994ba18996989007c38a' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\template\\index\\person_indexPage.html',
      1 => 1500566874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
  ),
),false)) {
function content_5970d55b849672_36916982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
person_indexPage.css">
<style>
    .content_box{
        margin-top: 57px;
    }
</style>
<section class="content_box">
    <div class="content_left">
        <!--个人-->
        <div class="person_message">
            <div class="touxiang"><img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['photo'];?>
" alt=""></div>
            <ul class="zj">
                <li class="nichen" style="font-size:21px;"><?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['nichen'];?>
</li>
                <li>
                    <div class="guanzhu">
                        <span>0</span>
                        <a href="">关注></a>
                    </div>
                    <div class="fenshi">
                        <span>0</span>
                        <a href="">粉丝></a>
                    </div>
                    <div class="artic">
                        <span>0</span>
                        <a href="">文章></a>
                    </div>
                </li>
            </ul>
        </div>
        <!---->
        <ul class="tarbar_menu">
            <li class="arc">
                <a href=""><span class="glyphicon glyphicon-duplicate"></span>&nbsp;&nbsp;文章</a>
            </li>
            <li class="act">
                <a href=""><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;动态</a>
            </li>
            <li class="comment">
                <a href=""><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;最新评论</a>
            </li>
        </ul>
        <ul class="content_list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li>
                <div class="author">
                    <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['photo'];?>
" alt="" style="width:32px;height:32px;border-radius: 50%"></a>
                    <a href="" class="nicheng"><?php echo $_smarty_tpl->tpl_vars['photo']->value[0]['nichen'];?>
</a>
                    <span>发表了文章&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['time'];?>
</span>
                </div>
                <a href="index.php?d=index&f=person&a=showArtic&msid=<?php echo $_smarty_tpl->tpl_vars['item']->value['msid'];?>
" class="arc_title" style="color:#333;"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                <p class="abstrct"></p>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
" class="Math.random()">
                <div class="mate">
                    <a href="" class="glyphicon glyphicon-eye-open"><span class="number">0</span></a>
                    <a href="" class="glyphicon glyphicon-envelope"><sapn class="number">0</sapn></a>
                    <span class="glyphicon glyphicon-heart"><sapn class="number">0</sapn></span>
                </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>
    <div class="content_right">
        <form action="" method="" class="form_user">
            <ul class="person_des">
                <li>
                    <div class="transtion">个人介绍</div>
                   <div class="edit glyphicon glyphicon-pencil">编辑</div>
                </li>
                <li>
                    <div class="edit_box">
                        <div class="desc_box"></div>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <div class="new_notebook_form">
                            <input type="submit" class="class_submit">
                            <div class="cancel">取消</div>
                        </div>
                    </div>
                </li>
                <li>

                </li>
            </ul>
        </form>
    </div>
</section>
</body>
</html>
<?php echo '<script'; ?>
>
    $(function(){
        $('.content_list li').each(function(index,val){
            var content=$(this).children('input[type=hidden]').val();
            var slice=content.substr(0,90)+' ....';
            $(this).children('p.abstrct').text(slice);
        })

       $('.edit').click(function(){
           $('.edit_box').show();
           $('.person_des li:nth-child(2)').css('paddingBottom','70px');
       })
        $('.cancel').click(function(){
            $('.edit_box').hide();
            $('.person_des li:nth-child(2)').css('paddingBottom','40px');

        })


    })
<?php echo '</script'; ?>
><?php }
}
