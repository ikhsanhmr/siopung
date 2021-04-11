<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class pmis extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'date_helper', 'tgl_indonesia_helper'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model(array('pmis_model'));
        $this->load->model(array('activity_model'));
       
    }

	//Login        
    public function login() {
        $this->load->view('pmis/login');
    }
	
	 //Login
    public function do_login() {
		
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
		$cek = $this->pmis_model->cek_user($username, $password);
		//print_r($cek); exit;
		$status=$cek['status'];
		$id_upp=$cek['id_upp'];
		$nama_admin=$cek['nama_admin'];
		$last_login= date('Y-m-d H:i:s'); 
		$ip_last_login = $_SERVER['REMOTE_ADDR'];
		$browser_last_login = $_SERVER['HTTP_USER_AGENT'];
		//exit;
		
		$this->session->set_userdata('username', $username);
		$this->session->set_userdata('password', $password);
		$this->session->set_userdata('status', $status);
		$this->session->set_userdata('nama_admin', $nama_admin);
		$this->session->set_userdata('id_upp', $id_upp);
		//print_r ($_POST); print_r ($this->session->userdata); exit;
		
		
		
		if ($status ==2 && $status != ''){
		$update_last_login = $this->pmis_model->last_login($last_login, $id_upp);
		$update_ip_last_login = $this->pmis_model->ip_last_login($ip_last_login, $id_upp);
		$update_browser = $this->pmis_model->browser_last_login($browser_last_login, $id_upp);
			$this->session->set_userdata('admin', TRUE);
			echo "<script>alert('Anda Berhasil Login dengan Hak Akses Administrator SI OPUNG')</script>";
			
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/index>";
		} else if ($status == 3 && $status != ''){
		$update_last_login = $this->pmis_model->last_login($last_login, $id_upp);
		$update_ip_last_login = $this->pmis_model->ip_last_login($ip_last_login, $id_upp);
		$update_browser = $this->pmis_model->browser_last_login($browser_last_login, $id_upp);
			$this->session->set_userdata('unit', TRUE);

			echo "<script>alert('Anda Berhasil Login dengan Hak Akses Administrator Unit')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/index>";

		} else if ($id_upp == 10 && $status == 4){
		$update_last_login = $this->pmis_model->last_login($last_login, $id_upp);
		$update_ip_last_login = $this->pmis_model->ip_last_login($ip_last_login, $id_upp);
		$update_browser = $this->pmis_model->browser_last_login($browser_last_login, $id_upp);
			$this->session->set_userdata('gm', TRUE);

			echo "<script>alert('Anda Berhasil Login dengan Hak Akses General Manager')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/index>";

		} else if ($id_upp == 13 && $status == 4){
		$update_last_login = $this->pmis_model->last_login($last_login, $id_upp);
		$update_ip_last_login = $this->pmis_model->ip_last_login($ip_last_login, $id_upp);
		$update_browser = $this->pmis_model->browser_last_login($browser_last_login, $id_upp);
			$this->session->set_userdata('diregsum', TRUE);

			echo "<script>alert('Anda Berhasil Login dengan Hak Akses Manager Operasi Konstruksi I')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/index>";

		} else if ($id_upp == 14 && $status == 4){
		$update_last_login = $this->pmis_model->last_login($last_login, $id_upp);
		$update_ip_last_login = $this->pmis_model->ip_last_login($ip_last_login, $id_upp);
		$update_browser = $this->pmis_model->browser_last_login($browser_last_login, $id_upp);
			$this->session->set_userdata('mok2', TRUE);

			echo "<script>alert('Anda Berhasil Login dengan Hak Akses Manager Operasi Konstruksi II')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/index>";

		} else if ($id_upp == 15 && $status == 4){
		$update_last_login = $this->pmis_model->last_login($last_login, $id_upp);
		$update_ip_last_login = $this->pmis_model->ip_last_login($ip_last_login, $id_upp);
		$update_browser = $this->pmis_model->browser_last_login($browser_last_login, $id_upp);
			$this->session->set_userdata('dirutpln', TRUE);

			echo "<script>alert('Anda Berhasil Login dengan Hak Akses Direktur Utama PLN')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/index>";

		} else if ($id_upp == 16 && $status == 4){
		$update_last_login = $this->pmis_model->last_login($last_login, $id_upp);
		$update_ip_last_login = $this->pmis_model->ip_last_login($ip_last_login, $id_upp);
		$update_browser = $this->pmis_model->browser_last_login($browser_last_login, $id_upp);
			$this->session->set_userdata('mskonstruksi', TRUE);

			echo "<script>alert('Anda Berhasil Login dengan Hak Akses Manager Senior Konstruksi')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/index>";

		} else if ($id_upp == 17 && $status == 4){
		$update_last_login = $this->pmis_model->last_login($last_login, $id_upp);
		$update_ip_last_login = $this->pmis_model->ip_last_login($ip_last_login, $id_upp);
		$update_browser = $this->pmis_model->browser_last_login($browser_last_login, $id_upp);
			$this->session->set_userdata('dirregsum', TRUE);

			echo "<script>alert('Anda Berhasil Login dengan Hak Akses Direktur Regional Sumatera')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/index>";

		} else if ($id_upp == 18 && $status == 4){
		$update_last_login = $this->pmis_model->last_login($last_login, $id_upp);
		$update_ip_last_login = $this->pmis_model->ip_last_login($ip_last_login, $id_upp);
		$update_browser = $this->pmis_model->browser_last_login($browser_last_login, $id_upp);
			$this->session->set_userdata('guest', TRUE);

			echo "<script>alert('Anda Berhasil Login dengan Hak Akses Guest')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/index>";

		} else {
			echo "<script>alert('Gagal Login, Periksa Username dan Password Anda')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/login>";
		}
       
    }
	
	
	// Logout
    function logout() {
        $data = array('admin' => NULL,'unit' => NULL,'gm' => NULL,);
        $this->session->unset_userdata($data);
        echo "<script>alert('Anda Berhasil Logout dari Sistem')</script>";
        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/login>";
    }

    public function index() {
	//print_r($this->session->userdata);exit;
			$today = date("n");
			$lastmonth = $today - 1 ;

        if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			//$data['menu9_pln'] = $this->pmis_model->get_module9_pln();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['progress_gallery'] = $this->pmis_model->tampilkan_progress_gallery();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone',$data);
        } else if ($this->session->userdata('id_upp') == 10) {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['progress_gallery'] = $this->pmis_model->tampilkan_progress_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('id_upp') == 1) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone');
        }  else if ($this->session->userdata('id_upp') == 2) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('id_upp') == 3) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('id_upp') == 4) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('id_upp') == 5) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('id_upp') == 6) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('id_upp') == 7) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('id_upp') == 8) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['mils'] = $this->pmis_model->tampilkan_milstone();
			$data['progress'] = $this->pmis_model->tampilkan_progress();
			$data['gallery'] = $this->pmis_model->tampilkan_gallery();
			$data['cod'] = $this->pmis_model->tampilkan_cod($lastmonth);
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/index',$data);
            $this->load->view('footer_milstone');
        } else {
            echo "<script>alert('Anda Belum Login')</script>";
            echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/login>";
            return FALSE;
        }
    }
	
	//Activity Log
	
    public function activity_log_view() {
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			//$data['activity_log'] = $this->pmis_model->activity_log();
		   
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/activity_log_view',$data);
            $this->load->view('footer');
       }
    }
	
	
	
	public function ajax_list()
    {
        $list = $this->activity_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $customers->activity;
            $row[] = date('d-M-Y H:i', strtotime($customers->waktu));
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->activity_model->count_all(),
                        "recordsFiltered" => $this->activity_model->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
	
	//last login
    public function last_login_view() {
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['last_login'] = $this->pmis_model->last_login_view();
		   
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/last_login_view',$data);
            $this->load->view('footer');
       }
    }
	
	//User
    public function user_view() {
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['proj'] = $this->pmis_model->get_user();
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/user_view',$data);
            $this->load->view('footer');
       }
    }
	
	public function user_add() {
       if ($this->session->userdata('status') == 2) { 
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		    $data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['upp'] = $this->pmis_model->get_upp();
            $this->data['title'] = 'Tambah Data user :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/user_add',$data);
            $this->load->view('footer');
			}
		}
		
			
	public function aksi_user_add() {
       if ($this->session->userdata('status') == 2) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		 //print_r ($_POST); exit;
		   $id_upp = $this->input->post('nama_upp');
		   $nama_admin = $this->input->post('nama_admin');
		   $username = $this->input->post('username');
		   $password = $this->input->post('password');
		   $password2 = $this->input->post('password2');
		   $pass = md5($password);
		   $email = $this->input->post('email');
		   if( $password != $password2 ){
				echo "<script>alert('Password Tidak Sama')</script>";
                echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/user_add>";
		   } else {
		   
		   $data = array('id_upp' => $id_upp,'nama_admin' => $nama_admin,'username' => $username,'password' => $pass,'email' => $email,'status' => 3);
                    $insert = $this->pmis_model->tambah_data_user($data);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/user_view>";
                    }
		   
				}
			}
		}
		
    public function user_edit() {
		if ($this->session->userdata('status') == 2) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			
			
			$id = $this->input->get('id_user');
            $data['proj'] = $this->pmis_model->dapat_user($id);
            
            $this->data['title'] = 'Update user :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/user_edit', $data);
            $this->load->view('footer');
        }
    }
	
	
    public function aksi_user_edit() {
		if ($this->session->userdata('status') == 2) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		//print_r($_POST);   exit;
            $id_user = $this->input->post('id_user');
            $nama_admin = $this->input->post('nama_admin');
		   $username = $this->input->post('username');
		   $password = $this->input->post('pass');
		   
		   $email = $this->input->post('email');
			
			$data = array('id_user' => $id_user,'nama_admin' => $nama_admin,'username' => $username,'password' => $password,'email' => $email,'status' => 3);
			$update = $this->pmis_model->update_user($data, $id_user);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/user_view?id_user=".$id_user.">";
						 
					} 
        }
    }


    public function user_delete() {
         if ($this->session->userdata('status') == 2) {
		$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
            $id_user = $this->input->get('id_user');
            $delete = $this->pmis_model->delete_user($id_user);
            if ($delete) {
			   echo "<script>alert('Berhasil Menghapus Data')</script>";
                echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/user_view?id_user=".$id_user.">";
            }
        }
    }
	
		//Project
    public function project_view() {
	//print_r($this->session->userdata('status'));exit;
	
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4){
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			
			//print_r($_POST); exit;
			
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
			
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} else if ($this->session->userdata('id_upp') == 1) {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['proj'] = $this->pmis_model->get_project_upp($this->session->userdata('id_upp'));
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} else if ($this->session->userdata('id_upp') == 2) {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['proj'] = $this->pmis_model->get_project_upp($this->session->userdata('id_upp'));
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} else if ($this->session->userdata('id_upp') == 3) {	
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['proj'] = $this->pmis_model->get_project_upp($this->session->userdata('id_upp'));
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} else if ($this->session->userdata('id_upp') == 4) {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['proj'] = $this->pmis_model->get_project_upp($this->session->userdata('id_upp'));
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} else if ($this->session->userdata('id_upp') == 5) {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['proj'] = $this->pmis_model->get_project_upp($this->session->userdata('id_upp'));
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} else if ($this->session->userdata('id_upp') == 6) {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
				$data['proj'] = $this->pmis_model->get_project_upp($this->session->userdata('id_upp'));
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} else if ($this->session->userdata('id_upp') == 7) {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['proj'] = $this->pmis_model->get_project_upp($this->session->userdata('id_upp'));
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} else if ($this->session->userdata('id_upp') == 8) {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['proj'] = $this->pmis_model->get_project_upp($this->session->userdata('id_upp'));
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} else {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
			$data['menu9_pln'] = $this->pmis_model->get_module9_pln();
			$data['menu9_ipp'] = $this->pmis_model->get_module9_ipp();
			$data['menu9_unallocated'] = $this->pmis_model->get_module9_unallocated();
				$data['proj'] = $this->pmis_model->get_project_upp($this->session->userdata('id_upp'));
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$program_project = $this->input->post('program_project');
			$kode_project = $this->input->post('kode_project');
			$provinsi = $this->input->post('provinsi');
			$ruptl = $this->input->post('ruptl');
			$data['proj'] = $this->pmis_model->get_project();
			$data['projectnya'] = $this->pmis_model->get_allproject($program_project,$kode_project,$provinsi,$ruptl);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_view',$data);
            $this->load->view('footer_project');
		} 
			
	  
    }
	
	public function project_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) { 
		    $data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['upp'] = $this->pmis_model->get_upp();
            $this->data['title'] = 'Tambah Data project :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/project_add',$data);
            $this->load->view('footer');
			} else {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['upp'] = $this->pmis_model->get_upp();
            $this->data['title'] = 'Tambah Data project :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/project_add',$data);
            $this->load->view('footer');
			}
		}
		
			
	public function aksi_project_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
	//print_r($this->session->userdata); exit;
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		   //print_r ($_POST); exit;
		   
		   
		   
		   $id_upp = $this->input->post('nama_upp');
		   $kode_project = $this->input->post('kode_project');
		   $nama_project = $this->input->post('nama_project');
		   $program_project = $this->input->post('program_project');
		   $fase_project = $this->input->post('fase_project');
		   $lokasi_project = $this->input->post('lokasi_project');
		   $provinsi = $this->input->post('provinsi');
		   $ruptl = $this->input->post('ruptl');
		   $jumlah_mesin = $this->input->post('jumlah_mesin');
		   
		   //Start Log Activity Add
		   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
		   $nama_upp = $cek_nama_upp['nama_upp'];  
		   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new project '.$nama_project;
		  //Finish Log Activity Add
		  
		   
		   $data = array('id_upp' => $id_upp,'kode_project' => $kode_project,'nama_project' => $nama_project,'program_project' => $program_project,'fase_project' => $fase_project,
		   'lokasi_project' => $lokasi_project,'provinsi' => $provinsi,'ruptl' => $ruptl,'jumlah_mesin' => $jumlah_mesin);
                    $insert = $this->pmis_model->tambah_data_project($data);
			
			$data_log = array('activity' => $activity,);		
			
                    if ($insert) {
						$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/project_view>";
                    }
		   
			}
		}
		
    public function project_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			
			
			$id = $this->input->get('id_project');
            $data['proj'] = $this->pmis_model->dapat_project($id);
            
            $this->data['title'] = 'Update project :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/project_edit', $data);
            $this->load->view('footer');
		} else {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id = $this->input->get('id_project');
            $data['proj'] = $this->pmis_model->dapat_project($id);
            
            $this->data['title'] = 'Update project :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp', $data);
            $this->load->view('pmis/project_edit', $data);
            $this->load->view('footer');
			}
    }
	
	
    public function aksi_project_edit() {
	
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
			//print_r($_POST);   exit;
			
			//Start Log Activity Edit
			$cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
		   $nama_upp = $cek_nama_upp['nama_upp'];
		   $nama_project = $cek_nama_upp['nama_project'];
		   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated project '.$nama_project;
		   //Finish Log Activity Edit
		   
            $id_project = $this->input->post('id_project');
            $id_upp = $this->input->post('id_upp');
            $nama_project = $this->input->post('nama_project');
            $program_project = $this->input->post('program_project');
		   $lokasi_project = $this->input->post('lokasi_project');
		   $kode_project = $this->input->post('kode_project');
		   $fase_project = $this->input->post('fase_project');
		   $provinsi = $this->input->post('provinsi');
		   $ruptl = $this->input->post('ruptl');
		  $jumlah_mesin = $this->input->post('jumlah_mesin');
		  
		   
		   $data = array('id_upp' => $id_upp,'kode_project' => $kode_project,'nama_project' => $nama_project,'program_project' => $program_project,'fase_project' => $fase_project,
		   'lokasi_project' => $lokasi_project,'provinsi' => $provinsi,'ruptl' => $ruptl,'jumlah_mesin' => $jumlah_mesin);
			$update = $this->pmis_model->update_project($data, $id_project);
			
			
			$data_log = array('activity' => $activity,);		
			
                    
						
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/project_view?id_project=".$id_project.">";
						 
					} 
        }
    }


    public function project_delete() {
	$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		 	
			//Start Log Activity Delete
			$cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			$nama_upp = $cek_nama_upp['nama_upp'];
		   $nama_project = $cek_nama_upp['nama_project'];
		   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted project '.$nama_project;
		   //Finish Log Activity Delete
		   
            $id_project = $this->input->get('id_project');
            $delete = $this->pmis_model->delete_project($id_project);
			$data_log = array('activity' => $activity,);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
			   echo "<script>alert('Berhasil Menghapus Data')</script>";
                echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/project_view?id_project=".$id_project.">";
            }
        }
    }
		public function project_map_view(){
		print_r($_GET);
		exit;
		$this->load->library('googlemaps');
        $config=array();
        $config['center']="3.776730598473998, 98.69087219238281";
        $config['zoom']=6;
        
        $config['map_height']="400px";
        $this->googlemaps->initialize($config);
        $marker=array();
        $marker['position']="3.776730598473998, 98.69087219238281";
		$marker['icon'] = 'http://icons.iconarchive.com/icons/aha-soft/standard-city/48/coal-power-plant-icon.png';
		$marker['infowindow_content'] = 'Kantor PLN UPP KITSUM 2';
        $this->googlemaps->add_marker($marker);
        //map3
		
		$data['map']=$this->googlemaps->create_map();
		$this->load->view('pmis/project_map_view',$data);
	}
	
	//General Information
	public function general_information_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_project = $this->input->get('id_project');
		    $data['cek_general_information'] = $this->pmis_model->cek_general_information($id_project);
		    $data['general_information'] = $this->pmis_model->tampil_general_information($id_project);
		    $data['tampil_nama_project'] = $this->pmis_model->tampil_nama_project($id_project);
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/general_information_view',$data);
            $this->load->view('footer');
			} else if($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_project = $this->input->get('id_project');
			
		    $data['cek_general_information'] = $this->pmis_model->cek_general_information($id_project);
		    $data['general_information'] = $this->pmis_model->tampil_general_information($id_project);
		    $data['tampil_nama_project'] = $this->pmis_model->tampil_nama_project($id_project);
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/general_information_view',$data);
            $this->load->view('footer');
			
			
			}
		}
		
		
	public function general_information_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
			
			
			
            $this->data['title'] = 'Tambah data General Information :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/general_information_add',$data);
            $this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Tambah data General Information :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/general_information_add',$data);
            $this->load->view('footer_milstone');
			}
		}
		
	public function aksi_general_information_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		 // print_r ($_POST); exit;
		   
		   $id_project = $this->input->post('id_project');
		   $lokasi_project = $this->input->post('lokasi_project');
		   $luas_area = $this->input->post('luas_area');
		   $lingkup_pekerjaan = $this->input->post('lingkup_pekerjaan');
		   $no_kontrak = $this->input->post('no_kontrak');
		   $tariff = $this->input->post('tariff');
		   $developer = $this->input->post('developer');
		   
		   
		   
		   if($this->input->post('tgl_kosong') == '1970-01-01'){
			$tgl_kontrak = date('Y-m-d' , strtotime($_POST['tgl_kosong']));
		   } else {
			$tgl_kontrak = date('Y-m-d' , strtotime($_POST['tgl_kontrak']));
		   }
		   
		   if($this->input->post('tgl_kosong1') == '1970-01-01'){
			$tanggal_efektif = date('Y-m-d' , strtotime($_POST['tgl_kosong1']));
		   } else {
			$tanggal_efektif = date('Y-m-d' , strtotime($_POST['tanggal_efektif']));
		   }
		   
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   $sumber_pendanaan = $this->input->post('sumber_pendanaan');
		  
		   $kontraktor = $this->input->post('kontraktor');
		   $konsultan_desain = $this->input->post('konsultan_desain');
		   $konsultan_supervisi = $this->input->post('konsultan_supervisi');
		   $transmisi = $this->input->post('transmisi');
		   $target_cod = date('Y-m-d' , strtotime($_POST['target_cod']));
		   
			if($this->input->post('date_sign_ppa') == ''){
				$date_sign_ppa = '0000-00-00';
				} else {
				$date_sign_ppa = date('Y-m-d' , strtotime($_POST['date_sign_ppa']));
			}
			
			if($this->input->post('financial_close_date') == ''){
				$financial_close_date = '0000-00-00';
				} else {
				$financial_close_date = date('Y-m-d' , strtotime($_POST['financial_close_date']));
			}
		   
		   //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created general information of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new general information '.$nama_project;
		   }
		   //Finish Log Activity Add
		   
			$data = array('id_project' => $id_project,'lokasi_project' => $lokasi_project,
			'luas_area' => $luas_area,'lingkup_pekerjaan' => $lingkup_pekerjaan,'no_kontrak' => $no_kontrak,'tgl_kontrak' => $tgl_kontrak,
			'nilai_kontrak' => $nilai_kontrak,'sumber_pendanaan' => $sumber_pendanaan,'tanggal_efektif' => $tanggal_efektif,'kontraktor' => $kontraktor,
			'developer' => $developer,'tariff' => $tariff,
			'konsultan_desain' => $konsultan_desain,'konsultan_supervisi' => $konsultan_supervisi,'transmisi' => $transmisi,'target_cod' => $target_cod,
			'date_sign_ppa' => $date_sign_ppa,'financial_close_date' => $financial_close_date,);
			
			$data_log = array('activity' => $activity,);
                    $insert = $this->pmis_model->tambah_data_general_information($data);
                    if ($insert) {
						$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/general_information_view?id_project=".$id_project.">";
                    }
		   
			}
		}
		
		public function general_information_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
			//print_r ($_POST); 
			//print_r ($_GET); exit;
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_general_information = $this->input->get('id_general_information');
			$id_project = $this->input->get('id_project');
			
		    $data['tampil_nama_project'] = $this->pmis_model->tampil_nama_project($id_project);
            $data['general_information'] = $this->pmis_model->dapat_general_information($id_general_information);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update General Information :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/general_information_edit', $data);
            $this->load->view('footer_milstone');
        }
    }
	
	
    public function aksi_general_information_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
		$id_project = $this->input->post('id_project');
		//Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated general information of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated general information of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		   
           $id_general_information = $this->input->post('id_general_information');
           
		   $lokasi_project = $this->input->post('lokasi_project');
		   $luas_area = $this->input->post('luas_area');
		   $lingkup_pekerjaan = $this->input->post('lingkup_pekerjaan');
		   $no_kontrak = $this->input->post('no_kontrak');
		   $tgl_kontrak = date('Y-m-d' , strtotime($_POST['tgl_kontrak']));
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   $sumber_pendanaan = $this->input->post('sumber_pendanaan');
		   $tanggal_efektif = date('Y-m-d' , strtotime($_POST['tanggal_efektif']));
		   $kontraktor = $this->input->post('kontraktor');
		   $konsultan_desain = $this->input->post('konsultan_desain');
		   $konsultan_supervisi = $this->input->post('konsultan_supervisi');
		   $transmisi = $this->input->post('transmisi');
		   $target_cod = date('Y-m-d' , strtotime($_POST['target_cod']));
		  $tariff = $this->input->post('tariff');
		   $developer = $this->input->post('developer');
			
			if($this->input->post('date_sign_ppa') == ''){
				$date_sign_ppa = '0000-00-00';
				} else {
				$date_sign_ppa = date('Y-m-d' , strtotime($_POST['date_sign_ppa']));
			}
			
			if($this->input->post('financial_close_date') == ''){
				$financial_close_date = '0000-00-00';
				} else {
				$financial_close_date = date('Y-m-d' , strtotime($_POST['financial_close_date']));
			}
		   
		$data = array('id_project' => $id_project,'lokasi_project' => $lokasi_project,
		'luas_area' => $luas_area,'lingkup_pekerjaan' => $lingkup_pekerjaan,'no_kontrak' => $no_kontrak,'tgl_kontrak' => $tgl_kontrak,
		'nilai_kontrak' => $nilai_kontrak,'sumber_pendanaan' => $sumber_pendanaan,'tanggal_efektif' => $tanggal_efektif,'kontraktor' => $kontraktor,
		'konsultan_desain' => $konsultan_desain,'konsultan_supervisi' => $konsultan_supervisi,'transmisi' => $transmisi,'target_cod' => $target_cod,
		'date_sign_ppa' => $date_sign_ppa,'financial_close_date' => $financial_close_date,'developer' => $developer,'tariff' => $tariff,);

		$data_log = array('activity' => $activity,);
			//$data = array('id_project' => $id_project,'nama_general_information' => $nama_general_information,);
             $update = $this->pmis_model->update_general_information($data, $id_general_information);
			 $insert = $this->pmis_model->tambah_data_log_activity($data_log);
					if ($update) {
					
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/general_information_view?id_project=".$id_project.">";
						 
					} 
        }
    }

		
			
	
    public function general_information_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_general_information = $this->input->get('id_general_information');
            $id_project = $this->input->get('id_project');
			 // print_r($_GET);
			 // print_r($_POST);
			 // exit;
		//Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted general information of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted general information of '.$nama_project;
		   }
		   //Finish Log Activity Delete
		   
		   $data_log = array('activity' => $activity,);
            $delete = $this->pmis_model->delete_general_information($id_general_information);
			
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/general_information_view?id_project=$id_project>";
				
            }
        }
    }
	
		
	
	//Milstone
	public function milstone_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_project = $this->input->get('id_project');
		    $data['mils'] = $this->pmis_model->tampil_milstone($id_project);
            $data['mesin'] = $this->pmis_model->cek_mesin($id_project);
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/milstone_view',$data);
            $this->load->view('footer');
			} else if($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
			$id_project = $this->input->get('id_project');
		    $data['mils'] = $this->pmis_model->tampil_milstone($id_project);
            $data['mesin'] = $this->pmis_model->cek_mesin($id_project);
            $this->data['title'] = 'Beranda :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/milstone_view',$data);
            $this->load->view('footer');
			
			}
		}
		
	public function milstone_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
			$id_project = $this->input->get('id_project');
            $data['mesin'] = $this->pmis_model->cek_mesin($id_project);
			$this->data['title'] = 'Tambah data milstone :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar',$data);
            $this->load->view('pmis/milstone_add',$data);
            $this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
		$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
			$id_project = $this->input->get('id_project');
            $data['mesin'] = $this->pmis_model->cek_mesin($id_project);
			$this->data['title'] = 'Tambah data milstone :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp',$data);
            $this->load->view('pmis/milstone_add',$data);
            $this->load->view('footer_milstone');
			}
		}
		
	public function aksi_milstone_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		   //print_r ($_POST); exit;
		   
		   
			$id_project = $this->input->post('id_project');
			//Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created milestone of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created milestone of '.$nama_project;
		   }
		   //Finish Log Activity Add
			$nama_milstone = $this->input->post('nama_milstone');
			$start_plan_unit1 = date('Y-m-d' , strtotime($_POST['start_plan_unit1']));
			$finish_plan_unit1 = date('Y-m-d' , strtotime($_POST['finish_plan_unit1']));
			$start_actual_unit1 = date('Y-m-d' , strtotime($_POST['start_actual_unit1']));
			$finish_actual_unit1 = date('Y-m-d' , strtotime($_POST['finish_actual_unit1']));

			$start_plan_unit2 = date('Y-m-d' , strtotime($_POST['start_plan_unit2']));
			$finish_plan_unit2 = date('Y-m-d' , strtotime($_POST['finish_plan_unit2']));
			$start_actual_unit2 = date('Y-m-d' , strtotime($_POST['start_actual_unit2']));
			$finish_actual_unit2 = date('Y-m-d' , strtotime($_POST['finish_actual_unit2']));

			if($this->input->post('start_plan_unit3') == ''){
				$start_plan_unit3 = '0000-00-00';
				} else {
				$start_plan_unit3 = date('Y-m-d' , strtotime($_POST['start_plan_unit3']));
			}
		   
			if($this->input->post('finish_plan_unit3') == ''){
				$finish_plan_unit3 = '0000-00-00';
				} else {
				$finish_plan_unit3 = date('Y-m-d' , strtotime($_POST['finish_plan_unit3']));
			}
		   
			if($this->input->post('start_actual_unit3') == ''){
				$start_actual_unit3 = '0000-00-00';
				} else {
				$start_actual_unit3 = date('Y-m-d' , strtotime($_POST['start_actual_unit3']));
			}
		   
			if($this->input->post('finish_actual_unit3') == ''){
				$finish_actual_unit3 = '0000-00-00';
				} else {
				$finish_actual_unit3 = date('Y-m-d' , strtotime($_POST['finish_actual_unit3']));
			}
		   
			if($this->input->post('start_plan_unit4') == ''){
				$start_plan_unit4 = '0000-00-00';
				} else {
				$start_plan_unit4 = date('Y-m-d' , strtotime($_POST['start_plan_unit4']));
			}
		   
			if($this->input->post('finish_plan_unit4') == ''){
				$finish_plan_unit4 = '0000-00-00';
				} else {
				$finish_plan_unit4 = date('Y-m-d' , strtotime($_POST['finish_plan_unit4']));
			}
		   
			if($this->input->post('start_actual_unit4') == ''){
				$start_actual_unit4 = '0000-00-00';
				} else {
				$start_actual_unit4 = date('Y-m-d' , strtotime($_POST['start_actual_unit4']));
			}
		   
			if($this->input->post('finish_actual_unit4') == ''){
				$finish_actual_unit4 = '0000-00-00';
				} else {
				$finish_actual_unit4 = date('Y-m-d' , strtotime($_POST['finish_actual_unit4']));
			}
			
		   //start unit 5
			if($this->input->post('start_plan_unit5') == ''){
				$start_plan_unit5 = '0000-00-00';
				} else {
				$start_plan_unit5 = date('Y-m-d' , strtotime($_POST['start_plan_unit5']));
			}
		   
			if($this->input->post('finish_plan_unit5') == ''){
				$finish_plan_unit5 = '0000-00-00';
				} else {
				$finish_plan_unit5 = date('Y-m-d' , strtotime($_POST['finish_plan_unit5']));
			}
		   
			if($this->input->post('start_actual_unit5') == ''){
				$start_actual_unit5 = '0000-00-00';
				} else {
				$start_actual_unit5 = date('Y-m-d' , strtotime($_POST['start_actual_unit5']));
			}
		   
			if($this->input->post('finish_actual_unit5') == ''){
				$finish_actual_unit5 = '0000-00-00';
				} else {
				$finish_actual_unit5 = date('Y-m-d' , strtotime($_POST['finish_actual_unit5']));
			}
		   //finish unit 5

		   //start unit 6
			if($this->input->post('start_plan_unit6') == ''){
				$start_plan_unit6 = '0000-00-00';
				} else {
				$start_plan_unit6 = date('Y-m-d' , strtotime($_POST['start_plan_unit6']));
			}
		   
			if($this->input->post('finish_plan_unit6') == ''){
				$finish_plan_unit6 = '0000-00-00';
				} else {
				$finish_plan_unit6 = date('Y-m-d' , strtotime($_POST['finish_plan_unit6']));
			}
		   
			if($this->input->post('start_actual_unit6') == ''){
				$start_actual_unit6 = '0000-00-00';
				} else {
				$start_actual_unit6 = date('Y-m-d' , strtotime($_POST['start_actual_unit6']));
			}
		   
			if($this->input->post('finish_actual_unit6') == ''){
				$finish_actual_unit6 = '0000-00-00';
				} else {
				$finish_actual_unit6 = date('Y-m-d' , strtotime($_POST['finish_actual_unit6']));
			}
		   //finish unit 6

		   //start unit 7
			if($this->input->post('start_plan_unit7') == ''){
				$start_plan_unit7 = '0000-00-00';
				} else {
				$start_plan_unit7 = date('Y-m-d' , strtotime($_POST['start_plan_unit7']));
			}
		   
			if($this->input->post('finish_plan_unit7') == ''){
				$finish_plan_unit7 = '0000-00-00';
				} else {
				$finish_plan_unit7 = date('Y-m-d' , strtotime($_POST['finish_plan_unit7']));
			}
		   
			if($this->input->post('start_actual_unit7') == ''){
				$start_actual_unit7 = '0000-00-00';
				} else {
				$start_actual_unit7 = date('Y-m-d' , strtotime($_POST['start_actual_unit7']));
			}
		   
			if($this->input->post('finish_actual_unit7') == ''){
				$finish_actual_unit7 = '0000-00-00';
				} else {
				$finish_actual_unit7 = date('Y-m-d' , strtotime($_POST['finish_actual_unit7']));
			}
		   //finish unit 7

		   //start unit 8
			if($this->input->post('start_plan_unit8') == ''){
				$start_plan_unit8 = '0000-00-00';
				} else {
				$start_plan_unit8 = date('Y-m-d' , strtotime($_POST['start_plan_unit8']));
			}
		   
			if($this->input->post('finish_plan_unit8') == ''){
				$finish_plan_unit8 = '0000-00-00';
				} else {
				$finish_plan_unit8 = date('Y-m-d' , strtotime($_POST['finish_plan_unit8']));
			}
		   
			if($this->input->post('start_actual_unit8') == ''){
				$start_actual_unit8 = '0000-00-00';
				} else {
				$start_actual_unit8 = date('Y-m-d' , strtotime($_POST['start_actual_unit8']));
			}
		   
			if($this->input->post('finish_actual_unit8') == ''){
				$finish_actual_unit8 = '0000-00-00';
				} else {
				$finish_actual_unit8 = date('Y-m-d' , strtotime($_POST['finish_actual_unit8']));
			}
		   //finish unit 8

		   //start unit 9
			if($this->input->post('start_plan_unit9') == ''){
				$start_plan_unit9 = '0000-00-00';
				} else {
				$start_plan_unit9 = date('Y-m-d' , strtotime($_POST['start_plan_unit9']));
			}
		   
			if($this->input->post('finish_plan_unit9') == ''){
				$finish_plan_unit9 = '0000-00-00';
				} else {
				$finish_plan_unit9 = date('Y-m-d' , strtotime($_POST['finish_plan_unit9']));
			}
		   
			if($this->input->post('start_actual_unit9') == ''){
				$start_actual_unit9 = '0000-00-00';
				} else {
				$start_actual_unit9 = date('Y-m-d' , strtotime($_POST['start_actual_unit9']));
			}
		   
			if($this->input->post('finish_actual_unit9') == ''){
				$finish_actual_unit9 = '0000-00-00';
				} else {
				$finish_actual_unit9 = date('Y-m-d' , strtotime($_POST['finish_actual_unit9']));
			}
		   //finish unit 9

		   //start unit 10
			if($this->input->post('start_plan_unit10') == ''){
				$start_plan_unit10 = '0000-00-00';
				} else {
				$start_plan_unit10 = date('Y-m-d' , strtotime($_POST['start_plan_unit10']));
			}
		   
			if($this->input->post('finish_plan_unit10') == ''){
				$finish_plan_unit10 = '0000-00-00';
				} else {
				$finish_plan_unit10 = date('Y-m-d' , strtotime($_POST['finish_plan_unit10']));
			}
		   
			if($this->input->post('start_actual_unit10') == ''){
				$start_actual_unit10 = '0000-00-00';
				} else {
				$start_actual_unit10 = date('Y-m-d' , strtotime($_POST['start_actual_unit10']));
			}
		   
			if($this->input->post('finish_actual_unit10') == ''){
				$finish_actual_unit10 = '0000-00-00';
				} else {
				$finish_actual_unit10 = date('Y-m-d' , strtotime($_POST['finish_actual_unit10']));
			}
		   //finish unit 10

		   //start unit 11
			if($this->input->post('start_plan_unit11') == ''){
				$start_plan_unit11 = '0000-00-00';
				} else {
				$start_plan_unit11 = date('Y-m-d' , strtotime($_POST['start_plan_unit11']));
			}
		   
			if($this->input->post('finish_plan_unit11') == ''){
				$finish_plan_unit11 = '0000-00-00';
				} else {
				$finish_plan_unit11 = date('Y-m-d' , strtotime($_POST['finish_plan_unit11']));
			}
		   
			if($this->input->post('start_actual_unit11') == ''){
				$start_actual_unit11 = '0000-00-00';
				} else {
				$start_actual_unit11 = date('Y-m-d' , strtotime($_POST['start_actual_unit11']));
			}
		   
			if($this->input->post('finish_actual_unit11') == ''){
				$finish_actual_unit11 = '0000-00-00';
				} else {
				$finish_actual_unit11 = date('Y-m-d' , strtotime($_POST['finish_actual_unit11']));
			}
		   //finish unit 11

		   //start unit 12
			if($this->input->post('start_plan_unit12') == ''){
				$start_plan_unit12 = '0000-00-00';
				} else {
				$start_plan_unit12 = date('Y-m-d' , strtotime($_POST['start_plan_unit12']));
			}
		   
			if($this->input->post('finish_plan_unit12') == ''){
				$finish_plan_unit12 = '0000-00-00';
				} else {
				$finish_plan_unit12 = date('Y-m-d' , strtotime($_POST['finish_plan_unit12']));
			}
		   
			if($this->input->post('start_actual_unit12') == ''){
				$start_actual_unit12 = '0000-00-00';
				} else {
				$start_actual_unit12 = date('Y-m-d' , strtotime($_POST['start_actual_unit12']));
			}
		   
			if($this->input->post('finish_actual_unit12') == ''){
				$finish_actual_unit12 = '0000-00-00';
				} else {
				$finish_actual_unit12 = date('Y-m-d' , strtotime($_POST['finish_actual_unit12']));
			}
		   //finish unit 12

		   //start unit 13
			if($this->input->post('start_plan_unit13') == ''){
				$start_plan_unit13 = '0000-00-00';
				} else {
				$start_plan_unit13 = date('Y-m-d' , strtotime($_POST['start_plan_unit13']));
			}
		   
			if($this->input->post('finish_plan_unit13') == ''){
				$finish_plan_unit13 = '0000-00-00';
				} else {
				$finish_plan_unit13 = date('Y-m-d' , strtotime($_POST['finish_plan_unit13']));
			}
		   
			if($this->input->post('start_actual_unit13') == ''){
				$start_actual_unit13 = '0000-00-00';
				} else {
				$start_actual_unit13 = date('Y-m-d' , strtotime($_POST['start_actual_unit13']));
			}
		   
			if($this->input->post('finish_actual_unit13') == ''){
				$finish_actual_unit13 = '0000-00-00';
				} else {
				$finish_actual_unit13 = date('Y-m-d' , strtotime($_POST['finish_actual_unit13']));
			}
		   //finish unit 13

		   //start unit 14
			if($this->input->post('start_plan_unit14') == ''){
				$start_plan_unit14 = '0000-00-00';
				} else {
				$start_plan_unit14 = date('Y-m-d' , strtotime($_POST['start_plan_unit14']));
			}
		   
			if($this->input->post('finish_plan_unit14') == ''){
				$finish_plan_unit14 = '0000-00-00';
				} else {
				$finish_plan_unit14 = date('Y-m-d' , strtotime($_POST['finish_plan_unit14']));
			}
		   
			if($this->input->post('start_actual_unit14') == ''){
				$start_actual_unit14 = '0000-00-00';
				} else {
				$start_actual_unit14 = date('Y-m-d' , strtotime($_POST['start_actual_unit14']));
			}
		   
			if($this->input->post('finish_actual_unit14') == ''){
				$finish_actual_unit14 = '0000-00-00';
				} else {
				$finish_actual_unit14 = date('Y-m-d' , strtotime($_POST['finish_actual_unit14']));
			}
		   //finish unit 14

		   //start unit 15
			if($this->input->post('start_plan_unit15') == ''){
				$start_plan_unit15 = '0000-00-00';
				} else {
				$start_plan_unit15 = date('Y-m-d' , strtotime($_POST['start_plan_unit15']));
			}
		   
			if($this->input->post('finish_plan_unit15') == ''){
				$finish_plan_unit15 = '0000-00-00';
				} else {
				$finish_plan_unit15 = date('Y-m-d' , strtotime($_POST['finish_plan_unit15']));
			}
		   
			if($this->input->post('start_actual_unit15') == ''){
				$start_actual_unit15 = '0000-00-00';
				} else {
				$start_actual_unit15 = date('Y-m-d' , strtotime($_POST['start_actual_unit15']));
			}
		   
			if($this->input->post('finish_actual_unit15') == ''){
				$finish_actual_unit15 = '0000-00-00';
				} else {
				$finish_actual_unit15 = date('Y-m-d' , strtotime($_POST['finish_actual_unit15']));
			}
		   //finish unit 15

			$data = array('id_project' => $id_project,'nama_milstone' => $nama_milstone,
			'start_plan_unit1' => $start_plan_unit1,'finish_plan_unit1' => $finish_plan_unit1,'start_actual_unit1' => $start_actual_unit1,'finish_actual_unit1' => $finish_actual_unit1,
			'start_plan_unit2' => $start_plan_unit2,'finish_plan_unit2' => $finish_plan_unit2,'start_actual_unit2' => $start_actual_unit2,'finish_actual_unit2' => $finish_actual_unit2,
			'start_plan_unit3' => $start_plan_unit3,'finish_plan_unit3' => $finish_plan_unit3,'start_actual_unit3' => $start_actual_unit3,'finish_actual_unit3' => $finish_actual_unit3,
			'start_plan_unit4' => $start_plan_unit4,'finish_plan_unit4' => $finish_plan_unit4,'start_actual_unit4' => $start_actual_unit4,'finish_actual_unit4' => $finish_actual_unit4,
			'start_plan_unit5' => $start_plan_unit5,'finish_plan_unit5' => $finish_plan_unit5,'start_actual_unit5' => $start_actual_unit5,'finish_actual_unit5' => $finish_actual_unit5,
			'start_plan_unit6' => $start_plan_unit6,'finish_plan_unit6' => $finish_plan_unit6,'start_actual_unit6' => $start_actual_unit6,'finish_actual_unit6' => $finish_actual_unit6,
			'start_plan_unit7' => $start_plan_unit7,'finish_plan_unit7' => $finish_plan_unit7,'start_actual_unit7' => $start_actual_unit7,'finish_actual_unit7' => $finish_actual_unit7,
			'start_plan_unit8' => $start_plan_unit8,'finish_plan_unit8' => $finish_plan_unit8,'start_actual_unit8' => $start_actual_unit8,'finish_actual_unit8' => $finish_actual_unit8,
			'start_plan_unit9' => $start_plan_unit9,'finish_plan_unit9' => $finish_plan_unit9,'start_actual_unit9' => $start_actual_unit9,'finish_actual_unit9' => $finish_actual_unit9,
			'start_plan_unit10' => $start_plan_unit10,'finish_plan_unit10' => $finish_plan_unit10,'start_actual_unit10' => $start_actual_unit10,'finish_actual_unit10' => $finish_actual_unit10,
			'start_plan_unit11' => $start_plan_unit11,'finish_plan_unit11' => $finish_plan_unit11,'start_actual_unit11' => $start_actual_unit11,'finish_actual_unit11' => $finish_actual_unit11,
			'start_plan_unit12' => $start_plan_unit12,'finish_plan_unit12' => $finish_plan_unit12,'start_actual_unit12' => $start_actual_unit12,'finish_actual_unit12' => $finish_actual_unit12,
			'start_plan_unit13' => $start_plan_unit13,'finish_plan_unit13' => $finish_plan_unit13,'start_actual_unit13' => $start_actual_unit13,'finish_actual_unit13' => $finish_actual_unit13,
			'start_plan_unit14' => $start_plan_unit14,'finish_plan_unit14' => $finish_plan_unit14,'start_actual_unit14' => $start_actual_unit14,'finish_actual_unit14' => $finish_actual_unit14,
			'start_plan_unit15' => $start_plan_unit15,'finish_plan_unit15' => $finish_plan_unit15,'start_actual_unit15' => $start_actual_unit15,'finish_actual_unit15' => $finish_actual_unit15,
			
			);
			$data_log = array('activity' => $activity,);
			$insert = $this->pmis_model->tambah_data_milstone($data);
			if ($insert) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
			echo "<script>alert('Berhasil Menambah Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/milstone_view?id_project=".$id_project.">";
			}

					
				 
		   
			}
		}
		
    public function milstone_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);
		//print_r($_POST);
		//exit();
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_milstone = $this->input->get('id_milstone');
			$id_project = $this->input->get('id_project_');
            $data['mils'] = $this->pmis_model->dapat_milstone($id_milstone);
			//$id_project = $_GET['id_project'];
            $data['mesin'] = $this->pmis_model->cek_mesin($id_project);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update milstone :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/milstone_edit', $data);
            $this->load->view('footer_milstone');
        }
    }
	
	
    public function aksi_milstone_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
		 
           $id_milstone = $this->input->post('id_milstone');
           $id_project = $this->input->post('id_project');
		   $nama_milstone = $this->input->post('nama_milstone');
		   $start_plan_unit1 = date('Y-m-d' , strtotime($_POST['start_plan_unit1']));
		   $finish_plan_unit1 = date('Y-m-d' , strtotime($_POST['finish_plan_unit1']));
		   $start_actual_unit1 = date('Y-m-d' , strtotime($_POST['start_actual_unit1']));
		   $finish_actual_unit1 = date('Y-m-d' , strtotime($_POST['finish_actual_unit1']));
		   
		   $start_plan_unit2 = date('Y-m-d' , strtotime($_POST['start_plan_unit2']));
		   $finish_plan_unit2 = date('Y-m-d' , strtotime($_POST['finish_plan_unit2']));
		   $start_actual_unit2 = date('Y-m-d' , strtotime($_POST['start_actual_unit2']));
		   $finish_actual_unit2 = date('Y-m-d' , strtotime($_POST['finish_actual_unit2']));
		  
			
			
			if($this->input->post('start_plan_unit3') == ''){
				$start_plan_unit3 = '0000-00-00';
				} else {
				$start_plan_unit3 = date('Y-m-d' , strtotime($_POST['start_plan_unit3']));
			}
		   
			if($this->input->post('finish_plan_unit3') == ''){
				$finish_plan_unit3 = '0000-00-00';
				} else {
				$finish_plan_unit3 = date('Y-m-d' , strtotime($_POST['finish_plan_unit3']));
			}
		   
			if($this->input->post('start_actual_unit3') == ''){
				$start_actual_unit3 = '0000-00-00';
				} else {
				$start_actual_unit3 = date('Y-m-d' , strtotime($_POST['start_actual_unit3']));
			}
		   
			if($this->input->post('finish_actual_unit3') == ''){
				$finish_actual_unit3 = '0000-00-00';
				} else {
				$finish_actual_unit3 = date('Y-m-d' , strtotime($_POST['finish_actual_unit3']));
			}
		   
			if($this->input->post('start_plan_unit4') == ''){
				$start_plan_unit4 = '0000-00-00';
				} else {
				$start_plan_unit4 = date('Y-m-d' , strtotime($_POST['start_plan_unit4']));
			}
		   
			if($this->input->post('finish_plan_unit4') == ''){
				$finish_plan_unit4 = '0000-00-00';
				} else {
				$finish_plan_unit4 = date('Y-m-d' , strtotime($_POST['finish_plan_unit4']));
			}
		   
			if($this->input->post('start_actual_unit4') == ''){
				$start_actual_unit4 = '0000-00-00';
				} else {
				$start_actual_unit4 = date('Y-m-d' , strtotime($_POST['start_actual_unit4']));
			}
		   
			if($this->input->post('finish_actual_unit4') == ''){
				$finish_actual_unit4 = '0000-00-00';
				} else {
				$finish_actual_unit4 = date('Y-m-d' , strtotime($_POST['finish_actual_unit4']));
			}
		   
			if($this->input->post('start_plan_unit5') == ''){
				$start_plan_unit5 = '0000-00-00';
				} else {
				$start_plan_unit5 = date('Y-m-d' , strtotime($_POST['start_plan_unit5']));
			}
		   
			if($this->input->post('finish_plan_unit5') == ''){
				$finish_plan_unit5 = '0000-00-00';
				} else {
				$finish_plan_unit5 = date('Y-m-d' , strtotime($_POST['finish_plan_unit5']));
			}
		   
			if($this->input->post('start_actual_unit5') == ''){
				$start_actual_unit5 = '0000-00-00';
				} else {
				$start_actual_unit5 = date('Y-m-d' , strtotime($_POST['start_actual_unit5']));
			}
		   
			if($this->input->post('finish_actual_unit5') == ''){
				$finish_actual_unit5 = '0000-00-00';
				} else {
				$finish_actual_unit5 = date('Y-m-d' , strtotime($_POST['finish_actual_unit5']));
			}
		   
		   //start unit 6
			if($this->input->post('start_plan_unit6') == ''){
				$start_plan_unit6 = '0000-00-00';
				} else {
				$start_plan_unit6 = date('Y-m-d' , strtotime($_POST['start_plan_unit6']));
			}
		   
			if($this->input->post('finish_plan_unit6') == ''){
				$finish_plan_unit6 = '0000-00-00';
				} else {
				$finish_plan_unit6 = date('Y-m-d' , strtotime($_POST['finish_plan_unit6']));
			}
		   
			if($this->input->post('start_actual_unit6') == ''){
				$start_actual_unit6 = '0000-00-00';
				} else {
				$start_actual_unit6 = date('Y-m-d' , strtotime($_POST['start_actual_unit6']));
			}
		   
			if($this->input->post('finish_actual_unit6') == ''){
				$finish_actual_unit6 = '0000-00-00';
				} else {
				$finish_actual_unit6 = date('Y-m-d' , strtotime($_POST['finish_actual_unit6']));
			}
		   //finish unit 6

		   //start unit 7
			if($this->input->post('start_plan_unit7') == ''){
				$start_plan_unit7 = '0000-00-00';
				} else {
				$start_plan_unit7 = date('Y-m-d' , strtotime($_POST['start_plan_unit7']));
			}
		   
			if($this->input->post('finish_plan_unit7') == ''){
				$finish_plan_unit7 = '0000-00-00';
				} else {
				$finish_plan_unit7 = date('Y-m-d' , strtotime($_POST['finish_plan_unit7']));
			}
		   
			if($this->input->post('start_actual_unit7') == ''){
				$start_actual_unit7 = '0000-00-00';
				} else {
				$start_actual_unit7 = date('Y-m-d' , strtotime($_POST['start_actual_unit7']));
			}
		   
			if($this->input->post('finish_actual_unit7') == ''){
				$finish_actual_unit7 = '0000-00-00';
				} else {
				$finish_actual_unit7 = date('Y-m-d' , strtotime($_POST['finish_actual_unit7']));
			}
		   //finish unit 7

		   //start unit 8
			if($this->input->post('start_plan_unit8') == ''){
				$start_plan_unit8 = '0000-00-00';
				} else {
				$start_plan_unit8 = date('Y-m-d' , strtotime($_POST['start_plan_unit8']));
			}
		   
			if($this->input->post('finish_plan_unit8') == ''){
				$finish_plan_unit8 = '0000-00-00';
				} else {
				$finish_plan_unit8 = date('Y-m-d' , strtotime($_POST['finish_plan_unit8']));
			}
		   
			if($this->input->post('start_actual_unit8') == ''){
				$start_actual_unit8 = '0000-00-00';
				} else {
				$start_actual_unit8 = date('Y-m-d' , strtotime($_POST['start_actual_unit8']));
			}
		   
			if($this->input->post('finish_actual_unit8') == ''){
				$finish_actual_unit8 = '0000-00-00';
				} else {
				$finish_actual_unit8 = date('Y-m-d' , strtotime($_POST['finish_actual_unit8']));
			}
		   //finish unit 8

		   //start unit 9
			if($this->input->post('start_plan_unit9') == ''){
				$start_plan_unit9 = '0000-00-00';
				} else {
				$start_plan_unit9 = date('Y-m-d' , strtotime($_POST['start_plan_unit9']));
			}
		   
			if($this->input->post('finish_plan_unit9') == ''){
				$finish_plan_unit9 = '0000-00-00';
				} else {
				$finish_plan_unit9 = date('Y-m-d' , strtotime($_POST['finish_plan_unit9']));
			}
		   
			if($this->input->post('start_actual_unit9') == ''){
				$start_actual_unit9 = '0000-00-00';
				} else {
				$start_actual_unit9 = date('Y-m-d' , strtotime($_POST['start_actual_unit9']));
			}
		   
			if($this->input->post('finish_actual_unit9') == ''){
				$finish_actual_unit9 = '0000-00-00';
				} else {
				$finish_actual_unit9 = date('Y-m-d' , strtotime($_POST['finish_actual_unit9']));
			}
		   //finish unit 9

		   //start unit 10
			if($this->input->post('start_plan_unit10') == ''){
				$start_plan_unit10 = '0000-00-00';
				} else {
				$start_plan_unit10 = date('Y-m-d' , strtotime($_POST['start_plan_unit10']));
			}
		   
			if($this->input->post('finish_plan_unit10') == ''){
				$finish_plan_unit10 = '0000-00-00';
				} else {
				$finish_plan_unit10 = date('Y-m-d' , strtotime($_POST['finish_plan_unit10']));
			}
		   
			if($this->input->post('start_actual_unit10') == ''){
				$start_actual_unit10 = '0000-00-00';
				} else {
				$start_actual_unit10 = date('Y-m-d' , strtotime($_POST['start_actual_unit10']));
			}
		   
			if($this->input->post('finish_actual_unit10') == ''){
				$finish_actual_unit10 = '0000-00-00';
				} else {
				$finish_actual_unit10 = date('Y-m-d' , strtotime($_POST['finish_actual_unit10']));
			}
		   //finish unit 10

		   //start unit 11
			if($this->input->post('start_plan_unit11') == ''){
				$start_plan_unit11 = '0000-00-00';
				} else {
				$start_plan_unit11 = date('Y-m-d' , strtotime($_POST['start_plan_unit11']));
			}
		   
			if($this->input->post('finish_plan_unit11') == ''){
				$finish_plan_unit11 = '0000-00-00';
				} else {
				$finish_plan_unit11 = date('Y-m-d' , strtotime($_POST['finish_plan_unit11']));
			}
		   
			if($this->input->post('start_actual_unit11') == ''){
				$start_actual_unit11 = '0000-00-00';
				} else {
				$start_actual_unit11 = date('Y-m-d' , strtotime($_POST['start_actual_unit11']));
			}
		   
			if($this->input->post('finish_actual_unit11') == ''){
				$finish_actual_unit11 = '0000-00-00';
				} else {
				$finish_actual_unit11 = date('Y-m-d' , strtotime($_POST['finish_actual_unit11']));
			}
		   //finish unit 11

		   //start unit 12
			if($this->input->post('start_plan_unit12') == ''){
				$start_plan_unit12 = '0000-00-00';
				} else {
				$start_plan_unit12 = date('Y-m-d' , strtotime($_POST['start_plan_unit12']));
			}
		   
			if($this->input->post('finish_plan_unit12') == ''){
				$finish_plan_unit12 = '0000-00-00';
				} else {
				$finish_plan_unit12 = date('Y-m-d' , strtotime($_POST['finish_plan_unit12']));
			}
		   
			if($this->input->post('start_actual_unit12') == ''){
				$start_actual_unit12 = '0000-00-00';
				} else {
				$start_actual_unit12 = date('Y-m-d' , strtotime($_POST['start_actual_unit12']));
			}
		   
			if($this->input->post('finish_actual_unit12') == ''){
				$finish_actual_unit12 = '0000-00-00';
				} else {
				$finish_actual_unit12 = date('Y-m-d' , strtotime($_POST['finish_actual_unit12']));
			}
		   //finish unit 12

		   //start unit 13
			if($this->input->post('start_plan_unit13') == ''){
				$start_plan_unit13 = '0000-00-00';
				} else {
				$start_plan_unit13 = date('Y-m-d' , strtotime($_POST['start_plan_unit13']));
			}
		   
			if($this->input->post('finish_plan_unit13') == ''){
				$finish_plan_unit13 = '0000-00-00';
				} else {
				$finish_plan_unit13 = date('Y-m-d' , strtotime($_POST['finish_plan_unit13']));
			}
		   
			if($this->input->post('start_actual_unit13') == ''){
				$start_actual_unit13 = '0000-00-00';
				} else {
				$start_actual_unit13 = date('Y-m-d' , strtotime($_POST['start_actual_unit13']));
			}
		   
			if($this->input->post('finish_actual_unit13') == ''){
				$finish_actual_unit13 = '0000-00-00';
				} else {
				$finish_actual_unit13 = date('Y-m-d' , strtotime($_POST['finish_actual_unit13']));
			}
		   //finish unit 13

		   //start unit 14
			if($this->input->post('start_plan_unit14') == ''){
				$start_plan_unit14 = '0000-00-00';
				} else {
				$start_plan_unit14 = date('Y-m-d' , strtotime($_POST['start_plan_unit14']));
			}
		   
			if($this->input->post('finish_plan_unit14') == ''){
				$finish_plan_unit14 = '0000-00-00';
				} else {
				$finish_plan_unit14 = date('Y-m-d' , strtotime($_POST['finish_plan_unit14']));
			}
		   
			if($this->input->post('start_actual_unit14') == ''){
				$start_actual_unit14 = '0000-00-00';
				} else {
				$start_actual_unit14 = date('Y-m-d' , strtotime($_POST['start_actual_unit14']));
			}
		   
			if($this->input->post('finish_actual_unit14') == ''){
				$finish_actual_unit14 = '0000-00-00';
				} else {
				$finish_actual_unit14 = date('Y-m-d' , strtotime($_POST['finish_actual_unit14']));
			}
		   //finish unit 14

		   //start unit 15
			if($this->input->post('start_plan_unit15') == ''){
				$start_plan_unit15 = '0000-00-00';
				} else {
				$start_plan_unit15 = date('Y-m-d' , strtotime($_POST['start_plan_unit15']));
			}
		   
			if($this->input->post('finish_plan_unit15') == ''){
				$finish_plan_unit15 = '0000-00-00';
				} else {
				$finish_plan_unit15 = date('Y-m-d' , strtotime($_POST['finish_plan_unit15']));
			}
		   
			if($this->input->post('start_actual_unit15') == ''){
				$start_actual_unit15 = '0000-00-00';
				} else {
				$start_actual_unit15 = date('Y-m-d' , strtotime($_POST['start_actual_unit15']));
			}
		   
			if($this->input->post('finish_actual_unit15') == ''){
				$finish_actual_unit15 = '0000-00-00';
				} else {
				$finish_actual_unit15 = date('Y-m-d' , strtotime($_POST['finish_actual_unit15']));
			}
		   //finish unit 15

		//Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated milestone of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated milestone of '.$nama_project;
		   }
		   //Finish Log Activity Edit

			$data = array('id_project' => $id_project,'nama_milstone' => $nama_milstone,
			'start_plan_unit1' => $start_plan_unit1,'finish_plan_unit1' => $finish_plan_unit1,'start_actual_unit1' => $start_actual_unit1,'finish_actual_unit1' => $finish_actual_unit1,
			'start_plan_unit2' => $start_plan_unit2,'finish_plan_unit2' => $finish_plan_unit2,'start_actual_unit2' => $start_actual_unit2,'finish_actual_unit2' => $finish_actual_unit2,
			'start_plan_unit3' => $start_plan_unit3,'finish_plan_unit3' => $finish_plan_unit3,'start_actual_unit3' => $start_actual_unit3,'finish_actual_unit3' => $finish_actual_unit3,
			'start_plan_unit4' => $start_plan_unit4,'finish_plan_unit4' => $finish_plan_unit4,'start_actual_unit4' => $start_actual_unit4,'finish_actual_unit4' => $finish_actual_unit4,
			'start_plan_unit5' => $start_plan_unit5,'finish_plan_unit5' => $finish_plan_unit5,'start_actual_unit5' => $start_actual_unit5,'finish_actual_unit5' => $finish_actual_unit5,
			'start_plan_unit6' => $start_plan_unit6,'finish_plan_unit6' => $finish_plan_unit6,'start_actual_unit6' => $start_actual_unit6,'finish_actual_unit6' => $finish_actual_unit6,
			'start_plan_unit7' => $start_plan_unit7,'finish_plan_unit7' => $finish_plan_unit7,'start_actual_unit7' => $start_actual_unit7,'finish_actual_unit7' => $finish_actual_unit7,
			'start_plan_unit8' => $start_plan_unit8,'finish_plan_unit8' => $finish_plan_unit8,'start_actual_unit8' => $start_actual_unit8,'finish_actual_unit8' => $finish_actual_unit8,
			'start_plan_unit9' => $start_plan_unit9,'finish_plan_unit9' => $finish_plan_unit9,'start_actual_unit9' => $start_actual_unit9,'finish_actual_unit9' => $finish_actual_unit9,
			'start_plan_unit10' => $start_plan_unit10,'finish_plan_unit10' => $finish_plan_unit10,'start_actual_unit10' => $start_actual_unit10,'finish_actual_unit10' => $finish_actual_unit10,
			'start_plan_unit11' => $start_plan_unit11,'finish_plan_unit11' => $finish_plan_unit11,'start_actual_unit11' => $start_actual_unit11,'finish_actual_unit11' => $finish_actual_unit11,
			'start_plan_unit12' => $start_plan_unit12,'finish_plan_unit12' => $finish_plan_unit12,'start_actual_unit12' => $start_actual_unit12,'finish_actual_unit12' => $finish_actual_unit12,
			'start_plan_unit13' => $start_plan_unit13,'finish_plan_unit13' => $finish_plan_unit13,'start_actual_unit13' => $start_actual_unit13,'finish_actual_unit13' => $finish_actual_unit13,
			'start_plan_unit14' => $start_plan_unit14,'finish_plan_unit14' => $finish_plan_unit14,'start_actual_unit14' => $start_actual_unit14,'finish_actual_unit14' => $finish_actual_unit14,
			'start_plan_unit15' => $start_plan_unit15,'finish_plan_unit15' => $finish_plan_unit15,'start_actual_unit15' => $start_actual_unit15,'finish_actual_unit15' => $finish_actual_unit15,
			
			);
			//$data = array('id_project' => $id_project,'nama_milstone' => $nama_milstone,);
			$data_log = array('activity' => $activity,);
             $update = $this->pmis_model->update_milstone($data, $id_milstone);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/milstone_view?id_project=".$id_project.">";
						 
					} 
			
			
			
        }
    }


    public function milstone_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_milstone = $this->input->get('id_milstone');
            $id_project = $this->input->get('id_project');
			  //Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted milestone of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted milestone of '.$nama_project;
		   }
		   //Finish Log Activity Delete
			$data_log = array('activity' => $activity,);
            $delete = $this->pmis_model->delete_milstone($id_milstone);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/milstone_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }
	
		
	//Kontrak Utama
	public function kontrak_utama_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$id_project = $this->input->get('id_project');
				$data['kontrak'] = $this->pmis_model->tampil_kontrak_utama($id_project);
				$data['mesin'] = $this->pmis_model->cek_mesin($id_project);
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kontrak_utama_view',$data);
				$this->load->view('footer');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();	
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
			   $data['kontrak'] = $this->pmis_model->tampil_kontrak_utama($id_project);
			   $data['mesin'] = $this->pmis_model->cek_mesin($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/kontrak_utama_view',$data);
				$this->load->view('footer');
			}
		}
		
	public function kontrak_utama_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();	
			$id_project = $this->input->get('id_project');
			$data['mesin'] = $this->pmis_model->cek_mesin($id_project);			
			$this->data['title'] = 'Tambah data kontrak_utama :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kontrak_utama_add',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();	
			$id_project = $this->input->get('id_project');
			$data['mesin'] = $this->pmis_model->cek_mesin($id_project);						
			$this->data['title'] = 'Tambah data kontrak_utama :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/kontrak_utama_add',$data);
				$this->load->view('footer_milstone');
			}
		}
		
	public function aksi_kontrak_utama_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		  //print_r ($_POST); exit;
		   
		   $id_project = $this->input->post('id_project');
		   $nama_kontrak_utama = $this->input->post('nama_kontrak_utama');
		   $pelaksana = $this->input->post('pelaksana');
		   $nomor_kontrak = $this->input->post('nomor_kontrak');
		   $jenis_kontrak = $this->input->post('jenis_kontrak');
		   $tanggal_kontrak = date('Y-m-d' , strtotime($_POST['tanggal_kontrak']));
		   $effective_date = date('Y-m-d' , strtotime($_POST['effective_date']));
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   if($id_projetc=61){
		   $tanggal_berakhir1 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir1']));
		   $tanggal_berakhir2 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir2']));
		  
		  if($this->input->post('tanggal_berakhir3') == ''){
				$tanggal_berakhir3 = '0000-00-00';
				} else {
				$tanggal_berakhir3 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir3']));
			}
		  if($this->input->post('tanggal_berakhir4') == ''){
				$tanggal_berakhir4 = '0000-00-00';
				} else {
				$tanggal_berakhir4 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir4']));
			}
			
		  if($this->input->post('tanggal_berakhir5') == ''){
				$tanggal_berakhir5 = '0000-00-00';
				} else {
				$tanggal_berakhir5 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir5']));
			}
		   
		  if($this->input->post('tanggal_berakhir6') == ''){
				$tanggal_berakhir6 = '0000-00-00';
				} else {
				$tanggal_berakhir6 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir6']));
			}
		   
		  if($this->input->post('tanggal_berakhir7') == ''){
				$tanggal_berakhir7 = '0000-00-00';
				} else {
				$tanggal_berakhir7 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir7']));
			}
		   
		  if($this->input->post('tanggal_berakhir8') == ''){
				$tanggal_berakhir8 = '0000-00-00';
				} else {
				$tanggal_berakhir8 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir8']));
			}
		   
		  if($this->input->post('tanggal_berakhir9') == ''){
				$tanggal_berakhir9 = '0000-00-00';
				} else {
				$tanggal_berakhir9 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir9']));
			}
		   
		  if($this->input->post('tanggal_berakhir10') == ''){
				$tanggal_berakhir10 = '0000-00-00';
				} else {
				$tanggal_berakhir10 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir10']));
			}
		   
		  if($this->input->post('tanggal_berakhir11') == ''){
				$tanggal_berakhir11 = '0000-00-00';
				} else {
				$tanggal_berakhir11 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir11']));
			}
		   
		  if($this->input->post('tanggal_berakhir12') == ''){
				$tanggal_berakhir12 = '0000-00-00';
				} else {
				$tanggal_berakhir12 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir12']));
			}
		   
		  if($this->input->post('tanggal_berakhir13') == ''){
				$tanggal_berakhir13 = '0000-00-00';
				} else {
				$tanggal_berakhir13 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir13']));
			}
		   
		  if($this->input->post('tanggal_berakhir14') == ''){
				$tanggal_berakhir14 = '0000-00-00';
				} else {
				$tanggal_berakhir14 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir14']));
			}
		   
		  if($this->input->post('tanggal_berakhir15') == ''){
				$tanggal_berakhir15 = '0000-00-00';
				} else {
				$tanggal_berakhir15 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir15']));
			}
		   
		  //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new main contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new main contract of '.$nama_project;
		   }
		   //Finish Log Activity Add
		   
		   $data = array('id_project' => $id_project,'nama_kontrak_utama' => $nama_kontrak_utama,'pelaksana' => $pelaksana,'nomor_kontrak' => $nomor_kontrak,
		   'jenis_kontrak' => $jenis_kontrak,'tanggal_kontrak' => $tanggal_kontrak,
		   'effective_date' => $effective_date,'nilai_kontrak' => $nilai_kontrak,'tanggal_berakhir1' => $tanggal_berakhir1,'tanggal_berakhir2' => $tanggal_berakhir2,
		   'tanggal_berakhir3' => $tanggal_berakhir3,'tanggal_berakhir4' => $tanggal_berakhir4,'tanggal_berakhir5' => $tanggal_berakhir5,
		   'tanggal_berakhir6' => $tanggal_berakhir6,'tanggal_berakhir7' => $tanggal_berakhir7,
		   'tanggal_berakhir8' => $tanggal_berakhir8,'tanggal_berakhir9' => $tanggal_berakhir9,
		   'tanggal_berakhir10' => $tanggal_berakhir10,'tanggal_berakhir11' => $tanggal_berakhir11,
		   'tanggal_berakhir12' => $tanggal_berakhir12,'tanggal_berakhir13' => $tanggal_berakhir13,
		   'tanggal_berakhir14' => $tanggal_berakhir14,'tanggal_berakhir15' => $tanggal_berakhir15,);
		   
		   $data_log = array('activity' => $activity,);
                    $insert = $this->pmis_model->tambah_data_kontrak_utama($data);
                    if ($insert) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_utama_view?id_project=".$id_project.">";
                    }
		} else {
			$tanggal_berakhir = date('Y-m-d' , strtotime($_POST['tanggal_berakhir']));
		    $tanggal_berakhir2 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir2']));
		 
		 //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new main contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new main contract of '.$nama_project;
		   }
		   //Finish Log Activity Add
		  
		   
		   $data = array('id_project' => $id_project,'nama_kontrak_utama' => $nama_kontrak_utama,'pelaksana' => $pelaksana,'nomor_kontrak' => $nomor_kontrak,
		   'jenis_kontrak' => $jenis_kontrak,'tanggal_kontrak' => $tanggal_kontrak,
		   'effective_date' => $effective_date,'nilai_kontrak' => $nilai_kontrak,'tanggal_berakhir' => $tanggal_berakhir,'tanggal_berakhir2' => $tanggal_berakhir2,);
		   $data_log = array('activity' => $activity,);
                    $insert = $this->pmis_model->tambah_data_kontrak_utama($data);
                    if ($insert) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_utama_view?id_project=".$id_project.">";
                    }
		
		
		}			
					
					
		   
			}
		}
		
    public function kontrak_utama_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_kontrak_utama = $this->input->get('id_kontrak_utama');
            $data['kontr'] = $this->pmis_model->dapat_kontrak_utama($id_kontrak_utama);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
			$id_project = $this->input->get('id_project_');
			$data['mesin'] = $this->pmis_model->cek_mesin($id_project);			
            $this->data['title'] = 'Update kontrak_utama :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/kontrak_utama_edit', $data);
            $this->load->view('footer_milstone');
        }
    }
	
	
    public function aksi_kontrak_utama_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
           $id_kontrak_utama = $this->input->post('id_kontrak_utama');
           $id_project = $this->input->post('id_project');
		   $nama_kontrak_utama = $this->input->post('nama_kontrak_utama');
			$pelaksana = $this->input->post('pelaksana');
		   $jenis_kontrak = $this->input->post('jenis_kontrak');
		   $tanggal_kontrak = date('Y-m-d' , strtotime($_POST['tanggal_kontrak']));
		   $effective_date = date('Y-m-d' , strtotime($_POST['effective_date']));
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   //Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated main contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated main contract of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		  
		
			$tanggal_berakhir1 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir1']));
		   $tanggal_berakhir2 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir2']));
		  
		  if($this->input->post('tanggal_berakhir3') == ''){
				$tanggal_berakhir3 = '0000-00-00';
				} else {
				$tanggal_berakhir3 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir3']));
			}
		  if($this->input->post('tanggal_berakhir4') == ''){
				$tanggal_berakhir4 = '0000-00-00';
				} else {
				$tanggal_berakhir4 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir4']));
			}
		  if($this->input->post('tanggal_berakhir5') == ''){
				$tanggal_berakhir5 = '0000-00-00';
				} else {
				$tanggal_berakhir5 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir5']));
			}
			  
		  if($this->input->post('tanggal_berakhir6') == ''){
				$tanggal_berakhir6 = '0000-00-00';
				} else {
				$tanggal_berakhir6 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir6']));
			}
		   
		  if($this->input->post('tanggal_berakhir7') == ''){
				$tanggal_berakhir7 = '0000-00-00';
				} else {
				$tanggal_berakhir7 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir7']));
			}
		   
		  if($this->input->post('tanggal_berakhir8') == ''){
				$tanggal_berakhir8 = '0000-00-00';
				} else {
				$tanggal_berakhir8 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir8']));
			}
		   
		  if($this->input->post('tanggal_berakhir9') == ''){
				$tanggal_berakhir9 = '0000-00-00';
				} else {
				$tanggal_berakhir9 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir9']));
			}
		   
		  if($this->input->post('tanggal_berakhir10') == ''){
				$tanggal_berakhir10 = '0000-00-00';
				} else {
				$tanggal_berakhir10 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir10']));
			}
		   
		  if($this->input->post('tanggal_berakhir11') == ''){
				$tanggal_berakhir11 = '0000-00-00';
				} else {
				$tanggal_berakhir11 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir11']));
			}
		   
		  if($this->input->post('tanggal_berakhir12') == ''){
				$tanggal_berakhir12 = '0000-00-00';
				} else {
				$tanggal_berakhir12 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir12']));
			}
		   
		  if($this->input->post('tanggal_berakhir13') == ''){
				$tanggal_berakhir13 = '0000-00-00';
				} else {
				$tanggal_berakhir13 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir13']));
			}
		   
		  if($this->input->post('tanggal_berakhir14') == ''){
				$tanggal_berakhir14 = '0000-00-00';
				} else {
				$tanggal_berakhir14 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir14']));
			}
		   
		  if($this->input->post('tanggal_berakhir15') == ''){
				$tanggal_berakhir15 = '0000-00-00';
				} else {
				$tanggal_berakhir15 = date('Y-m-d' , strtotime($_POST['tanggal_berakhir15']));
			}
		   
		   
			$data = array('id_project' => $id_project,'nama_kontrak_utama' => $nama_kontrak_utama,'pelaksana' => $pelaksana,
			'jenis_kontrak' => $jenis_kontrak,'tanggal_kontrak' => $tanggal_kontrak,
			'effective_date' => $effective_date,'nilai_kontrak' => $nilai_kontrak,'tanggal_berakhir1' => $tanggal_berakhir1,'tanggal_berakhir2' => $tanggal_berakhir2,
			'tanggal_berakhir3' => $tanggal_berakhir3,'tanggal_berakhir4' => $tanggal_berakhir4,'tanggal_berakhir5' => $tanggal_berakhir5,
		   'tanggal_berakhir6' => $tanggal_berakhir6,'tanggal_berakhir7' => $tanggal_berakhir7,
		   'tanggal_berakhir8' => $tanggal_berakhir8,'tanggal_berakhir9' => $tanggal_berakhir9,
		   'tanggal_berakhir10' => $tanggal_berakhir10,'tanggal_berakhir11' => $tanggal_berakhir11,
		   'tanggal_berakhir12' => $tanggal_berakhir12,'tanggal_berakhir13' => $tanggal_berakhir13,
		   'tanggal_berakhir14' => $tanggal_berakhir14,'tanggal_berakhir15' => $tanggal_berakhir15,);
            $data_log = array('activity' => $activity,);
			$update = $this->pmis_model->update_kontrak_utama($data, $id_kontrak_utama);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_utama_view?id_project=".$id_project.">";
						 
					} 
		
			}
	}


    public function kontrak_utama_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_kontrak_utama = $this->input->get('id_kontrak_utama');
            $id_project = $this->input->get('id_project');
			  //Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted main contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted main contract of '.$nama_project;
		   }
		   //Finish Log Activity Delete
			
            $delete = $this->pmis_model->delete_kontrak_utama($id_kontrak_utama);
			$data_log = array('activity' => $activity,);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_utama_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }
	
			
	//Kontrak Supervisi
	public function kontrak_supervisi_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();			
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
				$id_project = $this->input->get('id_project');
				$data['kontrak'] = $this->pmis_model->tampil_kontrak_supervisi($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kontrak_supervisi_view',$data);
				$this->load->view('footer');
			} else if ($this->session->userdata('status') == 3) {
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();	
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['kontrak'] = $this->pmis_model->tampil_kontrak_supervisi($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/kontrak_supervisi_view',$data);
				$this->load->view('footer');
			}
		}
		
	public function kontrak_supervisi_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data kontrak_supervisi :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kontrak_supervisi_add',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data kontrak_supervisi :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/kontrak_supervisi_add',$data);
				$this->load->view('footer_milstone');
			}
		}
		
	public function aksi_kontrak_supervisi_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		   //print_r ($_POST); exit;
		   
		   $id_project = $this->input->post('id_project');
		   $nama_kontrak_supervisi = $this->input->post('nama_kontrak_supervisi');
		   $pelaksana = $this->input->post('pelaksana');
		   $nomor = $this->input->post('nomor');
		   $tanggal_ttd = date('Y-m-d' , strtotime($_POST['tanggal_ttd']));
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   $tanggal_berakhir = date('Y-m-d' , strtotime($_POST['tanggal_berakhir']));
		   $status = $this->input->post('status');
		   //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new supervision contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new supervision contract of '.$nama_project;
		   }
		   //Finish Log Activity Add
		   $data = array('id_project' => $id_project,'nama_kontrak_supervisi' => $nama_kontrak_supervisi,'pelaksana' => $pelaksana,
		   'nomor' => $nomor,'tanggal_ttd' => $tanggal_ttd,
		   'nilai_kontrak' => $nilai_kontrak,'tanggal_berakhir' => $tanggal_berakhir,'status' => $status,);
		   $data_log = array('activity' => $activity,);
                    $insert = $this->pmis_model->tambah_data_kontrak_supervisi($data);
                    if ($insert) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_supervisi_view?id_project=".$id_project.">";
                    }
		   
			}
		}
		
    public function kontrak_supervisi_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 ) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_kontrak_supervisi = $this->input->get('id_kontrak_supervisi');
            $data['kontr'] = $this->pmis_model->dapat_kontrak_supervisi($id_kontrak_supervisi);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update kontrak_supervisi :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/kontrak_supervisi_edit', $data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_kontrak_supervisi = $this->input->get('id_kontrak_supervisi');
            $data['kontr'] = $this->pmis_model->dapat_kontrak_supervisi($id_kontrak_supervisi);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update kontrak_supervisi :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp', $data);
            $this->load->view('pmis/kontrak_supervisi_edit', $data);
            $this->load->view('footer_milstone');
			}
		}
	
	
    public function aksi_kontrak_supervisi_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
           $id_kontrak_supervisi = $this->input->post('id_kontrak_supervisi');
           $id_project = $this->input->post('id_project');
		   $nama_kontrak_supervisi = $this->input->post('nama_kontrak_supervisi');
		   $pelaksana = $this->input->post('pelaksana');
		   $nomor = $this->input->post('nomor');
		   $tanggal_ttd = date('Y-m-d' , strtotime($_POST['tanggal_ttd']));
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   $tanggal_berakhir = date('Y-m-d' , strtotime($_POST['tanggal_berakhir']));
		   $status = $this->input->post('status');
		   //Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated supervision contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated supervision contract of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		  
		   $data = array('id_project' => $id_project,'nama_kontrak_supervisi' => $nama_kontrak_supervisi,'pelaksana' => $pelaksana,
		   'nomor' => $nomor,'tanggal_ttd' => $tanggal_ttd,
		   'nilai_kontrak' => $nilai_kontrak,'tanggal_berakhir' => $tanggal_berakhir,'status' => $status,);
            $data_log = array('activity' => $activity,);
			$update = $this->pmis_model->update_kontrak_supervisi($data, $id_kontrak_supervisi);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_supervisi_view?id_project=".$id_project.">";
						 
					} 
        }
    }


    public function kontrak_supervisi_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_kontrak_supervisi = $this->input->get('id_kontrak_supervisi');
            $id_project = $this->input->get('id_project');
			  //Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted supervision contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted supervision contract of '.$nama_project;
		   }
		   //Finish Log Activity Delete
			
            $delete = $this->pmis_model->delete_kontrak_supervisi($id_kontrak_supervisi);
			$data_log = array('activity' => $activity,);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_supervisi_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }
	
				
	//Kontrak Engineering
	public function kontrak_engineering_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
				$id_project = $this->input->get('id_project');
				$data['kontrak'] = $this->pmis_model->tampil_kontrak_engineering($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kontrak_engineering_view',$data);
				$this->load->view('footer');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();	
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['kontrak'] = $this->pmis_model->tampil_kontrak_engineering($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/kontrak_engineering_view',$data);
				$this->load->view('footer');
			}
		}
		
	public function kontrak_engineering_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				$this->data['title'] = 'Tambah data kontrak_engineering :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kontrak_engineering_add',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data kontrak_engineering :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/kontrak_engineering_add',$data);
				$this->load->view('footer_milstone');

			}
		}
		
	public function aksi_kontrak_engineering_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//  print_r ($_POST); exit;
		   
		   $id_project = $this->input->post('id_project');
		   $nama_kontrak_engineering = $this->input->post('nama_kontrak_engineering');
		   $pelaksana = $this->input->post('pelaksana');
		   $nomor = $this->input->post('nomor');
		   $tanggal_ttd = date('Y-m-d' , strtotime($_POST['tanggal_ttd']));
		   $jenis_kontrak = $this->input->post('jenis_kontrak');
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   $tanggal_berakhir = date('Y-m-d' , strtotime($_POST['tanggal_berakhir']));
		   $status = $this->input->post('status');
		   //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new engineering contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new engineering contract of '.$nama_project;
		   }
		   //Finish Log Activity Add
		   $data = array('id_project' => $id_project,'nama_kontrak_engineering' => $nama_kontrak_engineering,'pelaksana' => $pelaksana,
		   'nomor' => $nomor, 'jenis_kontrak' => $jenis_kontrak,'tanggal_ttd' => $tanggal_ttd,
		   'nilai_kontrak' => $nilai_kontrak,'tanggal_berakhir' => $tanggal_berakhir,'status' => $status,);
		   $data_log = array('activity' => $activity,);
                    $insert = $this->pmis_model->tambah_data_kontrak_engineering($data);
                    if ($insert) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_engineering_view?id_project=".$id_project.">";
                    }
		   
			}
		}
		
    public function kontrak_engineering_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2) {
		$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_kontrak_engineering = $this->input->get('id_kontrak_engineering');
            $data['kontr'] = $this->pmis_model->dapat_kontrak_engineering($id_kontrak_engineering);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update kontrak_engineering :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/kontrak_engineering_edit', $data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('status') == 3){
		$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_kontrak_engineering = $this->input->get('id_kontrak_engineering');
            $data['kontr'] = $this->pmis_model->dapat_kontrak_engineering($id_kontrak_engineering);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update kontrak_engineering :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp', $data);
            $this->load->view('pmis/kontrak_engineering_edit', $data);
            $this->load->view('footer_milstone');
		
		}
    }
	
	
    public function aksi_kontrak_engineering_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
           $id_kontrak_engineering = $this->input->post('id_kontrak_engineering');
            $id_project = $this->input->post('id_project');
		   $nama_kontrak_engineering = $this->input->post('nama_kontrak_engineering');
		   $pelaksana = $this->input->post('pelaksana');
		   $nomor = $this->input->post('nomor');
		   $tanggal_ttd = date('Y-m-d' , strtotime($_POST['tanggal_ttd']));
		   $jenis_kontrak = $this->input->post('jenis_kontrak');
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   $tanggal_berakhir = date('Y-m-d' , strtotime($_POST['tanggal_berakhir']));
		   $status = $this->input->post('status');
		   //Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated engineering contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated engineering contract of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		  
		   $data = array('id_project' => $id_project,'nama_kontrak_engineering' => $nama_kontrak_engineering,'pelaksana' => $pelaksana,
		   'nomor' => $nomor, 'jenis_kontrak' => $jenis_kontrak,'tanggal_ttd' => $tanggal_ttd,
		   'nilai_kontrak' => $nilai_kontrak,'tanggal_berakhir' => $tanggal_berakhir,'status' => $status,);
            $data_log = array('activity' => $activity,);
			$update = $this->pmis_model->update_kontrak_engineering($data, $id_kontrak_engineering);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_engineering_view?id_project=".$id_project.">";
						 
					} 
        }
    }


    public function kontrak_engineering_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_kontrak_engineering = $this->input->get('id_kontrak_engineering');
            $id_project = $this->input->get('id_project');
			  
			//Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted engineering contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted engineering contract of '.$nama_project;
		   }
		   //Finish Log Activity Delete
            $delete = $this->pmis_model->delete_kontrak_engineering($id_kontrak_engineering);
			$data_log = array('activity' => $activity,);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_engineering_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }
	
					
	//Kontrak Lokal
	public function kontrak_lokal_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$id_project = $this->input->get('id_project');
				$data['kontrak'] = $this->pmis_model->tampil_kontrak_lokal($id_project);
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kontrak_lokal_view',$data);
				$this->load->view('footer');
			} else if ($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();	
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['kontrak'] = $this->pmis_model->tampil_kontrak_lokal($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/kontrak_lokal_view',$data);
				$this->load->view('footer');
			}
		}
		
	public function kontrak_lokal_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data kontrak_lokal :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kontrak_lokal_add',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
					$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data kontrak_lokal :: ';
					$this->load->view('header', $this->data);
					$this->load->view('sidebar_upp',$data);
					$this->load->view('pmis/kontrak_lokal_add',$data);
					$this->load->view('footer_milstone');
					} 
		}
		
	public function aksi_kontrak_lokal_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		  // print_r ($_POST); exit;
		   
		   $id_project = $this->input->post('id_project');
		   $nama_kontrak_lokal = $this->input->post('nama_kontrak_lokal');
		   $pelaksana = $this->input->post('pelaksana');
		   $nomor = $this->input->post('nomor');
		   $tanggal_ttd = date('Y-m-d' , strtotime($_POST['tanggal_ttd']));
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   $tanggal_berakhir = date('Y-m-d' , strtotime($_POST['tanggal_berakhir']));
		  //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new local contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new local contract of '.$nama_project;
		   }
		   //Finish Log Activity Add
		   
		   $data = array('id_project' => $id_project,'nama_kontrak_lokal' => $nama_kontrak_lokal,'pelaksana' => $pelaksana,
		   'nomor' => $nomor,'tanggal_ttd' => $tanggal_ttd,
		   'nilai_kontrak' => $nilai_kontrak,'tanggal_berakhir' => $tanggal_berakhir,);
		   $data_log = array('activity' => $activity,);
                    $insert = $this->pmis_model->tambah_data_kontrak_lokal($data);
                    if ($insert) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_lokal_view?id_project=".$id_project.">";
                    }
		   
			}
		}
		
    public function kontrak_lokal_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_kontrak_lokal = $this->input->get('id_kontrak_lokal');
            $data['kontr'] = $this->pmis_model->dapat_kontrak_lokal($id_kontrak_lokal);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update kontrak_lokal :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/kontrak_lokal_edit', $data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('status') == 3){
		$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_kontrak_lokal = $this->input->get('id_kontrak_lokal');
            $data['kontr'] = $this->pmis_model->dapat_kontrak_lokal($id_kontrak_lokal);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update kontrak_lokal :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp', $data);
            $this->load->view('pmis/kontrak_lokal_edit', $data);
            $this->load->view('footer_milstone');
		}
    }
	
	
    public function aksi_kontrak_lokal_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
           $id_kontrak_lokal = $this->input->post('id_kontrak_lokal');
            $id_project = $this->input->post('id_project');
		   $nama_kontrak_lokal = $this->input->post('nama_kontrak_lokal');
		   $pelaksana = $this->input->post('pelaksana');
		   $nomor = $this->input->post('nomor');
		   $tanggal_ttd = date('Y-m-d' , strtotime($_POST['tanggal_ttd']));
		   $nilai_kontrak = $this->input->post('nilai_kontrak');
		   $tanggal_berakhir = date('Y-m-d' , strtotime($_POST['tanggal_berakhir']));
		  //Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated local contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated local contract of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		  
		   
		   $data = array('id_project' => $id_project,'nama_kontrak_lokal' => $nama_kontrak_lokal,'pelaksana' => $pelaksana,
		   'nomor' => $nomor,'tanggal_ttd' => $tanggal_ttd,
		   'nilai_kontrak' => $nilai_kontrak,'tanggal_berakhir' => $tanggal_berakhir,);
            $data_log = array('activity' => $activity,);
			$update = $this->pmis_model->update_kontrak_lokal($data, $id_kontrak_lokal);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_lokal_view?id_project=".$id_project.">";
						 
					} 
        }
    }


    public function kontrak_lokal_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_kontrak_lokal = $this->input->get('id_kontrak_lokal');
            $id_project = $this->input->get('id_project');
			  //Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted local contract of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted local contract of '.$nama_project;
		   }
		   //Finish Log Activity Delete
			
            $delete = $this->pmis_model->delete_kontrak_lokal($id_kontrak_lokal);
			$data_log = array('activity' => $activity,);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kontrak_lokal_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }
	
					
	//Gallery
	public function gallery_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();		

			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));			
			$id_project = $this->input->get('id_project');
				$data['gallery'] = $this->pmis_model->tampil_gallery($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/gallery_view',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				$id_project = $this->input->get('id_project');
				$data['gallery'] = $this->pmis_model->tampil_gallery($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/gallery_view',$data);
				$this->load->view('footer_milstone');
			}
		}
		
	public function gallery_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data gallery :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/gallery_add',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data gallery :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/gallery_add',$data);
				$this->load->view('footer_milstone');
			
			}
		}
		
	public function aksi_gallery_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		 //print_r ($_POST); 
		//exit;
		  $id_project = $this->input->post('id_project');
		   $nama_foto = $this->input->post('nama_foto');
		   $tgl_foto = date('Y-m-d' , strtotime($_POST['tgl_foto']));
		
		$pathToUpload = './public/assets/images/gallery/' . $id_project;
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}

		$config['upload_path'] = './public/assets/images/gallery/'. $id_project;; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10048'; //maksimum besar file 2M
        
		$this->load->library('upload', $config);

//Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' uploaded new picture of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' uploaded new picture of '.$nama_project;
		   }
		   //Finish Log Activity Add
		   
			if ( ! $this->upload->do_upload('upload_foto')){
				$error = array('error' => $this->upload->display_errors());
					echo "<script>alert('Upload Gambar Gagal ! ')</script>";
					echo $error;
				} else {
					$data = array('upload_data' => $this->upload->data());
					//	echo "<script>alert('Upload Gambar Berhasil ! ')</script>";
					$gbr = $this->upload->data();
						$data = array(
						  'id_project' =>$id_project,
						  'nama_foto' =>$nama_foto,
						  'upload_foto' =>$gbr['file_name'],
						  'tipe_foto' =>$gbr['file_type'],
						  'tgl_foto' =>$tgl_foto
						);
						$data_log = array('activity' => $activity,);
						$this->pmis_model->get_insert($data); 
						$insert = $this->pmis_model->tambah_data_log_activity($data_log);
						echo "<script>alert('Upload Gambar Berhasil ! ')</script>";
						echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/gallery_view?id_project=".$id_project.">";
				}
			}
		}
		
    	
	public function gallery_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
	 
       if ($this->session->userdata('status') == 2) {
	   $id_gallery = $this->input->get('id_gallery');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				$data['gallery'] = $this->pmis_model->dapat_gallery($id_gallery);
				$this->data['title'] = 'Ubah data gallery :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/gallery_edit',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
			$id_gallery = $this->input->get('id_gallery');
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$data['gallery'] = $this->pmis_model->dapat_gallery($id_gallery);
				$this->data['title'] = 'Ubah data gallery :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/gallery_edit',$data);
				$this->load->view('footer_milstone');
			
			}
		}
		
		public function aksi_gallery_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
			$id_gallery = $this->input->post('id_gallery');
			$id_project = $this->input->post('id_project');
			$tgl_foto = date('Y-m-d' , strtotime($_POST['tgl_foto']));
		  	//Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated gallery of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated gallery of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		   
		   $data = array('id_project' => $id_project,'id_gallery' => $id_gallery,'tgl_foto' => $tgl_foto,);
            $data_log = array('activity' => $activity,);
			$update = $this->pmis_model->update_data_gallery($data, $id_gallery);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/gallery_view?id_project=".$id_project.">";
						 
					} 
        }
    }

    public function gallery_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_gallery = $this->input->get('id_gallery');
            $id_project = $this->input->get('id_project');
			  //Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted picture of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted picture of '.$nama_project;
		   }
		   //Finish Log Activity Delete
			
            $delete = $this->pmis_model->delete_gallery($id_gallery);
			$data_log = array('activity' => $activity,);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Gambar')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/gallery_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }	
											
	//Progress Gallery
	public function progress_gallery_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();	
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));			
			$id_project = $this->input->get('id_project');
				$data['progress_gallery'] = $this->pmis_model->tampil_progress_gallery($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/progress_gallery_view',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();	
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['progress_gallery'] = $this->pmis_model->tampil_progress_gallery($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/progress_gallery_view',$data);
				$this->load->view('footer_milstone');
			}
		}
		
	public function progress_gallery_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data progress gallery :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/progress_gallery_add',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data progress gallery :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/progress_gallery_add',$data);
				$this->load->view('footer_milstone');
			
			}
		}
		
	public function aksi_progress_gallery_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		 //print_r ($_POST); 
		//exit;
		  $id_project = $this->input->post('id_project');
		   $nama_foto = $this->input->post('nama_foto');
		   $tgl_foto = date('Y-m-d' , strtotime($_POST['tgl_foto']));
		
		$pathToUpload = './public/assets/images/progress_gallery/' . $id_project;
		if ( ! file_exists($pathToUpload) )
		{
			$create = mkdir($pathToUpload, 0777);
			
			if ( ! $create )
			return;
		}

		$config['upload_path'] = './public/assets/images/progress_gallery/'. $id_project;; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10048'; //maksimum besar file 2M
        
		$this->load->library('upload', $config);	

 //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' uploaded new picture on progress gallery of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' uploaded new picture on progress gallery '.$nama_project;
		   }
		   //Finish Log Activity Add	
		   
			if ( ! $this->upload->do_upload('upload_foto')){
				$error = array('error' => $this->upload->display_errors());
					echo "<script>alert('Upload Gambar Gagal ! ')</script>";
					echo $error;
				} else {
					$data = array('upload_data' => $this->upload->data());
					//	echo "<script>alert('Upload Gambar Berhasil ! ')</script>";
					$gbr = $this->upload->data();
						$data = array(
						  'id_project' =>$id_project,
						  'nama_foto' =>$nama_foto,
						  'upload_foto' =>$gbr['file_name'],
						  'tipe_foto' =>$gbr['file_type'],
						  'tgl_foto' =>$tgl_foto
						);
		 $data_log = array('activity' => $activity,);
						$this->pmis_model->get_insert_progress_gallery($data); 
$insert = $this->pmis_model->tambah_data_log_activity($data_log);
						echo "<script>alert('Upload Gambar Berhasil ! ')</script>";
						echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/progress_gallery_view?id_project=".$id_project.">";
				}
			}
		}
		
    	
	public function progress_gallery_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
	 
       if ($this->session->userdata('status') == 2) {
	   $id_progress_gallery = $this->input->get('id_progress_gallery');
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				$data['progress_gallery'] = $this->pmis_model->dapat_progress_gallery($id_progress_gallery);
				$this->data['title'] = 'Ubah data progress gallery :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/progress_gallery_edit',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
			$id_progress_gallery = $this->input->get('id_progress_gallery');
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$data['progress_gallery'] = $this->pmis_model->dapat_progress_gallery($id_progress_gallery);
				$this->data['title'] = 'Ubah data progress gallery :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/progress_gallery_edit',$data);
				$this->load->view('footer_milstone');
			
			}
		}
		
		public function aksi_progress_gallery_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
			$id_progress_gallery = $this->input->post('id_progress_gallery');
			$id_project = $this->input->post('id_project');
			$tgl_foto = date('Y-m-d' , strtotime($_POST['tgl_foto']));
		  		//Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated progress gallery of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated progress gallery of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		   
		   $data = array('id_project' => $id_project,'id_progress_gallery' => $id_progress_gallery,'tgl_foto' => $tgl_foto,);
            $data_log = array('activity' => $activity,);
			$update = $this->pmis_model->update_data_progress_gallery($data, $id_progress_gallery);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/progress_gallery_view?id_project=".$id_project.">";
						 
					} 
        }
    }

    public function progress_gallery_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_progress_gallery = $this->input->get('id_progress_gallery');
            $id_project = $this->input->get('id_project');
			  //Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted progress gallery of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted progress gallery of '.$nama_project;
		   }
		   //Finish Log Activity Delete
			$data_log = array('activity' => $activity,);
            $delete = $this->pmis_model->delete_progress_gallery($id_progress_gallery);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Gambar')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/progress_gallery_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }	
						
	//progress
	public function progress_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['progress'] = $this->pmis_model->tampil_progress($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/progress_view',$data);
				$this->load->view('footer');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();	
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['progress'] = $this->pmis_model->tampil_progress($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/progress_view',$data);
				$this->load->view('footer');
			}
		}
		
	public function progress_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data progress :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/progress_add',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				$this->data['title'] = 'Tambah data progress :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/progress_add',$data);
				$this->load->view('footer_milstone');
			}
		}
		
	public function aksi_progress_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		  //print_r ($_POST); exit;
		   
		   $id_project = $this->input->post('id_project');
		   $bulan = $this->input->post('bulan');
		   $tahun = $this->input->post('tahun');
		   $nilai_e = $this->input->post('nilai_e');
		   $nilai_p = $this->input->post('nilai_p');
		   $nilai_c = $this->input->post('nilai_c');
		  // $total_e = $this->input->post('total_e');
		 //  $total_p = $this->input->post('total_p');
		  // $total_c = $this->input->post('total_c');
		  $total_plan = $this->input->post('total_plan');
		  $total = $this->input->post('total');
		  //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new progress of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new progress of '.$nama_project;
		   }
		   //Finish Log Activity Add
		
		   
		   $data = array('id_project' => $id_project,'tahun' => $tahun,'bulan' => $bulan,'individual_e' => $nilai_e,'individual_p' => $nilai_p,'individual_c' => $nilai_c,
		   'total' => $total,'total_plan' => $total_plan,);
		   $data_log = array('activity' => $activity,);
                    $insert = $this->pmis_model->tambah_data_progress($data);
                    if ($insert) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/progress_view?id_project=".$id_project.">";
                    }
		   
			}
		}
		
    public function progress_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_progress = $this->input->get('id_progress');
            $data['progress'] = $this->pmis_model->dapat_progress($id_progress);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update progress :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/progress_edit', $data);
            $this->load->view('footer_milstone');
        }
    }
	
	
    public function aksi_progress_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
           $id_progress = $this->input->post('id_progress');
           $id_project = $this->input->post('id_project');
		   $bulan = $this->input->post('bulan');
		   $nilai_e = $this->input->post('nilai_e');
		   $nilai_p = $this->input->post('nilai_p');
		   $nilai_c = $this->input->post('nilai_c');
		  // $total_e = $this->input->post('total_e');
		  // $total_p = $this->input->post('total_p');
		   //$total_c = $this->input->post('total_c');
		   $total_plan = $this->input->post('total_plan');
		   $total = $this->input->post('total');
		  //Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated progress of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated progress of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		  
		     $data = array('id_project' => $id_project,'bulan' => $bulan,'individual_e' => $nilai_e,'individual_p' => $nilai_p,'individual_c' => $nilai_c,
		   'total' => $total,'total_plan' => $total_plan,);
            $data_log = array('activity' => $activity,);
			$update = $this->pmis_model->update_progress($data, $id_progress);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/progress_view?id_project=".$id_project.">";
						 
					} 
        }
    }


    public function progress_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_progress = $this->input->get('id_progress');
            $id_project = $this->input->get('id_project');
			  //Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted progress of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted progress of '.$nama_project;
		   }
		   //Finish Log Activity Delete
			$data_log = array('activity' => $activity,);
            $delete = $this->pmis_model->delete_progress($id_progress);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/progress_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }	
		
						
	//Issue
	public function issue_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['issue'] = $this->pmis_model->tampil_issue($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/issue_view',$data);
				$this->load->view('footer');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();	
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['issue'] = $this->pmis_model->tampil_issue($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/issue_view',$data);
				$this->load->view('footer');

			}
		}
		
	public function issue_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				$this->data['title'] = 'Tambah data issue :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/issue_add',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();			
			$this->data['title'] = 'Tambah data issue :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/issue_add',$data);
				$this->load->view('footer_milstone');

			}
		}
		
	public function aksi_issue_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		  // print_r ($_POST); exit;
		   
		   $id_project = $this->input->post('id_project');
		   $issue_description = $this->input->post('issue_description');
		   $pelaksana = $this->input->post('pelaksana');
		   $action = $this->input->post('action');
		   $status = $this->input->post('status');
		   $target_resolved_date = date('Y-m-d' , strtotime($_POST['target_resolved_date']));
		  //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new issue of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new issue of '.$nama_project;
		   }
		   //Finish Log Activity Add
		  
		   
		   $data = array('id_project' => $id_project,'issue_description' => $issue_description,'target_resolved_date' => $target_resolved_date,'action' => $action,
		   'status' => $status,);
		   $data_log = array('activity' => $activity,);
                    $insert = $this->pmis_model->tambah_data_issue($data);
                    if ($insert) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/issue_view?id_project=".$id_project.">";
                    }
		   
			}
		}
		
    public function issue_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2) {
		$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_issue = $this->input->get('id_issue');
            $data['issue'] = $this->pmis_model->dapat_issue($id_issue);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update issue :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/issue_edit', $data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_issue = $this->input->get('id_issue');
            $data['issue'] = $this->pmis_model->dapat_issue($id_issue);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update issue :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp', $data);
            $this->load->view('pmis/issue_edit', $data);
            $this->load->view('footer_milstone');
		}
    }
	
	
    public function aksi_issue_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
           $id_issue = $this->input->post('id_issue');
           $id_project = $this->input->post('id_project');
		   $issue_description = $this->input->post('issue_description');
		   $pelaksana = $this->input->post('pelaksana');
		   $action = $this->input->post('action');
		   $status = $this->input->post('status');
		   $target_resolved_date = date('Y-m-d' , strtotime($_POST['target_resolved_date']));
		  
		  //Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').'('.$nama_upp.')'.' updated issue of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').'('.$nama_upp.')'.' updated issue of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		  
		  
		   
		   $data = array('id_project' => $id_project,'issue_description' => $issue_description,'target_resolved_date' => $target_resolved_date,
		   'status' => $status,'action' => $action,);
            
			$data_log = array('activity' => $activity,);
			$update = $this->pmis_model->update_issue($data, $id_issue);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/issue_view?id_project=".$id_project.">";
						 
					} 
        }
    }


    public function issue_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_issue = $this->input->get('id_issue');
            $id_project = $this->input->get('id_project');
			  //Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted issue of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted issue of '.$nama_project;
		   }
		   //Finish Log Activity Delete
			$data_log = array('activity' => $activity,);
            $delete = $this->pmis_model->delete_issue($id_issue);
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/issue_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }	
				

					
	//Daily Activity
	public function daily_activity_view() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				$data['daily_activity'] = $this->pmis_model->tampil_daily_activity($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/daily_activity_view',$data);
				$this->load->view('footer_project');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				
			$data['dapat_status'] = $this->pmis_model->dapat_status($this->session->userdata('status'));	
				$id_project = $this->input->get('id_project');
				$data['daily_activity'] = $this->pmis_model->tampil_daily_activity($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/daily_activity_view',$data);
				$this->load->view('footer_project');

			}
		}
		
	
	
	public function daily_activity_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				$this->data['title'] = 'Tambah data Daily Activity :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/daily_activity_add',$data);
				$this->load->view('footer_project');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
				$this->data['title'] = 'Tambah data Daily Activity :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/daily_activity_add',$data);
				$this->load->view('footer_project');

			}
		}
		
	public function aksi_daily_activity_add() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		   //print_r ($_POST); exit;
		   $tgl= date('d-m-Y');
		   $id_project = $this->input->post('id_project');
		   $milstone = $this->input->post('milstone');
		   $pekerjaan = $this->input->post('pekerjaan');
		   $tindak_lanjut = $this->input->post('tindak_lanjut');
		   $kendala = $this->input->post('kendala');
		   $status = $this->input->post('status');
		   $date_activity = date('Y-m-d' , strtotime($tgl));
		   //Start Log Activity Add
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new daily activity of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' created new daily activity '.$nama_project;
		   }
		   //Finish Log Activity Add

		  
		   
		   $data = array('id_project' => $id_project,'date_activity' => $date_activity,'milstone' => $milstone,
		   'tindak_lanjut' => $tindak_lanjut,'pekerjaan' => $pekerjaan,'kendala' => $kendala,
		   'status' => $status,);
		   $data_log = array('activity' => $activity,);
                    $insert = $this->pmis_model->tambah_data_daily_activity($data);
                    if ($insert) {
						$insert = $this->pmis_model->tambah_data_log_activity($data_log);
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/daily_activity_view?id_project=".$id_project.">";
                    }
		   
			}
		}
		
    public function daily_activity_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2) {
		$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_daily_activity = $this->input->get('id_daily_activity');
            $data['daily_activity'] = $this->pmis_model->dapat_daily_activity($id_daily_activity);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update daily_activity :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/daily_activity_edit', $data);
            $this->load->view('footer_milstone');
        } else if ($this->session->userdata('status') == 3){
		$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$id_daily_activity = $this->input->get('id_daily_activity');
            $data['daily_activity'] = $this->pmis_model->dapat_daily_activity($id_daily_activity);
            $data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
            $this->data['title'] = 'Update daily_activity :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp', $data);
            $this->load->view('pmis/daily_activity_edit', $data);
            $this->load->view('footer_milstone');
		}
    }
	
	
    public function aksi_daily_activity_edit() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
		
           $id_daily_activity = $this->input->post('id_daily_activity');
           $id_project = $this->input->post('id_project');
		   $milstone = $this->input->post('milstone');
		   $pekerjaan = $this->input->post('pekerjaan');
		   $tindak_lanjut = $this->input->post('tindak_lanjut');
		   $kendala = $this->input->post('kendala');
		   $status = $this->input->post('status');
		   $date_activity = $this->input->post('date_activity');
		  //Start Log Activity Edit
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated daily activity of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' updated daily activity of '.$nama_project;
		   }
		   //Finish Log Activity Edit
		  
		   
		   $data = array('id_project' => $id_project,'date_activity' => $date_activity,'milstone' => $milstone,
		   'tindak_lanjut' => $tindak_lanjut,'pekerjaan' => $pekerjaan,'kendala' => $kendala,
		   'status' => $status,);
            $data_log = array('activity' => $activity,);	
			$update = $this->pmis_model->update_daily_activity($data, $id_daily_activity);
					if ($update) {
					$insert = $this->pmis_model->tambah_data_log_activity($data_log);
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/daily_activity_view?id_project=".$id_project.">";
						 
					} 
        }
    }


    public function daily_activity_delete() {
			$data['nama_admin'] = $this->session->userdata('nama_admin');
			$data['username'] = $this->session->userdata('username');
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_daily_activity = $this->input->get('id_daily_activity');
            $id_project = $this->input->get('id_project');
			  
			//Start Log Activity Delete
		   if($this->session->userdata('id_upp') ==10){
			$nama_upp ='Administrator';
			$cek_nama_project = $this->pmis_model->cek_nama_project($id_project);
			$nama_project = $cek_nama_project['nama_project']; 
			$activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted daily activity of '.$nama_project;
		   } else {
			   $cek_nama_upp = $this->pmis_model->cek_nama_upp($this->session->userdata('id_upp'));
			   $nama_upp = $cek_nama_upp['nama_upp'];  
			   $nama_project = $cek_nama_upp['nama_project']; 
			   $activity = $this->session->userdata('nama_admin').' ('.$nama_upp.')'.' deleted daily activity of '.$nama_project;
		   }
		   //Finish Log Activity Delete
            $delete = $this->pmis_model->delete_daily_activity($id_daily_activity);
			$data_log = array('activity' => $activity,);	
            if ($delete) {
			$insert = $this->pmis_model->tambah_data_log_activity($data_log);
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/daily_activity_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }	
		
						
	//kronologis
	public function kronologis_view() {
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 4) {
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$id_project = $this->input->get('id_project');
			   $data['kronologis'] = $this->pmis_model->tampil_kronologis($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kronologis_view',$data);
				$this->load->view('footer');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
				$id_project = $this->input->get('id_project');
			   $data['kronologis'] = $this->pmis_model->tampil_kronologis($id_project);
				$this->data['title'] = 'Beranda :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/kronologis_view',$data);
				$this->load->view('footer');
			}
		}
		
	public function kronologis_add() {
       if ($this->session->userdata('status') == 2) {
			  $data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();	
				$id_project = $this->input->get('id_project');
				$data['issue'] = $this->pmis_model->tampil_issue($id_project);
				$this->data['title'] = 'Tambah data kronologis :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar',$data);
				$this->load->view('pmis/kronologis_add',$data);
				$this->load->view('footer_milstone');
			} else if ($this->session->userdata('status') == 3){
				$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();	
				$id_project = $this->input->get('id_project');
				$data['issue'] = $this->pmis_model->tampil_issue($id_project);
				$this->data['title'] = 'Tambah data kronologis :: ';
				$this->load->view('header', $this->data);
				$this->load->view('sidebar_upp',$data);
				$this->load->view('pmis/kronologis_add',$data);
				$this->load->view('footer_milstone');
			}
		}
		
	public function aksi_kronologis_add() {
       if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		  //print_r ($_POST); exit;
		   
		   $id_project = $this->input->post('id_project');
		   $id_issue = $this->input->post('id_issue');
		   $kronologis_tindak_lanjut = $this->input->post('kronologis_tindak_lanjut');
		   $data = array('id_project' => $id_project,'id_issue' => $id_issue,'kronologis_tindak_lanjut' => $kronologis_tindak_lanjut,);
                    $insert = $this->pmis_model->tambah_data_kronologis($data);
                    if ($insert) {
                        echo "<script>alert('Berhasil Menambah Data')</script>";
                        echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kronologis_view?id_project=".$id_project.">";
                    }
		   
			}
		}
		
    public function kronologis_edit() {
		if ($this->session->userdata('status') == 2) {
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
			$id_kronologis = $this->input->get('id_kronologis');
            $data['kronologis'] = $this->pmis_model->dapat_kronologis($id_kronologis);
            $this->data['title'] = 'Update kronologis :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar', $data);
            $this->load->view('pmis/kronologis_edit', $data);
            $this->load->view('footer_milstone');
        } else if($this->session->userdata('status') == 3){
			$data['menu1_pln'] = $this->pmis_model->get_module1_pln();
			$data['menu1_ipp'] = $this->pmis_model->get_module1_ipp();
			$data['menu1_unallocated'] = $this->pmis_model->get_module1_unallocated();
			$data['menu2_pln'] = $this->pmis_model->get_module2_pln();
			$data['menu2_ipp'] = $this->pmis_model->get_module2_ipp();
			$data['menu2_unallocated'] = $this->pmis_model->get_module2_unallocated();
			$data['menu3_pln'] = $this->pmis_model->get_module3_pln();
			$data['menu3_ipp'] = $this->pmis_model->get_module3_ipp();
			$data['menu3_unallocated'] = $this->pmis_model->get_module3_unallocated();
			$data['menu4_pln'] = $this->pmis_model->get_module4_pln();
			$data['menu4_ipp'] = $this->pmis_model->get_module4_ipp();
			$data['menu4_unallocated'] = $this->pmis_model->get_module4_unallocated();
			$data['menu5_pln'] = $this->pmis_model->get_module5_pln();
			$data['menu5_ipp'] = $this->pmis_model->get_module5_ipp();
			$data['menu5_unallocated'] = $this->pmis_model->get_module5_unallocated();
			$data['menu6_pln'] = $this->pmis_model->get_module6_pln();
			$data['menu6_ipp'] = $this->pmis_model->get_module6_ipp();
			$data['menu6_unallocated'] = $this->pmis_model->get_module6_unallocated();
			$data['menu7_pln'] = $this->pmis_model->get_module7_pln();
			$data['menu7_unallocated'] = $this->pmis_model->get_module7_unallocated();
			$data['menu7_ipp'] = $this->pmis_model->get_module7_ipp();
			$data['menu8_pln'] = $this->pmis_model->get_module8_pln();
			$data['menu8_ipp'] = $this->pmis_model->get_module8_ipp();
			$data['menu8_unallocated'] = $this->pmis_model->get_module8_unallocated();
			$data['tampilkan_proyek_pln_peusangan'] = $this->pmis_model->tampilkan_proyek_pln_peusangan();
			$data['tampilkan_proyek_pln_pltupangsus34'] = $this->pmis_model->tampilkan_proyek_pln_pltupangsus34();
			$data['tampilkan_proyek_pln_pltutenayan'] = $this->pmis_model->tampilkan_proyek_pln_pltutenayan();
			$data['tampilkan_proyek_pln_pltmgarun'] = $this->pmis_model->tampilkan_proyek_pln_pltmgarun();
			$data['tampilkan_proyek_pln_pltubabel3'] = $this->pmis_model->tampilkan_proyek_pln_pltubabel3();
			$id_kronologis = $this->input->get('id_kronologis');
            $data['kronologis'] = $this->pmis_model->dapat_kronologis($id_kronologis);
            $this->data['title'] = 'Update kronologis :: ';
            $this->load->view('header', $this->data);
            $this->load->view('sidebar_upp', $data);
            $this->load->view('pmis/kronologis_edit', $data);
            $this->load->view('footer_milstone');
		}
    }
	
	
    public function aksi_kronologis_edit() {
		if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
		//print_r($_GET);  
		//print_r($_POST);  
		//exit;
           $id_kronologis = $this->input->post('id_kronologis');
          
		   $id_project = $this->input->post('id_project');
		   $id_issue = $this->input->post('id_issue');
		   $kronologis_tindak_lanjut = $this->input->post('kronologis_tindak_lanjut');
		   $data = array('id_project' => $id_project,'id_issue' => $id_issue,'kronologis_tindak_lanjut' => $kronologis_tindak_lanjut,);
            
			$update = $this->pmis_model->update_kronologis($data, $id_kronologis);
					if ($update) {
					echo "<script>alert('Berhasil Mengubah Data')</script>";
					echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kronologis_view?id_project=".$id_project.">";
						 
					} 
        }
    }


    public function kronologis_delete() {
         if ($this->session->userdata('status') == 2 || $this->session->userdata('status') == 3) {
            $id_kronologis = $this->input->get('id_kronologis');
            $id_project = $this->input->get('id_project');
			  
			
            $delete = $this->pmis_model->delete_kronologis($id_kronologis);
            if ($delete) {
			
            echo "<script>alert('Berhasil Menghapus Data')</script>";
			echo "<meta http-equiv=refresh content=0;url=" . base_url() . "pmis/kronologis_view?id_project=".$_GET['id_project_'].">";
				
            }
        }
    }
	
			

	
	}