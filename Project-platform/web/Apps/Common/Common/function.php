<?php

/**
 * 提交表单
 * @param unknown $para_temp
 * @param unknown $method
 * @param unknown $button_name
 * @return string
 */
function buildSubmitForm($action, $para_temp, $method, $button_name) {
    $sHtml = "<form id='formsubmit' name='formsubmit' action='".$action."' method='".$method."'>";
    while (list ($key, $val) = each ($para_temp)) {
        $sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
    }
    //submit按钮控件请不要含有name属性
    $sHtml = $sHtml."<input type='submit'  value='".$button_name."' style='display:none;'></form>";
    $sHtml = $sHtml."<script>document.forms['formsubmit'].submit();</script>";
    return $sHtml;
}
/**
 * 是否是手机端访问
 * @return boolean
 */
function isMobileView() {
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
        return true;
    //此条摘自TPM智能切换模板引擎，适合TPM开发
    if(isset ($_SERVER['HTTP_CLIENT']) &&'PhoneClient'==$_SERVER['HTTP_CLIENT'])
        return true;
    //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
        //找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
    //判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array(
            'nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'
        );
        //从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }
    //协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT'])) {
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return true;
        }
    }
    return false;
}
function down_xls($data, $keynames, $name='dataxls',$style=array()) {
    $xls[] = "<html><meta http-equiv=content-type content=\"text/html; charset=UTF-8\"><body><table border='1' style='vnd.ms-excel.numberformat:@'>";
    $xls[] = "<tr><td>序号</td><td>" . implode("</td><td>", array_values($keynames)) . '</td></tr>';
    foreach($data As $o) {
        $line = array(++$index);
        foreach($keynames AS $k=>$v) {
            $line[] = $o[$k];
        }
        $xls[] = '<tr><td>'. implode("</td><td>", $line) . '</td></tr>';
    }
    $xls[] = '</table></body></html>';
    $xls = join("\r\n", $xls);
    header('Content-Disposition: attachment; filename="'.$name.'.xls"');
    die(mb_convert_encoding($xls,'UTF-8','UTF-8'));
}
/**
 * 构造动态送货时间
 * @param unknown $yjshipping_time
 * @param unknown $jd_yjshipping_time
 * @return unknown|string
 */
function get_shipping_time($yjshipping_time,$jd_yjshipping_time){
    if(empty($yjshipping_time)||empty($jd_yjshipping_time)){
        return $yjshipping_time;
    }
    $aWeek_jrd = array('日','一','二','三','四','五','六');
    $f = strpos($yjshipping_time,'(');
    $l = strpos($yjshipping_time,')');
    if(!$f&&!$l){
        return $yjshipping_time;
    }
    $str1 = substr($yjshipping_time, 0,$f+1);
    $str2 = substr($yjshipping_time, $l);
    $iTime_jrd = strtotime($jd_yjshipping_time);
    $sWeek_jrd = '周'.$aWeek_jrd[date('w', $iTime_jrd)];
    if(substr($jd_yjshipping_time,0,10)==date('Y-m-d')){
        $sWeek_jrd = '今日';
    }
    $nstr = $str1.$sWeek_jrd.$str2;
    return $nstr;
}
/**
 * 返回京东运单状态对应值
 * @param number $status
 * @return string
 */
