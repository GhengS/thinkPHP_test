<?php

class EmptyAction extends Action{
    function __call($method, $parms)
    {
        $str404 = APP_PATH . "/go/public/index.html";
        $this->display($str404);
        // echo '运行到这里了';  
    }
}