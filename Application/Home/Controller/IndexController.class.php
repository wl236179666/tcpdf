<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(IS_POST){
            $str = I('post.html');
            empty($str) && $this->error('请输入内容');
            //调用函数
            pdf($str);
        }else{
            $this -> display();
        }
    }
}