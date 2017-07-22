<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 9:57
 */
class login extends main{
    function init(){
        //$this->session->clear();
        if(isset($_SESSION['login'])){
            echo "<script>location.href='index.php?d=admin&f=login&a=main'</script>";
        }else {
            $this->smarty->display('admin/login.html');
        }
    }
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
    function check(){
         $username=$_POST['username'];
         $password=md5($_POST['pass']);
         $valide=$_POST['valide'];
         $db=new db('blog.user');
         $result=$db->select();
         if($valide!=$this->session->get('code')){
             echo "<script>alert('验证码错误！');
                     location.href='index.php?d=admin&f=login'</script>";
         }
         foreach($result as $value){
             if($value['uname']==$username){
                 if($value['upass']==$password){
                     echo "<script>alert('登录成功！');
                  location.href='index.php?d=admin&f=login&a=main'</script>";
                     $this->session->set('login','ok');
                     $this->session->set("name",$username);
                     $this->session->set("uid",$value["uid"]);
                     $this->session->set("rid",$value["rid"]);
                 }else{
                     echo "<script>alert('密码错误！');
                  location.href='index.php?d=admin&f=login'</script>";
                 }

             }else{
                 echo "<script>alert('账号错误！');
                  location.href='index.php?d=admin&f=login'</script>";
             }
         }

    }
    function main(){
         //unset($_SESSION['login']);
         if($this->session->get('login')!='ok'){
             echo "<script>alert('请先登录');location.href='index.php?d=admin&f=login'</script>";
         }else{
             $this->smarty->display('admin/main.html');
         }
    }
    //退出登录
    function loginout(){
         $this->session->clear();
        echo "<script>alert('退出成功');location.href='index.php?d=admin&f=login'</script>>";
    }
}