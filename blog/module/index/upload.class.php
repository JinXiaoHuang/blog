<?php
class upload extends indexMain{
    function init(){
        $file=$_FILES['img'];
//        $this->smarty->assign('file',$file);
        //print_r($file);
        $path='uploadfile';
        //echo file_exists($path);
        if(!file_exists($path)){
            mkdir($path);
        }
        $houzhui=explode('.',$file['name'])[1];
        $name=time().'.'.$houzhui;
        if(is_uploaded_file($file['tmp_name'])){
            $result=move_uploaded_file($file['tmp_name'],$path.'/'.$name);
            if($result){
                echo 'http://localhost/blog/uploadfile'.'/'.$name;
            }
        }
    }
    function add(){
        $photo=$_POST['imgurl'];
        if($photo==''){
            echo '请选择头像';
            exit;
        }
        $db=new db('member');
        $name=$this->session->get('mname');
        $result=$db->where("mname='{$name}'")->update("photo='{$photo}'");
        $result1=$db->where("mname='{$name}'")->select('photo');
        if($result){
            echo '头像更换成功';
        }
//        $this->smarty->assign("result",$result1[0]['photo']);
//        $this->smarty->display('index/person_set.html');
    }
    function saveBase(){
        $nichen=$_POST['nichen'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $db=new db('member');
        $name=$this->session->get('mname');
        $result=$db->where("mname='{$name}'")->update("nichen='{$nichen}',email='{$email}',phone='{$phone}'");
        if($result){
            echo '基本信息保存成功';
        }
    }
    function savePerson()
    {
        $sex = $_POST['sex'];
        $des = $_POST['descripsion'];
        $url = $_POST['url'];
        $db = new db('member');
        $name = $this->session->get('mname');
        $result = $db->where("mname='{$name}'")->update("sex='{$sex}',des='{$des}',url='{$url}'");
        if ($result) {
            echo '个人资料保存成功';
        }
    }
}