function get_jd_deliveryorderstatusName($status = 10){
    switch ($status){
        case 10:
            return '待抢单';
            break;
        case 20:
            return '已抢单';
            break;
        case 30:
            return '已收单';
            break;
        case 40:
            return '已妥投';
            break;
        case 25:
            return '取货失败';
            break;
        case 35:
            return '投递失败';
            break;
        case 50:
            return '已取消';
            break;
        case 60:
            return '已完成';
            break;   
        case 70:
            return '异常';
            break;
    }
}
function get_jd_failReasonByCode($code = ''){
    switch ($code){
        case 'DTF_1':
            return '地址错误';
            break;
        case 'DTF_2':
            return '无法联系收货人';
            break;
        case 'DTF_3':
            return '客户改期';
            break;
        case 'DTF_4':
            return '客户无故拒收';
            break;
        case 'DTF_5':
            return '商品质量问题';
            break;
        case 'DTF_6':
            return '错货、少货';
            break;
        case 'DTF_7':
            return '配送超时';
            break;
        case 'DTF_8':
            return '其他';
            break;
        case 'DTF_9':
            return '恶意订单';
            break;
        case 'GTF_1':
            return '门店商品缺货';
            break;
        case 'GTF_2':
            return '商家无货';
            break;
        case 'GTF_3':
            return '商品质量问题';
            break;
        case 'GTF_4':
            return '其他';
            break;
        case 'GTF_5':
            return '门店未营业';
            break;
        case 'GTF_6':
            return '等待时间长';
            break;
        case 'GTF_7':
            return '恶意订单';
            break;
        default:
            return '';
            break;
    }
}
function export_pdf($header=array(),$data=array(),$fileName='Newfile'){
		set_time_limit(120);
		vendor("tcpdf.tcpdf");
		require_cache(VENDOR_PATH . 'tcpdf/examples/lang/eng.php');
		$pdf = new \TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);//新建pdf文件
		 //设置文件信息
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor("admin");
		$pdf->SetTitle("pdf");
		$pdf->SetSubject('PDF');
		$pdf->SetKeywords('PDF');		
        //设置页眉页脚
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'OverStudy','',array(66,66,66), array(0,0,0));
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);//设置默认等宽字体
        $pdf->SetMargins(PDF_MARGIN_LEFT, 24, PDF_MARGIN_RIGHT);//设置页面边幅
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);//设置自动分页符
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->setLanguageArray($l);
        $pdf->SetFont('droidsansfallback', '');
        $pdf->AddPage();
        $pdf->SetFillColor(245, 245, 245);
        $pdf->SetTextColor(0);
        $pdf->SetDrawColor(66, 66, 66);
        $pdf->SetLineWidth(0.3);
        $pdf->SetFont('droidsansfallback', '',9);
        $pdf->writeHTML("<div><label>项目名称：<strong>".$data['project_name']."</strong></label><br/></div>");
        $pdf->Ln();
        if($data['file1']){
        $pdf->writeHTML("<div><label>川大英语成绩：</label><br/></div>");
        $arr = getimagesize($data['file1']);
        $imgwidth1=190;
        if($arr[0]<190){
          $imgwidth1='';
        }
        $pdf->Image($data['file1'],'', '', $imgwidth1, '', '', WebSite().'/'.$data['file1'], '', true, 300, '', false, false, 1, false, false, false);
        $pdf->Ln();
        }
        if($data['file2']){
        $pdf->writeHTML("<div><label>川大在校证明：</label><br/></div>", true, false, true, false, '');
        $arr = getimagesize($data['file2']);
        $imgwidth2=190;
        if($arr[0]<190){
          $imgwidth2='';
        }
        $pdf->Image($data['file2'],'', '', $imgwidth2, '', '', WebSite().'/'.$data['file2'], '', true, 300, '', false, false, 1, false, false, false);
        $pdf->Ln();
        }
        if($data['file3']){
        $pdf->writeHTML("<div><label>托福或者雅思成绩：</label><br/></div>", true, false, true, false, '');  
        $arr = getimagesize($data['file3']);
        $imgwidth3=190;
        if($arr[0]<190){
          $imgwidth3='';
        }        
        $pdf->Image($data['file3'],'', '', $imgwidth3, '', '', WebSite().'/'.$data['file3'], '', true, 300, '', false, false, 1, false, false, false);
        $pdf->Ln();
        }
        if($data['file4']){
        $pdf->writeHTML("<div><label>推荐信：</label><br/></div>", true, false, true, false, '');  
        $arr = getimagesize($data['file4']);
        $imgwidth4=190;
        if($arr[0]<190){
          $imgwidth4='';
        }   
        $pdf->Image($data['file4'],'', '', $imgwidth4, '', '', WebSite().'/'.$data['file4'], '', true, 300, '', false, false, 1, false, false, false);
        $pdf->Ln();
        }
        if($data['file5']){
        $pdf->writeHTML("<div><label>外方官网申请表：</label><br/></div>", true, false, true, false, '');  
        $arr = getimagesize($data['file5']);
        $imgwidth5=190;
        if($arr[0]<190){
          $imgwidth5='';
        }   
        $pdf->Image($data['file5'],'', '', $imgwidth5, '', '', WebSite().'/'.$data['file5'], '', true, 300, '', false, false, 1, false, false, false);
        $pdf->Ln();
        }
        $showType= 'F';//PDF输出的方式。I，在浏览器中打开；D，以文件形式下载；F，保存到服务器中；S，以字符串形式输出；E：以邮件的附件输出。
        $filePath = $_SERVER['DOCUMENT_ROOT']."/Upload/SendPdf/".$fileName.".pdf";
        $pdf->Output($filePath,$showType);
        //exit;
        return '/Upload/SendPdf/'.$fileName.'.pdf';
}
/**
 * 地址转经纬度
 * @param unknown $address
 * @return NULL|string
 */
function geocoder_address($address){
    if(empty($address)){
        return null;
    }
    $address = str_replace(' ','',$address);
    $url = "http://apis.map.qq.com/ws/geocoder/v1/?key=NIKBZ-OXRCV-PBUPS-UTV2S-FWOBO-JLB5F&output=json&address=".$address;
    $res = file_get_contents($url);
    $result = json_decode($res);
    if($result->status==0){
        $data = $result->result;
        $location = $data->location;
        $location = $location->lat.','.$location->lng;
        return $location;
    }else{
        return null;
    }
}
/**
 * 计算积分的价值（能抵多少钱）
 * @param   int     $integral   积分
 * @return  float   积分价值
 */
