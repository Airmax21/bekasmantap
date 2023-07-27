<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    var $cookie;
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
        $this->load->model(array(
            'cookies'
        ));
        $this->cookie = $this->cookies->get_cookie_order();
    }

    public function index()
    {
        $header['home'] = 'Dashboard';
        $header['css'] = array('home');
        $this->load->view('app/header', $header);
        $this->load->view('home');
    }
    public function aboutus()
    {
        $header['home'] = 'Dashboard';
        $header['css'] = array();
        $this->load->view('app/header', $header);
        $this->load->view('aboutus');
    }
    public function catalog()
    {
        $header['home'] = 'Dashboard';
        $header['css'] = array();
        $this->load->view('app/header', $header);
        $this->load->view('catalog');
    }
    public function service()
    {
        $header['home'] = 'Dashboard';
        $header['css'] = array();
        $this->load->view('app/header', $header);
        $this->load->view('service');
    }
    public function cart()
    {
        $header['home'] = 'Dashboard';
        $header['css'] = array();
        $data['cookies'] = $this->cookie;
        $this->load->view('app/header', $header);
        $this->load->view('cart',$data);
    }
    public function ajax()
    {
        $data = $this->input->post();
        if ($data['view_name'] == 'semua') {
            echo json_encode(array(
                'html' => $this->load->view('dashboard/semua', $data, true)
            ));
        }
    }
    public function pesan()
    {
        $data = $this->input->post();
        $this->cookie['order'][] =$data['nama'];
        $this->cookies->set_cookie_order($this->cookie);
        echo json_encode($this->cookie);
    }
    public function clear()
    {
        $this->cookie['order'] = array();
        $this->cookies->set_cookie_order($this->cookie);
        echo json_encode($this->cookie);
    }
}
