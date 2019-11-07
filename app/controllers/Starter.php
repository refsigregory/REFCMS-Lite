<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Starter extends CI_Controller {

	public function index()
	{
                $head['title'] = "Starter Page";
                $this->load->view('include/header', $head);

                $this->load->view('include/sidemenu');

                $data['name'] = $this->config->item("site_name");
                $this->load->view('starter', $data);

                $foot['name'] = $data['name'];
                $this->load->view('include/footer', $foot);
	}
}