function value_of_score($score){
    $scale = floatval($GLOBALS['CONFIG']['user_score_scale']);
    return $scale > 0 ? round(($score / 100) * $scale, 2) : 0;
}
/**
 * 计算指定的金额需要多少积分才能兑换
 *
 * @access  public
 * @param   integer $value  金额
 * @return  void
 */
function score_of_value($value){
    $scale = floatval($GLOBALS['CONFIG']['user_score_scale']);
    return $scale > 0 ? round($value / $scale * 100) : 0;
}
/**
 * 根据订单金额计算赠送多少积分
 * @param integer $value
 * @return number
 */
function send_score_of_value($value){
    $scale = floatval($GLOBALS['CONFIG']['user_score_send']);
    return $scale > 0 ? intval($value * $scale / 100) : 0;
}
/**
 * GET
 * @param string $url
 * @return NULL|mixed
 */
function curl_get($url){
    if(empty($url)){
        return null;
    }
    //初始化
    $ch = curl_init();
    //设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    //执行并获取HTML文档内容
    $output = curl_exec($ch);
    //释放curl句柄
    curl_close($ch);
    $res = json_decode($output);
    return $res;
}
/**
 * POST
 * @param string $url
 * @param array $data
 * @return NULL|mixed
 */
function curl_post($url,$data){
    if(empty($url)||empty($data)){
        return null;
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //post数据
    curl_setopt($ch, CURLOPT_POST, 1);
    //post的变量
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $output = curl_exec($ch);
    //释放curl句柄
    curl_close($ch);
    $res = json_decode($output);
    return $res;
}
/**
 * 是否是邮箱
 * @param unknown $email
 * @return boolean
 */
function is_email($email) {
    return strlen ( $email ) > 6 && preg_match ( "/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/", $email );
}
/**
 * 是否是手机
 * @param unknown $mobile
 * @return number
 */
function is_mobile($mobile) {
    return preg_match ( "/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|18[0-9]{9}$/", $mobile );
}
/**
 * 系统加密方法
 * @param string $data 要加密的字符串
 * @param string $key  加密密钥
 * @param int $expire  过期时间 (单位:秒)
 * @return string
 */
function think_ucenter_encrypt($data, $key, $expire = 0) {
    $key  = md5($key);
    $data = base64_encode($data);
    $x    = 0;
    $len  = strlen($data);
    $l    = strlen($key);
    $char =  '';
    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) $x=0;
        $char  .= substr($key, $x, 1);
        $x++;
    }
    $str = sprintf('%010d', $expire ? $expire + time() : 0);
    for ($i = 0; $i < $len; $i++) {
        $str .= chr(ord(substr($data,$i,1)) + (ord(substr($char,$i,1)))%256);
    }
    return str_replace('=', '', base64_encode($str));
}

/**
 * 系统解密方法
 * @param string $data 要解密的字符串 （必须是think_encrypt方法加密的字符串）
 * @param string $key  加密密钥
 * @return string
 */
function think_ucenter_decrypt($data, $key){
    $key    = md5($key);
    $x      = 0;
    $data   = base64_decode($data);
    $expire = substr($data, 0, 10);
    $data   = substr($data, 10);
    if($expire > 0 && $expire < time()) {
        return '';
    }
    $len  = strlen($data);
    $l    = strlen($key);
    $char = $str = '';
    for ($i = 0; $i < $len; $i++) {
        if ($x == $l) $x = 0;
        $char  .= substr($key, $x, 1);
        $x++;
    }
    for ($i = 0; $i < $len; $i++) {
        if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1))) {
            $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
        }else{
            $str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
        }
    }
    return base64_decode($str);
}
/**
 * 循环删除指定目录下的文件及文件夹
 * @param string $dirpath 文件夹路径
 */
function QNHDelDir($dirpath){
    $dh=opendir($dirpath);
    while (($file=readdir($dh))!==false) {
        if($file!="." && $file!="..") {
            $fullpath=$dirpath."/".$file;
            if(!is_dir($fullpath)) {
                unlink($fullpath);
            } else {
                QNHDelDir($fullpath);
                rmdir($fullpath);
            }
        }
    }
    closedir($dh);
    $isEmpty = 1;
    $dh=opendir($dirpath);
    while (($file=readdir($dh))!== false) {
        if($file!="." && $file!="..") {
            $isEmpty = 0;
            break;
        }
    }
    return $isEmpty;
}

