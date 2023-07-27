<?php defined('BASEPATH') or exit('No direct script access allowed');

class Cookies extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_cookie_order()
    {
        $cookie_name = 'cook_order';
        $CI = get_instance();
        if (is_null(get_cookie($cookie_name))) {
            $val = array(
                'order' => null,
            );
            $cookie = array(
                'name'   => $cookie_name,
                'value'  => json_encode($val),
                'expire' => '36000'
            );
            $CI->input->set_cookie($cookie);
            return $val;
        } else {
            return json_decode(get_cookie($cookie_name), TRUE);
        }
    }

    function set_cookie_order($cookie_val)
    {
        $cookie_name = 'cook_order';
        $CI = get_instance();
        $cookie = array(
            'name'   => $cookie_name,
            'value'  => json_encode($cookie_val),
            'expire' => '36000'
        );
        $CI->input->set_cookie($cookie);
    }
}
