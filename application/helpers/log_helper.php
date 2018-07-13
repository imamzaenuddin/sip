<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function helper_log($tipe = "", $str = ""){
    $CI =& get_instance();
    if (strtolower($tipe) == "login"){
        $log_tipe   = 0;
    }
    elseif(strtolower($tipe) == "logout")
    {
        $log_tipe   = 1;
    }
    elseif(strtolower($tipe) == "add"){
        $log_tipe   = 2;
    }
    elseif(strtolower($tipe) == "edit"){
        $log_tipe  = 3;
    }
    else{
        $log_tipe  = 4;
    }
 
    $param['log_user']      = $CI->session->userdata('Login');
    $param['log_tipe']      = $log_tipe;
    $param['log_desc']      = $str;
    $CI->m_crud->save_log($param);
}