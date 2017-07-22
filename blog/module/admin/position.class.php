<?php
class position extends main{
    function add(){
        $this->smarty->display("admin/addPos.html");
    }
    function addCon(){
        $posname=$_POST["posname"];
        $db=new db("position");
        $result=$db->where("posname='{$posname}'")->select();
        if(count($result)>0){
            echo "<script>alert('推荐位已存在');location.href='index.php?d=admin&f=position&a=add'</script>";
            exit;
        }
        if($db->insert("posname='{$posname}'")>0){
            $this->jump("添加成功","index.php?d=admin&f=position&a=add");
        }
    }
}