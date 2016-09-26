<?php
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
 * 调试专用
 */
function p(){
    echo '<pre>';
    foreach (func_get_args() as $key => $value) {
        print_r($value);
        echo '<br />';
    }
    die();
}
