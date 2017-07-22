<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/29
 * Time: 9:37
 */
class login extends indexMain{
    function code(){
        $obj=new code();
        $obj->width=150;
        $obj->height=50;
        $obj->lineNum=10;
        $obj->pixNum=150;
        //$obj->codeURL="static/fonts/ARCENA.ttf";
        $obj->output();
        $this->session->set('code',strtolower($obj->string));
    }
    function check_login(){
        //验证验证码
        if($_POST['validecode']!==$this->session->get('code')){
            echo '验证码错误';
            exit;
        }
        //验证用户名是否为空
        if(empty($_POST['mname'])){
            echo '用户名不能为空';
            exit;
        }
        //验证密码是否为空
        if(empty($_POST['mpass'])){
            echo '密码不能为空';
            exit;
        }
        //查询
        $db=new db('blog.member');
        $result=$db->select();
        //验证账户与密码
        foreach ($result as $v){
            if($v["mname"]==$_POST['mname']){
                if($v["mpass"]==$_POST['mpass']){
                    $this->session->set("indexLogin","yes");
                    $this->session->set("mname",$v["mname"]);
                    $this->session->set("mid",$v["mid"]);
                    echo "登录成功,即将跳转....";
                    exit();
                }
            }
        }
        echo '用户名或密码错误';
    }
    function check_reg(){
        $nichen=$_POST["nichen"];
        if(empty($nichen)){
            echo "昵称不能为空";
            exit;
        }
        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->where("mname='{$mname}'")->select();
        if(count($result)>0){
            echo "用户名存在";
            exit;
        }
        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $mpass1=$_POST["comfirepass"];
        if(empty($mpass1)){
            echo "确定密码不能为空";
            exit;
        }
        if($mpass!=$mpass1){
            echo "两次密码不一致";
            exit;
        }
        if($result=$db->insert("mname='{$mname}',mpass='{$mpass}',nichen='{$nichen}'")){
            echo "注册成功,请登录";
            exit;
        }
    }
    //退出登录
    function out_login(){
        $this->session->del('indexLogin');

            echo '退出成功';


    }
}