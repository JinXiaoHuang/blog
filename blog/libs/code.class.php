<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 14:58
 */
//验证码的内容
//验证码的长度，大小，颜色，位置
class code{
    public $width=200;
    public $height=400;
    public $type='png';
    public $code='2345678abcdefg';
    public $codeLen=4;
    public $codeUrl="static/fonts/ARCENA.ttf";
    public $image;
    public $current="";
    public $lineNum;
    public $pixNum;
    public $string;
    function createCanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->getColor('bg'));

    }
    //
    function createCon(){

    }
    //获取内容
    function getText(){
        $str='';
//        for($i=0;$i<$this->codeLen;$i++){
//            $num=mt_rand(0,strlen($this->code)-1);
//            $str.=$this->code[$num];
//        }

        for($i=0;$i<$this->codeLen;$i++){
            $letter=mt_rand(0,1)?strtoupper(substr($this->code,mt_rand(0,strlen($this->code)-1),1)):
                substr($this->code,mt_rand(0,strlen($this->code)-1),1);
            $str.=$letter;
            imagettftext($this->image,mt_rand(25,35),mt_rand(-10,10),mt_rand(10+$i*20,10+($i+1)*20),
                mt_rand(25,40),$this->getColor(),$this->codeUrl,$letter);
        }
        //$this->session->set('str',$str);
        $this->string=$str;


    }
    //获取颜色
    function getColor($type=''){
        $r=($type=='bg')?mt_rand(0,100):mt_rand(125,255);
        $g=($type=='bg')?mt_rand(0,100):mt_rand(125,255);
        $b=($type=='bg')?mt_rand(0,100):mt_rand(125,255);
        return imagecolorallocate($this->image,$r,$g,$b);
    }
    //画线
    function createLine(){
        for($i=0;$i<$this->lineNum;$i++){
              imageline($this->image,mt_rand(0,$this->width/2),mt_rand(0,$this->height/2)
                  ,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor('bg'));
        }
    }
    //画点
    function createPix(){
        for($i=0;$i<$this->pixNum;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height)
            ,$this->getColor('bg'));
        }
    }
    //输出
    function output(){
        header("content-type:image/".$this->type);
        //创建画布
        $this->createCanvas();
        //创建内容
        $this->getText();
        //创建干扰线
        $this->createLine();
        //创建点
        $this->createPix();
        imagepng($this->image);
        imagedestroy($this->image);
    }
}
//$obj=new code();
//$obj->width=150;
//$obj->height=50;
//$obj->lineNum=10;
//$obj->pixNum=150;
//$obj->codeURL="../static/fonts/ARCENA.ttf";
//$obj->output();
//echo $obj->string;

