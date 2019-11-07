<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

        public function __construct()
        {
            parent::__construct();

            // auto load model
            $this->load->model('auth_model');
        }

        public function index()
        {
            // memanggil fungsi cek  login
            $this->auth_model->check();
        }

        public function login()
        {  
                $this->auth_model->logged_in();
                $head['title'] = "Login Page";
                $head['loginPage'] = true;
                $this->load->view('include/header', $head);

                $this->load->view('include/login');
                $foot['showCopyright'] = false;
                $this->load->view('include/footer', $foot);
        }

        public function checkLogin()
        {
            // cek login
            $this->auth_model->logged_in();
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // memanggil fungsi cek login
            $this->auth_model->login($username, $password);
        }

        public function register()
        {
            // Halaman Register
                
            $this->auth_model->logged_in();
            $head['title'] = "Pendaftaran";
            $head['loginPage'] = true;
            $this->load->view('include/header', $head);

            $this->load->view('include/register');
            $foot['showCopyright'] = false;
            $this->load->view('include/footer', $foot);
        }

            public function newRegister()
    {
		$data = $this->input->post();
		if(true) {
			foreach($data as $item=>$value){
				if($value == ""){
					$err[] = ucfirst($item) . " tidak boleh kosong!";
				}
			}

			if(!isset($err))
			{
                $data = array_merge($data, ["tipe_user" => 'mahasiswa']);
                $this->user_model->insert($data);
				$msg = "Berhasil Mendaftar";
				$this->session->set_flashdata('msg', array('type' => 'success', 'message' => $msg));
				redirect('auth/login', 'refresh');
			}else {
				$msg = implode(" ", $err);
				$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
				redirect('auth/register', 'refresh');
			}
		}else {
			$msg = "Terjadi kesalahan";
			$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
			redirect('auth/register', 'refresh');
		}
    }

        public function logout()
        {
            // FUnsi Logout
            $this->session->sess_destroy();
            redirect('auth/login');
        }
}
