<?php
class publish extends indexMain{
    function init(){
////        //$this->smarty->display('index/wirte.html');
////        echo $_POST['oldtitle'];
////        echo $_POST['newtitle'];
////        echo $_POST['mcname'];
////        echo $_POST['text'];
      $mname=$this->session->get('mname');
        $db=new db('mshow');
        $result=$db->where("mcname='{$_POST['mcname']}'")->where("title='{$_POST['oldtitle']}'")->update("content='{$_POST['text']}',title='{$_POST['newtitle']}',mname='{$mname}'");
        echo '发表成功';

    }
}