<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/30
 * Time: 11:20
 */
class page{
    public $total;//总条数
    public $pageNum=10;//每一页显示的条数
    function __construct(){
        $this->pages=ceil($this->total/$this->pageNum);

    }
    function show(){

    }
}