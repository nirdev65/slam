<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
        // echo password_hash('admin@123',PASSWORD_BCRYPT);
        if($this->session->userdata('auth_id'))
            $this->load->admin_template('admin/dashboard');
        else
        $this->load->view('admin/login');
	}

    public function login() {
        if($this->session->userdata('auth_id'))
            redirect('admin');

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
        

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/login');
		} else {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('users',['email' => $email])->row();
			
			if(!$user) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}

            if(!password_verify($password,$user->password)) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}

			 $data = array(
					'auth_id' => $user->id,
					'email' => $user->email,
                );
	
			$this->session->set_userdata($data);
            redirect('admin');
		}		
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
