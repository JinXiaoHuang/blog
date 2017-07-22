<?php
if(!defined("MVC")){
    echo "非法侵入";
    exit();
}
class db{
    private $host;//地址
    private $user;//用户名
    private $pass;//密码
    private $database;//数据库
    private $port;//端口
    public $db;//连接的资源
    function __construct($table){
        $this->table=$table;
        $config=require APP_PATH."config.php";
        //echo $config;
        $this->host=$config["database"]["host"];
        $this->user=$config["database"]["user"];
        $this->pass=$config["database"]["pass"];
        $this->database=$config["database"]["database"];
        $this->port=$config["database"]["port"];
        $this->db=mysqli_connect($this->host,$this->user,$this->pass,$this->database,$this->port);
        if(!$this->db){
            echo mysqli_connect_error();
            exit();
        }
        $this->db->query("set names utf8");
        $this->opts["field"]="*";
        $this->opts["val"]=$this->opts["where"]=$this->opts["order"]=$this->opts["limit"]="";
    }
    function select(){
        $sql="select ".$this->opts["field"]." from ".$this->table." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];
       // echo $sql;
        $result=$this->db->query($sql);
        $array=array();
        while ($row=$result->fetch_assoc()){
            //var_dump($row);
            $array[]=$row;
        }
        return $array;
    }
    function setField($params="*"){
        $this->opts["field"]=$params;
        return $this;
    }
    function where($params){
        $this->opts["where"]="WHERE ".$params;
        return $this;
    }
    function order($params){
        $this->opts["order"]="ORDER BY ".$params;
        return $this;
    }
    function limit($params){
        $this->opts["limit"]="LIMIT ".$params;
        return $this;
    }
    function  del($params=""){
        $this->opts["where"]=(!empty($params))?" WHERE ".$params:$this->opts["where"];
        $sql="delete from ".$this->table." ".$this->opts["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function update($params=""){
        if(!empty($params)){
            $params=strtolower($params);
            $index=strrpos($params,"where");
            if($index>-1){
                if($index==0) {
                    $this->opts["field"]= $this->opts["field"];
                }else{
                    $this->opts["field"] = substr($params, 0, $index);
                }
                $this->opts["where"]=substr($params,$index);
            }else{
                $this->opts["field"]=$params;
                $this->opts["where"]= $this->opts["where"];
            }
        }
        $sql="update ".$this->table." set ".$this->opts["field"]." ".$this->opts["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function insert($params=""){
        if(!empty($params)){
            $arr=explode(",",$params);
            $keys="";
            $val="";
            foreach ($arr as $v){
                $arr1=explode("=",$v);
                $keys.=$arr1[0].",";
                $val.=$arr1[1].",";
            }
            $this->opts["field"]=substr($keys,0,-1);
            $this->opts["val"]=substr($val,0,-1);
        }
        $sql="insert into ".$this->table." (".$this->opts["field"].") values (".$this->opts["val"].")";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function setval($params){
        $this->opts["val"]=$params;
        return $this;
    }
    function join($tables){
        $sql="select ".$this->opts["field"]." from ".$tables." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];
        $result=$this->db->query($sql);
        $array=array();
        while ($row=$result->fetch_assoc()){
            $array[]=$row;
        }
        return $array;
    }
}
//header("Content-type:text/html;charset='utf-8'");
//if(!defined('MVC')){
//   echo '非法入侵！';
//   exit();
//}
//class db{
//   private $host;//地址
//   private $user;//数据库用户
//   private $pass;//数据库密码
//   private $database;//数据库
//   private $db;//连接的资源
//   private $port;//端口
//   private $opts=[];
//   //private $fileds="*";
//   function  __construct($table){
//       $this->table=$table;
//       //$config=include_once APP_PATH.'config.php';
//       $arr=array(
//           'database'=>array(
//               'host'=>'localhost',
//               'user'=>'root',
//               'pass'=>'',
//               'port'=>'3306',
//               'database'=>'user'
//           )
//       );
//       $config=$arr;
//       $this->host=$config['database']['host'];
//       $this->user=$config['database']['user'];
//       $this->pass=$config['database']['pass'];
//       $this->database=$config['database']['database'];
//       $this->port=$config['database']['port'];
//       //echo $this->host;
//       $this->db=new mysqli($this->host,$this->user,$this->pass,$this->database);
//       $this->db->query("set names utf8");
//       $this->opts['fileds']='*';
//       $this->opts['val']=$this->opts['where']=$this->opts['order']=$this->opts['limit']="";
//       if(mysqli_connect_errno()){
//           echo "连接出错";
//           exit();
//       }else{
//           echo "ok<br>";
//       }
//   }
//    //查询
//    public function select(){
//        $arr=array();
//        $sql="select ".$this->opts["fileds"]." from ".$this->table." "
//            .$this->opts['where']." ".$this->opts['order']." ".$this->opts['limit'];
//        //echo $sql;
//        $result=$this->db->query($sql);
//        while($row=$result->fetch_assoc()){
//            $arr[]=$row;
//        }
//        //var_dump($arr);
//        return $arr;
//    }
//    //删除
//    //delete form admin where id=1
//    public function del($val=''){
//       $this->opts['where']=(!empty($val))?" WHERE ".$val:$this->opts['where'];
//       $sql="delete from ".$this->table." ".$this->opts['where'];
//       $result=$this->db->query($sql);
//       return $this->db->affected_rows;
//    }
//    //修改
//    function update($val=""){
//        if(!empty($val)){
//            $val=strtolower($val);
//            $index=strrpos($val,"where");
//            if($index>-1){
//                if($index==0) {
//                    $this->opts["fileds"]= $this->opts["fileds"];
//                }else{
//                    $this->opts["fileds"] = substr($val, 0, $index);
//                }
//                $this->opts["where"]=substr($val,$index);
//            }else{
//                $this->opts["fileds"]=$val;
//                $this->opts["where"]= $this->opts["where"];
//            }
//        }
//        $sql="update ".$this->table." set ".$this->opts["fileds"]." ".$this->opts["where"];
//        $this->db->query($sql);
//        return $this->db->affected_rows;
//    }
//    //增加
//    public function insert($val=""){
//        if(!empty($val)){
//            $arr=explode(",",$val);
//            $keys="";
//            $vals="";
//            foreach ($arr as $v){
//                $arr1=explode("=",$v);
//                $keys.=$arr1[0].",";
//                $vals.=$arr1[1].",";
//            }
//            $this->opts["fileds"]=substr($keys,0,-1);
//            $this->opts["val"]=substr($vals,0,-1);
//        }
//        $sql="insert into ".$this->table." (".$this->opts["fileds"].") values (".$this->opts["val"].")";
//        $this->db->query($sql);
//        return $this->db->affected_rows;
//    }
//    //联表查询
//    function join($tables){
//        $sql="select ".$this->opts["fileds"]." from ".$tables." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];
//        echo $sql;
//        $result=$this->db->query($sql);
//        $array=array();
//        while ($row=$result->fetch_assoc()){
//            $array[]=$row;
//        }
//        return $array;
//    }
//    //定义查询条件
//    public function filed($val){
//        $this->fileds=$val;
//        return $this;
//    }
//    public function where($val){
//        $this->opts["where"]="WHERE ".$val;
//        return $this;
//    }
//    public function order($val){
//        $this->opts["order"]="ORDER BY ".$val;
//        return $this;
//    }
//    public function limit($val){
//        $this->opts["limit"]="LIMIT ".$val;
//        return $this;
//    }
//    public function setval($params){
//        $this->opts["val"]=$params;
//        return $this;
//    }
//}
