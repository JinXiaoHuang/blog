<?php
class person extends indexMain{
    function init(){

    }
    //个人主页
    function indexPage(){
        $name=$this->session->get('mname');
        $db1=new db('member');
        $result1=$db1->where("mname='{$name}'")->select('photo');
        $db2=new db('mshow');
        $result2=$db2->where("mname='{$name}'")->order('time desc')->select();
        $this->smarty->assign('photo',$result1);
        $this->smarty->assign('res',$result2);
        $this->smarty->display('index/person_indexPage.html');

    }
    //设置
    function seting(){
        $db=new db('member');
        $name=$this->session->get('mname');
        $result1=$db->where("mname='{$name}'")->select('photo');
        $this->smarty->assign('photo',$result1);
        $this->smarty->assign('mname',$this->session->get("mname"));
        $this->smarty->display('index/person_set.html');
    }
    //个人文章详情
    function showArtic(){
        $msid=$_REQUEST['msid'];
        $this->session->set("msid",$msid);
        $db=new db('member');
        $db2=new db('mshow');
        $db3=new db('comment');
        $name=$this->session->get('mname');
        $result1=$db->where("mname='{$name}'")->select();
        $result2=$db2->where("msid={$msid}")->select();
        //查询评论
        $result=$db3->where("msid={$msid}")->order('time desc')->select();
        $this->smarty->assign('comment',$result);
        $this->smarty->assign('photo',$result1);
        $this->smarty->assign('res',$result2);
        $this->smarty->assign('loginName',$name);
        $this->smarty->display('index/showPersonArtic.html');

    }
    //评论
    function comment(){
        //查询评论

        $msid=$this->session->get('msid');
       $content=$_POST['content'];
       $mname=$this->session->get('mname');
       $db=new db('comment');
       $db2=new db('mshow');
       $db3=new db('member');
       $res2=$db2->where("msid={$msid}")->select('mname');
       $res3=$db3->where("mname='{$res2[0]['mname']}'")->select('nichen');
        $res4=$db3->where("mname='{$mname}'")->select('nichen');

//        echo $res3[0]['nichen'];
       $res=$db->insert("msid={$msid},
       comcontent='{$content}',compeople='{$res4[0]['nichen']}',
       comauthor='{$res3[0]['nichen']}'");
       $count=$db->where("msid={$msid}")->select();
       if(count($count)>-1){
           echo count($count);
       }
    }
    //删除评论
    function delComment(){
        $msid=$this->session->get('msid');
       $comid=$_POST['comid'];
       $db=new db('comment');
       $res=$db->where("comid={$comid}")->del();
       $count=$db->where("msid={$msid}")->select();
       if(count($count)>-1){
           echo count($count);
       }
    }

}