<?php
header("Content-Type:text/html;charset=utf8");
if(!defined('MVC')){
    echo '非法入侵！';
    exit();
}
class index extends indexMain{
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("mname",$this->session->get("mname"));
        $db=new db('member');
        $name=$this->session->get('mname');
        $result1=$db->where("mname='{$name}'")->select('photo');
        $this->smarty->assign('photo',$result1);
        $this->smarty->display('index/index.html');
    }
    function write(){
        $this->smarty->display('index/wirter.html');
    }
}
?>