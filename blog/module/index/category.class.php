<?php
class category extends indexMain{
    //查询展示文集
    function select(){
        //$mcname=$_POST['mcname'];
        $mname=$this->session->get('mname');
        $db=new db('mcategory');
        $result=$db->where("mname='{$mname}'")->order("mcid desc")->select();
        $this->smarty->assign("category",$result);
        $this->smarty->assign("res",'');
        $this->smarty->display('index/wirter.html');
    }
    //添加文集
    function addCon(){
        $mname=$this->session->get('mname');
        $mcname=$_POST['cname'];
        $db=new db('mcategory');
        if($db->insert("mcname='{$mcname}',mname='{$mname}'")){
            echo "<script>location.href='index.php?d=index&f=category&a=select';</script>";
        }
    }
    //修改文集
    function change(){
        $mcid=$_REQUEST['id'];
        $this->session->set('mcid',$mcid);
        $db=new db('mcategory');
        $result=$db->where("mcid={$mcid}")->select('mcname');
        $this->smarty->assign("result",$result);
        $this->smarty->display('index/changeCategory.html');

    }
    //修改文集名
    function changeCon(){
       // error_reporting(0);
        $mcid=$this->session->get('mcid');
        echo $mcname;
        $db=new db('mcategory');
        $result=$db->where("mcid={$mcid}")->update("mcname='{$mcname}'");
        if($result){
            echo '修改成功';
        }
        $this->session->del('mcid');
    }
    //删除文集
    function del(){
        //error_reporting(0);
        $mcid=$_REQUEST['id'];
        $db=new db('mcategory');
        $result=$db->where("mcid={$mcid}")->del();
        echo "<script>location.href='index.php?d=index&f=category&a=select';</script>";

    }
    //文章列表展示
    function show(){
        $mcid=$_POST['mcid'];
        $name=$this->session->get('mname');
        $db1=new db('mcategory');
        $db2=new db('mshow');
        $result1=$db1->where("mcname='{$mcid}'")->select();
        //var_dump($result1[0]['mcname']);
        $result2=$db2->where("mcname='{$result1[0]['mcname']}'")->order('msid desc')->select();
        $str='';
//        <h4 class="">'.$v['title'].'</h4>
        foreach($result2 as $v){
            $str.= '<li class="note-list" note_class="'.$v['mcname'].'" note_title="'.$v['title'].'" >
            <span class="glyphicon glyphicon-ok" style="position:absolute;left:20px;top:40px;font-size:18px;"></span>
            <a href="javascript:;">
                
                 <input class="note-title" disabled="disabled" type="text" value='.$v['title'].'>
            </a>
            <ul class="option_list_box">
                    <li><a href="index.php?d=index&f=category&a=change&id={$v[hh]}"><em class="glyphicon glyphicon-share-alt"></em>&nbsp;&nbsp;直接发布</a></li>
                    <li><a href="index.php?d=index&f=category&a=dellist&title='.$v['title'].'&mcname='.$v['mcname'].'&id='.$v['msid'].'"><em class="glyphicon glyphicon-trash"></em>&nbsp;&nbsp;删除文章</a></li>
            </ul>
            <i class="glyphicon glyphicon-cog"></i>
            <div class=""></div>
        </li>';
        };
        echo $str;
    }
    //添加文章列表
    function addTitle(){
        error_reporting(0);
        $mcid=$_POST['mcid'];
        $title=$_POST['title'];
        $db1=new db('mcategory');
        $db2=new db('mshow');
        $insert=$db2->insert("mcname='{$mcid}',title='{$title}'");
        $result1=$db1->where("mcname='{$mcid}'")->select();
        $result2=$db2->where("mcname='{$result1[0]['mcname']}'")->order('time desc')->select();
        $str='';
        //<h4>'.$v['title'].'</h4>
        foreach($result2 as $v){
            $str.= '<li class="note-list" note_class="'.$v['mcname'].'" note_title="'.$v['title'].'">
            <span class="glyphicon glyphicon-ok" style="position:absolute;left:20px;top:40px;font-size:18px;"></span>
            <a href="javascript:;" class="note-title">
                <input type="text" disabled="disabled" value='.$v['title'].' style="border: 0;background: none">
            </a>
            <ul class="option_list_box">
                    <li><a href="index.php?d=index&f=category&a=change&id={$v[hh]}"><em class="glyphicon glyphicon-share-alt"></em>&nbsp;&nbsp;直接发布</a></li>
                    <li><a href="index.php?d=index&f=category&a=dellist&title='.$v['title'].'&mcname='.$v['mcname'].'&id='.$v['msid'].'"><em class="glyphicon glyphicon-trash"></em>&nbsp;&nbsp;删除文章</a></li>
            </ul>
            <i class="glyphicon glyphicon-cog"></i>
            <div class=""></div>
        </li>';
        };
        echo $str;
    }
    //删除文章
    function dellist(){
       $title=$_REQUEST['title'];
       $mcname=$_REQUEST['mcname'];
       $msid=$_REQUEST['id'];
       $db=new db('mshow');
       $result=$db->where("title='{$title}' and mcname='$mcname' and msid='$msid'")->del();
       if($result){
           echo "<script>location.href='index.php?d=index&f=category&a=select';</script>";
       }

    }
    function all(){

    }

}