function list_sort_by($list, $field, $sortby = 'asc')
{
    if (is_array($list))
    {
        $refer = $resultSet = array();
        foreach ($list as $i => $data)
        {
            $refer[$i] = &$data[$field];
        }
        switch ($sortby)
        {
            case 'asc': // 正向排序
                asort($refer);
                break;
            case 'desc': // 逆向排序
                arsort($refer);
                break;
            case 'nat': // 自然排序
                natcasesort($refer);
                break;
        }
        foreach ($refer as $key => $val)
        {
            $resultSet[] = &$list[$key];
        }
        return $resultSet;
    }
    return false;
}

/**
 * 店铺排序
 * Enter description here ...
 * @param  $list
 * @param  $field
 * @param  $sortby
 * @param  $isin 是否在配送范围5公里之内
 * @param  $status 营业状态：1营业  0休息
 */

function list_sort_by_business($list,$field,$sortby = 'asc',$isin,$status){
	if (is_array($list))
    {
        $refer = $resultSet = array();
        foreach ($list as $i => $data)
        {
        	if($isin == 1 && $status == 1){
        		if($data['shop_business'] == 1 && $data['distance'] <=5000){
        			$refer[$i] = &$data[$field];
        		}
        	}
        	else if($isin == 1 && $status == 0){
        		if($data['shop_business'] != 1 && $data['distance'] <=5000){
        			$refer[$i] = &$data[$field];
        		}
        	}
        	else{
        		if($data['distance'] >5000){
        			$refer[$i] = &$data[$field];
        		}
        	}
        }
        switch ($sortby)
        {
            case 'asc': // 正向排序
                asort($refer);
                break;
            case 'desc': // 逆向排序
                arsort($refer);
                break;
            case 'nat': // 自然排序
                natcasesort($refer);
                break;
        }
        foreach ($refer as $key => $val)
        {
            $resultSet[] = &$list[$key];
        }
        return $resultSet;
    }
    return false;
}
/**
 * 获取当前页面完整URL地址
 */
function WebUrl() {
    $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
    $php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
    $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
    $relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
    return $sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
}
/**
 * 获取网站域名
 * @return string
 */
function WebSite(){
    $server = $_SERVER['HTTP_HOST'];
    $http = is_ssl()?'https://':'http://';
    return $http.$server.__ROOT__;
}

/**
 * 邮件发送函数
 * @param string to      要发送的邮箱地址
 * @param string subject 邮件标题
 * @param string content 邮件内容
 * @return array
 */
function SendMail($to, $subject, $content, $attachment = null) {
    require_cache(VENDOR_PATH."PHPMailer/class.smtp.php");
    require_cache(VENDOR_PATH."PHPMailer/class.phpmailer.php");
    $mail = new PHPMailer();
    // 装配邮件服务器
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = $GLOBALS['CONFIG']['mailSmtp'];
    $mail->SMTPAuth = $GLOBALS['CONFIG']['mailAuth'];
    $mail->Username = $GLOBALS['CONFIG']['mailUserName'];
    $mail->Password = $GLOBALS['CONFIG']['mailPassword'];
    $mail->CharSet = 'utf-8';
    // 装配邮件头信息
    $mail->From = $GLOBALS['CONFIG']['mailUserName'];
    if(is_array($to)){
        foreach ($to as $t){
            $mail->AddAddress($t);
        }
    }else{
        $mail->AddAddress($to);
    }
    $mail->FromName = $GLOBALS['CONFIG']['mailSendTitle'];
    $mail->IsHTML(true);
    // 装配邮件正文信息
    $mail->Subject = $subject;
    $mail->Body = $content;
    // 添加附件
    if(is_array($attachment)){ // 添加附件
        foreach ($attachment as $file){
            is_file($file) && $mail->AddAttachment($file);
        }
    }else{
        is_file($attachment) && $mail->AddAttachment($attachment);
    }
    // 发送邮件
    $rs =array();
    if (!$mail->Send()) {
        $rs['err'] = -1;
        $rs['msg'] = $mail->ErrorInfo;
        return $rs;
    } else {
        $rs['err'] = 0;
        $rs['msg'] = '发送成功';
        return $rs;
    }
}

/*日志输出*/
function writelog($str,$filename='log')
{
    $file = 'logs/'.$filename.'.txt';
    $open=fopen($file,"a");
    fwrite($open,$str."\r\n");
    fclose($open);
}

function p(){
    header('Content-Type:application/json; charset=utf-8');
    //echo '<pre>';
    foreach (func_get_args() as $key => $value) {
        # code...
        print_r($value);
        //echo '<br />';
    }
    die();
}
function subtext($text, $length)
{
    if(mb_strlen($text, 'utf8') > $length) 
    return mb_substr($text, 0, $length, 'utf8').'...';
    return $text;
}