<?php
class mumber extends main{
    function show(){
        $db=new db("member");
        $result=$db->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("admin/showMember.html");
    }
    function del(){

    }
    function change(){

    }
}