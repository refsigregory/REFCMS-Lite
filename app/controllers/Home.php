<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct ()
    {
        parent::__construct();
        $this->auth_model->logged_in();
        $this->load->model('jadwal_model');
        $this->load->model('kelas_model');
    }
	public function index()
	{
            
                $head['title'] = $this->config->item("site_name");
                $this->load->view('include/header', $head);

                $this->load->view('include/sidemenu');

                $data['name'] = $this->config->item("site_name");
                $this->load->view('home', $data);

                $foot['name'] = $data['name'];
                $this->load->view('include/footer', $foot);
    }
    
    public function mahasiswa()
	{
                $head['title'] = $this->config->item("site_name");
                $this->load->view('include/header', $head);

                $this->load->view('include/sidemenu');

                $data['name'] = $this->config->item("site_name");
                $data['mahasiswa'] = $this->user_model->getMahasiswa();
                $this->load->view('mahasiswa', $data);

                if(isset($_GET['tambah']))
                {
                    $this->load->view('modal_tambah_user.php');
                }

                if(isset($_GET['edit']))
                {
                    $data['edit'] = $this->user_model->getByID($_GET['edit'])[0];
                    $this->load->view('modal_ubah_user.php', $data);
                }

                if(isset($_GET['delete']))
                {
                    $this->user_model->delete($_GET['delete']);
                    redirect('home/mahasiswa');
                }

                $foot['name'] = $data['name'];
                $this->load->view('include/footer', $foot);
    }
    
    public function tambahUser()
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
				$msg = "Data User Berhasil Ditambah";
				$this->session->set_flashdata('msg', array('type' => 'success', 'message' => $msg));
				redirect('home/mahasiswa', 'refresh');
			}else {
				$msg = implode(" ", $err);
				$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
				redirect('home/mahasiswa', 'refresh');
			}
		}else {
			$msg = "Data Mahasiswa tidak ada";
			$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
			redirect('home/mahasiswa', 'refresh');
		}
    }
    public function editUser()
    {
		$data = $this->input->post();
		if(isset($data['id_user'])) {
            $id_user = $data['id_user'];
            unset($data['id_user']);
			foreach($data as $item=>$value){
				if($value == ""){
					$err[] = ucfirst($item) . " tidak boleh kosong!";
				}
			}

			if(!isset($err))
			{
                //$data = array_merge($data, ["tipe_user" => 'mahasiswa']);
                $this->user_model->update($id_user, $data);
				$msg = "Data User Berhasil Diubah";
				$this->session->set_flashdata('msg', array('type' => 'success', 'message' => $msg));
				redirect('home/mahasiswa', 'refresh');
			}else {
				$msg = implode(" ", $err);
				$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
				redirect('home/mahasiswa', 'refresh');
			}
		}else {
			$msg = "Data Mahasiswa tidak ada";
			$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
			redirect('home/mahasiswa', 'refresh');
		}
    }
    
    public function kelas()
	{
                $head['title'] = $this->config->item("site_name");
                $this->load->view('include/header', $head);

                $this->load->view('include/sidemenu');

                $data['name'] = $this->config->item("site_name");
                $data['kelas'] = $this->kelas_model->getAll();
                $data['jadwal'] = $this->jadwal_model->getAll();
                $this->load->view('kelas', $data);

                if(isset($_GET['tambah']))
                {
                    $this->load->view('modal_tambah_kelas.php');
                }

                if(isset($_GET['edit']))
                {
                    $data['edit'] = $this->user_model->getByID($_GET['edit'])[0];
                    $this->load->view('modal_ubah_kelas.php', $data);
                }

                if(isset($_GET['delete']))
                {
                    $this->user_model->delete($_GET['delete']);
                    redirect('home/kelas');
                }

                $foot['name'] = $data['name'];
                $this->load->view('include/footer', $foot);
    }

    public function tambahKelas()
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
                //$data = array_merge($data, ["tipe_user" => 'mahasiswa']);
                $this->kelas_model->insert($data);
				$msg = "Data User Berhasil Ditambah";
				$this->session->set_flashdata('msg', array('type' => 'success', 'message' => $msg));
				redirect('home/kelas', 'refresh');
			}else {
				$msg = implode(" ", $err);
				$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
				redirect('home/kelas', 'refresh');
			}
		}else {
			$msg = "Data Mahasiswa tidak ada";
			$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
			redirect('home/kelas', 'refresh');
		}
    }

    public function jadwal()
	{
                $head['title'] = $this->config->item("site_name");
                $this->load->view('include/header', $head);

                $this->load->view('include/sidemenu');

                $data['name'] = $this->config->item("site_name");
                $data['jadwal'] = $this->user_model->getJadwal();
                $this->load->view('jadwal', $data);

                if(isset($_GET['tambah']))
                {
                    $this->load->view('modal_tambah_jadwal.php');
                }

                if(isset($_GET['edit']))
                {
                    $data['edit'] = $this->user_model->getByID($_GET['edit'])[0];
                    $this->load->view('modal_ubah_jadwal.php', $data);
                }

                if(isset($_GET['delete']))
                {
                    $this->user_model->delete($_GET['delete']);
                    redirect('home/jadwal');
                }

                $foot['name'] = $data['name'];
                $this->load->view('include/footer', $foot);
    }

    public function tambahJadwal()
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
                //$data = array_merge($data);
                $this->jadwal_model->insert($data);
				$msg = "Data User Berhasil Ditambah";
				$this->session->set_flashdata('msg', array('type' => 'success', 'message' => $msg));
				redirect('home/jadwal', 'refresh');
			}else {
				$msg = implode(" ", $err);
				$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
				redirect('home/jadwal', 'refresh');
			}
		}else {
			$msg = "Data Mahasiswa tidak ada";
			$this->session->set_flashdata('msg', array('type' => 'error', 'message' => $msg));
			redirect('home/jadwal', 'refresh');
		}
    }

    public function peserta()
	{
                $head['title'] = $this->config->item("site_name");
                $this->load->view('include/header', $head);

                $this->load->view('include/sidemenu');

                $data['name'] = $this->config->item("site_name");
                $data['peserta'] = $this->user_model->getJadwal();
                $this->load->view('peserta', $data);

                if(isset($_GET['edit']))
                {
                    $data['edit'] = $this->user_model->getByID($_GET['edit'])[0];
                    $this->load->view('modal_ubah_peserta.php', $data);
                }

                if(isset($_GET['delete']))
                {
                    $this->user_model->delete($_GET['delete']);
                    redirect('home/peserta');
                }

                $foot['name'] = $data['name'];
                $this->load->view('include/footer', $foot);
    }
}
