<?php

namespace Home\Controller;
use Think\Controller;
use Home\Model;
use Think\Controller\YarController;


class IndexController extends BaseController {
    /**
     *
     *
     */
    public function index(){
        $this->display("reimburse/list");
    }

}