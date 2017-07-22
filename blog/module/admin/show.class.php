<?php
class show extends main{
    function add(){
        $db=new db("show");
        if(isset($_GET["status"])){
            $where="and show.status=".$_GET["status"];
            $where1="where show.status=".$_GET["status"];
        }else{
            $where="";
            $where1="";
        }
        $num=$db->select("select count(sid) as sid from show  ".$where1);
        $page=new page();
        $page->pageNum=5;
        $page->total=$num[0]["sid"];
        $str=$page->show();
        $limit=$page->limit;
        $this->smarty->assign("pages",$str);
        $sql="select show.* ,category.cname ,member.mname from show,category,member where show.cid=category.cid and show.mid=member.mid ".$where." order by show.stime desc ".$limit;
        $result=$db->select($sql);
        $this->smarty->assign("result",$result);
        $this->smarty->display("admin/addShow.html");
    }
    function edit(){
        $sid=$_GET["sid"];
        $mid=$_GET["mid"];
        $db=new db("show");
        $result=$db->setField("status")->where("sid={$sid}")->select();
        $this->smarty->assign("status",$result[0]["status"]);
        $this->smarty->assign("sid",$sid);
        $this->smarty->assign("mid",$mid);
        $this->smarty->display("editLists.html");
    }
    function editStatus(){
        $sid=$_POST["sid"];
        $mid=$_POST["mid"];
        $status=$_POST["status"];
        $db=new db("show");
        if($db->where("sid={$sid}")->update("status={$status}")>0){
            $db=new db("");
            $db->db->autocommit(false);
            $result1=$db->db->query("select * from show where status=4 and mid={$mid}");
            $num=mysqli_num_rows($result1);
            if($num>3){
                $result2=$db->db->query("update show set mrole=1 where mid={$mid}");
                $result3=!null;
            }else{
                $result2=$db->db->query("update show set mrole=0 where mid={$mid}");
                $result1=$db->db->query("select * from show where status=3 and mid={$mid}");
                $num= mysqli_num_rows($result1);
                if($num>3){
                    $result3=$db->db->query("update member set mrole=2 where mid={$mid}");
                }
                $result3=!null;
            }
            if($result1&&$result2&&$result3){
                $db->db->commit();
                $db->db->autocommit(true);
                $this->jump("修改成功","index.php?m=admin&f=lists&a=add");
            }else{
                $this->jump("修改失败","index.php?m=admin&f=lists&a=add");
            }
            /*
             *   0 正常
             *   1 禁止
             *   2 免审核
             * */
        }
    }
}