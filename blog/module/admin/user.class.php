<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28
 * Time: 15:54
 */
class user extends main{
    function __construct(){
        parent::__construct();
        $this->db=new db('user');
    }
    function add(){
        if($this->session->get('rid')!=1){
           echo "<script>alert('没有权限');</script>";
           exit;
        }
        $this->db->table="role";
        $result=$this->db->select();
        $this->smarty->assign("roles",$result);
        $this->smarty->display("admin/addUser.html");
    }
    function addCon(){
        if($this->session->get("rid")!=1){
            echo "<script>alert('没有权限');</script>";
            exit;
        }
        $uname=$_POST["uname"];
        $upass=md5($_POST["upass"]);
        $rid=$_POST["rid"];
        $nichen=$_POST["nichen"];
        $result=$this->db->where("uname='{$uname}'")->select();
        if(count($result)>0){
            echo "<script>alert('用户名存在');location.href='index.php?d=admin&f=user&a=add';</script>";
            exit;
        }
        if($this->db->insert("uname='{$uname}',upass='{$upass}',rid='{$rid}',nichen='{$nichen}'")>0){
            echo "<script>alert('添加成功');location.href='index.php?d=admin&f=user&a=add'</script>";
            exit;
        }
    }
}