<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Validate if the session is active
 * @return boolean
 */
function is_logged() {
    $is_logged = false;
    if(isset($_SESSION['logged_in'])) {
        $is_logged = TRUE;
    }
    // @todo add some security for session control
    return $is_logged;
}

/**
 * Set a session variable with the configuration of the message and it shown
 * by the view message loaded in the template
 * 
 * @param type $type
 * @param type $title
 * @param type $content
 */
function set_message($type,$title,$content) {

    // Type could be info, success, warning, danger
    // @todo default if it is not any of these types
    $message['type'] = $type;
    $message['title'] = $title;
    $message['content'] = $content;
    $_SESSION['system_message'][] = $message;

}

/**
 * Prints parameter in money format
 * 
 * @param type $money
 */
function display_money($money) {
    
    setlocale(LC_MONETARY,"en_US");
    if (function_exists('money_format')){
        $smoney =  money_format('%n', $money);
    } else {
        $smoney = '$ ' . number_format($money, 2, '.', ',') ;
    }
            
    // @todo internationalize and parametricize the money format for display
    return sprintf("<span class=\"pull-right\">%s</span>",$smoney);
}