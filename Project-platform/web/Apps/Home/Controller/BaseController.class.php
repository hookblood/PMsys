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

        $new=$this->Yar->newadd($_COOKIE['username']);
        $res=$this->Yar->newshow($_COOKIE['username']);
        if($new===true){
            $this->assign('privileges',$res);
            $this->display('show/index');
            exit;
        }
        else{
            $this->display('user/login');exit;
        }
        //此处进行子系统配置、底层方法的编码
        //例如统计流量、检测或写入cookie等过程编码
	}
}