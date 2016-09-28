<?php
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
?>