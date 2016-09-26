<?php
namespace Home\Controller;
use Think\Controller;
use Org\Util\Rbac as RBAC;
use Gjc\YarClient;

class BaseController extends Controller {
    public $Yar = null;
    public function __construct(){
        parent::__construct();
        $this->_initialize();
    }
    /**
     * 初始化
     */
    function _initialize() {
        $this->Yar  = YarClient::get_instance ();

        $new=$this->Yar->newadd($_COOKIE['user_id']);
//        return $new;
        if($new===true){
            $this->display('show/index');
        }else{
            $this->display('user/login');
        }
        //此处进行子系统配置、底层方法的编码
        //例如统计流量、检测或写入cookie等过程编码
	}
}