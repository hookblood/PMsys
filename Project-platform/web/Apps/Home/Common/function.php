<?php

//递归加载分类
function Load_Re($datas, $pid)
{
	$list = '';
	foreach($datas as $key => $value)
	{
	   if($value['parent_id'] == $pid)
	   {         
	   	if(empty(Load_Re($datas, $value['cat_id']))){
	   		$value['cat_name'] = $value['cat_name'];
	   	}
	   	else{
	   	   unset($value['url']);
		   $value['submenu'] = Load_Re($datas, $value['cat_id']);
	   	}
	   	 $list[] = $value;
	   }
	}
	return $list;
}
/**
 * 截取中文字符串
 */
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true)  
{  
  if(function_exists("mb_substr")){  
              if($suffix)  
              return mb_substr($str, $start, $length, $charset)."...";  
              else
                   return mb_substr($str, $start, $length, $charset);  
  }  
  elseif(function_exists('iconv_substr')) {  
             if($suffix)  
                  return iconv_substr($str,$start,$length,$charset)."...";  
             else
                  return iconv_substr($str,$start,$length,$charset);  
   }  
   $re['utf-8']  = "/[x01-x7f]|[xc2-xdf][x80-xbf]|[xe0-xef][x80-xbf]{2}|[xf0-xff][x80-xbf]{3}/";  
   $re['gb2312'] = "/[x01-x7f]|[xb0-xf7][xa0-xfe]/";  
   $re['gbk']    = "/[x01-x7f]|[x81-xfe][x40-xfe]/";  
   $re['big5']   = "/[x01-x7f]|[x81-xfe]([x40-x7e]|xa1-xfe])/";  
   preg_match_all($re[$charset], $str, $match);  
   $slice = join("",array_slice($match[0], $start, $length));  
   if($suffix) return $slice."…";  
   return $slice;
}

/**
 * 根据地区的did查找所有后代地区信息(第三种方法)
 * @param $did  当前地区的did
 * @return array  后代地区ID的数组集
 */
function getChildId($did){
    $model=M('District');
    $res=$model->field('did')->where(array('pid'=>$did))->select();
    $return_array=array_column($res,'did');
    if($res) {
        foreach ($res as $v) {
            $child_array=getChildId($v['did']);
            if($child_array)
                $return_array=array_merge($return_array,$child_array);
        }
    }
    unset($model);
    return $return_array;
}