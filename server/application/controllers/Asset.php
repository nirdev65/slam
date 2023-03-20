<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('auth_id'))
            $this->load->view('admin/login');
    }

	public function index()
	{
        // echo password_hash('admin@123',PASSWORD_BCRYPT);
        $this->load->admin_template('admin/asset/list');        
	}

    public function add(){
        $this->load->admin_template('admin/asset/add');
    }

}