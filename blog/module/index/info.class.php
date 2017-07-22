<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/29
 * Time: 9:19
 */class info extends indexMain{
     function add(){
         //$this->session->del('indexLogin');
         if(!$this->session->get('indexLogin')){
              echo "noLogined";
         }else{
             echo "ok";
         }
     }

}