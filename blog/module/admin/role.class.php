<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28
 * Time: 17:35
 */
class role extends main{
    function add(){
        $this->smarty->display("admin/addRole.html");
    }
    function addCon(){
        $rname=$_POST["rname"];
        $db=new db("role");
        $result=$db->where("rname='{$rname}'")->select();
        if(count($result)>0){
            echo "<script>alert('角色名已存在');location.href='index.php?d=admin&f=role&a=add'</script>";
            exit;
        }
        if($db->insert("rname='{$rname}'")>0){
            echo "<script>alert('添加成功');location.href='index.php?d=admin&f=role&a=add'</script>";
            exit;
        }
    }
}