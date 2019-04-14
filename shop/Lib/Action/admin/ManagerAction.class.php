<?php
class ManagerAction extends action{
    
    function login(){
        echo "管理员登录了";
        $this->display();
        // $this->dispatchJump();
    }
    function sanpin(){
        $this->display();
    }
    // oop中,在对象没有当前方法的情况下,自动调用 __call()函数,提供一个这样的时机
    function __call($method, $args)
    {
        // echo "您调用的方法不存在!!!";
        $test = 123;
        // $str404 = include APP_PATH."/go/public/index.html";
        $str404 = APP_PATH."/go/public/index.html";
        $this->display($str404);

    }
    function head(){
        $this->display();
    }
    function left(){
        $this->display();
    }
    function right(){
        $this->display();
    }
}