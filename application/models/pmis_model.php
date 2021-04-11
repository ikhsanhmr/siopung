<?php

class pmis_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
	
    public function cek_user($username, $password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('USERNAME', $username);
        $this->db->where('PASSWORD', $password);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }
	
	 public function last_login($last_login, $id_upp) {
        $update_last_login =  $this->db->query("UPDATE user SET last_login=now() WHERE id_upp=$id_upp");
        return $update_last_login;
    }
	
	 public function ip_last_login($ip_last_login, $id_upp) {
        $update_ip_last_login =  $this->db->query("UPDATE user SET ip_last_login='$ip_last_login' WHERE id_upp=$id_upp");
        return $update_ip_last_login;
    }
	
	 public function browser_last_login($browser_last_login, $id_upp) {
        $update_browser =  $this->db->query("UPDATE user SET browser='$browser_last_login' WHERE id_upp=$id_upp");
        return $update_browser;
    }
	
	
	
	public function cek_general_information($id_project) {
      $get = $this->db->query("SELECT *
                               FROM general_information a
                               WHERE a.id_project =$id_project");

       if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	public function cek_nama_project($id_project) {
      $get = $this->db->query("SELECT 
							  nama_project 
							FROM
							  project 
							WHERE id_project = $id_project ");

     
            return $get->row_array();
        
    }
	
	public function cek_nama_upp($id_upp) {
      $get = $this->db->query("SELECT 
							  a.nama_upp,
							  b.nama_project 
							FROM
							  upp a,
							  project b 
							WHERE a.`id_upp` = b.`id_upp` 
							  AND a.id_upp = $id_upp ");

     
            return $get->row_array();
        
    }
	
	public function tambah_data_log_activity($data) {
        $input = $this->db->insert('log_activity', $data);
        return $input;
    }
	//Index
	
	function tampilkan_proyek_pln_peusangan() {
        $get = $this->db->query("SELECT 
								  a.total,
								  a.`bulan`,
								  a.`tahun`,
								  b.`nama_project` 
								FROM
								  progress a,
								  project b 
								WHERE a.id_project = b.id_project 
								  AND b.kode_project = 'PLN' 
								  AND a.`tahun` = 2019
								  AND b.`id_project` = 16 ");
        return $get;
    }
	
	function tampilkan_proyek_pln_pltupangsus34() {
        $get = $this->db->query("SELECT 
								  a.total,
								  a.`bulan`,
								  a.`tahun`,
								  b.`nama_project` 
								FROM
								  progress a,
								  project b 
								WHERE a.id_project = b.id_project 
								  AND b.kode_project = 'PLN' 
								  AND a.`tahun` = 2019
								  AND b.`id_project` = 23 ");
        return $get;
    }
	
	function tampilkan_proyek_pln_pltutenayan() {
        $get = $this->db->query("SELECT 
								  a.total,
								  a.`bulan`,
								  a.`tahun`,
								  b.`nama_project` 
								FROM
								  progress a,
								  project b 
								WHERE a.id_project = b.id_project 
								  AND b.kode_project = 'PLN' 
								  AND a.`tahun` = 2019
								  AND b.`id_project` = 6 ");
        return $get;
    }
	
	function tampilkan_proyek_pln_pltmgarun() {
        $get = $this->db->query("SELECT 
								  a.total,
								  a.`bulan`,
								  a.`tahun`,
								  b.`nama_project` 
								FROM
								  progress a,
								  project b 
								WHERE a.id_project = b.id_project 
								  AND b.kode_project = 'PLN' 
								  AND a.`tahun` = 2019
								  AND b.`id_project` = 31 ");
        return $get;
    }
	
	function tampilkan_proyek_pln_pltubabel3() {
        $get = $this->db->query("SELECT 
								  a.total,
								  a.`bulan`,
								  a.`tahun`,
								  b.`nama_project` 
								FROM
								  progress a,
								  project b 
								WHERE a.id_project = b.id_project 
								  AND b.kode_project = 'PLN' 
								  AND a.`tahun` = 2019
								  AND b.`id_project` = 8 ");
        return $get;
    }
	
	function tampilkan_cod($lastmonth) {
	$bln=date('m');
	$bln_last = $bln - 1 ;
	
        $get = $this->db->query("SELECT 
  a.kontraktor,
  a.`id_project`,
  c.`tanggal_berakhir1`,
  c.`tanggal_berakhir2`,
  b.total_plan,
  b.total,
  ROUND(b.total_plan - b.total, 2) AS deviasi,
  (SELECT 
    nama_project 
  FROM
    project 
  WHERE id_project = a.id_project) AS nama_proyek 
FROM
  general_information a,
  progress b,
  kontrak_utama c 
WHERE a.target_cod > CURDATE() 
  AND a.target_cod IS NOT NULL 
  AND a.target_cod != '1970-01-01' 
  AND a.id_project = b.`id_project` 
  AND a.id_project = c.`id_project` 
  AND b.tahun =  YEAR(CURDATE())
  AND b.bulan = $bln_last 
GROUP BY nama_proyek 
ORDER BY a.target_cod ASC,
  b.`id_progress` ASC 
LIMIT 0, 6  ");
       return $get;
    }
	//YEAR(CURDATE())
	
	
	function tampilkan_milstone() {
        $get = $this->db->query("select a.*, (select b.nama_project from project b where a.id_project = b.id_project) as nama_project  FROM milstone a  ");
       return $get;
    }
	
	function tampilkan_progress() {
        $get = $this->db->query("select a.*, (select b.nama_project from project b where a.id_project = b.id_project) as nama_project  FROM progress a  ");
       return $get;
    }
	
	function tampilkan_resume() {
        $get = $this->db->query("SELECT 
								  upp.nama_upp,
								  project.`nama_project`,
								  progress.`individual_e`,
								  progress.`individual_c`,
								  progress.`individual_p`,
								  progress.`total`
								FROM
								  upp,
								  project,
								  progress 
								WHERE project.`id_project` = progress.`id_project` 
								  AND project.`id_upp` = upp.`id_upp`");
       return $get;
    }
	
	function tampilkan_milstone_terakhir() {
        $get = $this->db->query("SELECT 
								  a.nama_milstone 
								FROM
								  milstone a,
								  progress b 
								WHERE a.id_project = b.`id_project` 
								ORDER BY a.`id_milstone` DESC");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	//Progrss Gallery Start
	function tampilkan_progress_gallery() {
        $get = $this->db->query("select a.*, (select b.nama_project from project b where a.id_project = b.id_project) as nama_project  FROM progress_gallery a order by a.tgl_foto DESC ");
       return $get;
    }
	
	function dapat_progress_gallery($id_progress_gallery) {
        $get = $this->db->query("SELECT *
                               FROM progress_gallery a
                               WHERE a.id_progress_gallery =$id_progress_gallery
							   ORDER BY a.tgl_foto DESC
							   ");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
    function update_data_progress_gallery($data, $id_progress_gallery) {
        $update = $this->db->update('progress_gallery', $data, array('id_progress_gallery' => $id_progress_gallery));
        return $update;
    }
	
	var $tabel_progress_gallery = 'progress_gallery'; 
	
	//fungsi untuk menampilkan semua data dari tabel database
    function get_allimage_progress_gallery() {
        $this->db->from($this->tabel_progress_gallery);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 
    //fungsi insert ke database
    function get_insert_progress_gallery($data){
       $this->db->insert($this->tabel_progress_gallery, $data);
       return TRUE;
    }
	
	 
	function tampil_progress_gallery($id_project) {
        $get = $this->db->query("SELECT * FROM progress_gallery where id_project = $id_project order by tgl_foto DESC ");
        return $get;
    }
	
	 function delete_progress_gallery($id) {
        $delete = $this->db->delete('progress_gallery', array('id_progress_gallery' => $id));
        return $delete;
    }
	//Progrss progress_gallery Finish
	
	
	
	
	
	function tampilkan_gallery() {
        $get = $this->db->query("select a.*, (select b.nama_project from project b where a.id_project = b.id_project) as nama_project  FROM gallery a order by a.tgl_foto desc  ");
       return $get;
    }
	
	function dapat_gallery($id_gallery) {
        $get = $this->db->query("SELECT *
                               FROM gallery a
                               WHERE a.id_gallery =$id_gallery
							   order by a.tgl_foto desc");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	
    function update_data_gallery($data, $id_gallery) {
        $update = $this->db->update('gallery', $data, array('id_gallery' => $id_gallery));
        return $update;
    }
	
	
	//Gallery
	
	var $tabel = 'gallery'; 
	
	//fungsi untuk menampilkan semua data dari tabel database
    function get_allimage() {
        $this->db->from($this->tabel);
        $query = $this->db->get();
 
        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
 
    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
	
	 
	function tampil_gallery($id_project) {
        $get = $this->db->query("SELECT * FROM gallery where id_project = $id_project order by tgl_foto DESC");
        return $get;
    }
	
	 function delete_gallery($id) {
        $delete = $this->db->delete('gallery', array('id_gallery' => $id));
        return $delete;
    }
	
	//Module
	function get_module1_pln() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 1 
								  AND kode_project = 'PLN'");
        return $get;
    }
	
	function get_module1_ipp() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 1 
								  AND kode_project = 'IPP'");
        return $get;
    }
	
	function get_module1_unallocated() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 1 
								  AND kode_project = 'UNALLOCATED'");
        return $get;
    }
	
	function get_module2_pln() {
        $get = $this->db->query("SELECT *
                               FROM project where id_upp =2 AND kode_project = 'PLN' ");
        return $get;
    }
	
	function get_module2_ipp() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 2 
								  AND kode_project = 'IPP'");
        return $get;
    }
	
	function get_module2_unallocated() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 2
								  AND kode_project = 'UNALLOCATED'");
        return $get;
    }
	
	
	function get_module3_pln() {
        $get = $this->db->query("SELECT *
                               FROM project where id_upp =3 
								  AND kode_project = 'PLN'");
        return $get;
    }
	
	function get_module3_ipp() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 3 
								  AND kode_project = 'IPP'");
        return $get;
    }
	
	function get_module3_unallocated() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 3 
								  AND kode_project = 'UNALLOCATED'");
        return $get;
    }
	
	function get_module4_pln() {
        $get = $this->db->query("SELECT *
                               FROM project where id_upp =4 
								  AND kode_project = 'PLN'");
        return $get;
    }
	
	function get_module4_ipp() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 4 
								  AND kode_project = 'IPP'");
        return $get;
    }
	
	function get_module4_unallocated() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 4 
								  AND kode_project = 'UNALLOCATED'");
        return $get;
    }
	
	
	function get_module5_pln() {
        $get = $this->db->query("SELECT *
                               FROM project where id_upp =5
								  AND kode_project = 'PLN' ");
        return $get;
    }
	
	function get_module5_ipp() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 5 
								  AND kode_project = 'IPP'");
        return $get;
    }
	
	function get_module5_unallocated() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 5 
								  AND kode_project = 'UNALLOCATED'");
        return $get;
    }
	
	
	function get_module6_pln() {
        $get = $this->db->query("SELECT *
                               FROM project where id_upp =6
								  AND kode_project = 'PLN' ");
        return $get;
    }
	
	function get_module6_ipp() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 6 
								  AND kode_project = 'IPP'");
        return $get;
    }
	
	function get_module6_unallocated() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 6 
								  AND kode_project = 'UNALLOCATED'");
        return $get;
    }
	
	
	function get_module7_pln() {
        $get = $this->db->query("SELECT *
                               FROM project where id_upp =7
								  AND kode_project = 'PLN' ");
        return $get;
    }
	
	
	function get_module7_unallocated() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 7 
								  AND kode_project = 'UNALLOCATED'");
        return $get;
    }
	
	
	function get_module7_ipp() {
        $get = $this->db->query("SELECT *
                               FROM project where id_upp =7
								  AND kode_project = 'IPP' ");
        return $get;
    }
	function get_module8_pln() {
        $get = $this->db->query("SELECT *
                               FROM project where id_upp =8
								  AND kode_project = 'PLN' ");
        return $get;
    }
	
	function get_module8_ipp() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 8 
								  AND kode_project = 'IPP'");
        return $get;
    }
	
	function get_module8_unallocated() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 8 
								  AND kode_project = 'UNALLOCATED'");
        return $get;
    }
	
	function get_module9_pln() {
        $get = $this->db->query("SELECT *
                               FROM project where id_upp =9
								  AND kode_project = 'PLN' ");
        return $get;
    }
	
	function get_module9_ipp() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 9 
								  AND kode_project = 'IPP'");
        return $get;
    }
	
	function get_module9_unallocated() {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  project 
								WHERE id_upp = 9 
								  AND kode_project = 'UNALLOCATED'");
        return $get;
    }
	
	function activity_log() {
        $get = $this->db->query("SELECT 
									  * 
									FROM
									  log_activity 
									ORDER BY id_log_activity DESC ");
											return $get;
										}
 
	function last_login_view() {
        $get = $this->db->query("SELECT 
								  a.id_user,
								  a.username,
								  a.last_login,
								  a.nama_admin,
								  a.ip_last_login,
								  a.browser,
								  (SELECT 
									b.nama_upp 
								  FROM
									upp b 
								  WHERE b.id_upp = a.id_upp) AS nama_upp 
								FROM
								  user a 
								ORDER BY a.last_login desc ");
        return $get;
    }
  //user
  
    function dapat_user($id) {
        $get = $this->db->query("SELECT a.id_user,a.username,a.password ,a.nama_admin, a.email, a.status FROM user a where a.status =3
                               and a.id_user =$id");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    function get_user() {
        $get = $this->db->query("SELECT a.id_user,a.username,a.password, a.email ,a.nama_admin , a.status FROM user a where a.status =3
                               ORDER BY a.id_user ASC");
        return $get;
    }
	
    function update_user($data, $id_user) {
        $update = $this->db->update('user', $data, array('id_user' => $id_user));
        return $update;
    }
	
    function delete_user($id) {
        $delete = $this->db->delete('user', array('id_user' => $id));
        return $delete;
    }
	
    public function tambah_data_user($data) {
        $input = $this->db->insert('user', $data);
        return $input;
    }
	
	 //Project
    function dapat_project($id) {
        $get = $this->db->query("SELECT a.id_project,a.id_upp,a.kode_project,a.fase_project,a.program_project,a.provinsi,a.ruptl,a.jumlah_mesin,a.lokasi_project,a.nama_project, (select b.nama_upp from upp b where b.id_upp = a.id_upp) as nama_upp
                               FROM project a
                               WHERE a.id_project =$id");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
    function get_project() {
        $get = $this->db->query("SELECT a.id_project,a.kode_project,a.program_project,a.fase_project,a.provinsi,a.ruptl,a.jumlah_mesin,a.lokasi_project,a.nama_project, (select b.nama_upp from upp b where b.id_upp = a.id_upp) as nama_upp
                               FROM project a
                               ORDER BY a.id_project ASC");
        return $get;
    }
	
    function get_project_upp($id_upp) {
        $get = $this->db->query("SELECT a.id_project,a.kode_project,a.program_project,a.provinsi,a.ruptl,a.jumlah_mesin,a.lokasi_project,a.fase_project,a.nama_project, (select b.nama_upp from upp b where b.id_upp = a.id_upp) as nama_upp
                               FROM project a
                               WHERE a.id_upp =$id_upp");
        return $get;
    }
	
    function update_project($data, $id_project) {
        $update = $this->db->update('project', $data, array('id_project' => $id_project));
        return $update;
    }
	
    function delete_project($id) {
        $delete = $this->db->delete('project', array('id_project' => $id));
        return $delete;
    }
	
    function get_upp() {
        $get = $this->db->query("SELECT *
                               FROM upp
                               ORDER BY id_upp ASC");
        return $get;
    }

	
    public function tambah_data_project($data) {
        $input = $this->db->insert('project', $data);
        return $input;
    }
	
  //General Information
    function dapat_general_information($id_general_information) {
        $get = $this->db->query("SELECT *
                               FROM general_information a
                               WHERE a.id_general_information =$id_general_information");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    function tampil_general_information($id_project) {
        $get = $this->db->query("SELECT *
                               FROM general_information WHERE id_project =$id_project ");
        return $get;
    }
	
	function tampil_nama_project($id_project) {
        $get = $this->db->query("SELECT nama_project, kode_project
                               FROM project WHERE id_project =$id_project ");
       if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
    function update_general_information($data, $id_general_information) {
        $update = $this->db->update('general_information', $data, array('id_general_information' => $id_general_information));
		
        return $update;
    }
	
    function delete_general_information($id) {
        $delete = $this->db->delete('general_information', array('id_general_information' => $id));
        return $delete;
    }
	
    public function tambah_data_general_information($data) {
        $input = $this->db->insert('general_information', $data);
        return $input;
    }
		
  //Milstone
    function cek_mesin($id_project) {
        $get = $this->db->query("SELECT jumlah_mesin
                               FROM project a
                               WHERE a.id_project =$id_project");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	 function dapat_milstone($id_milstone) {
        $get = $this->db->query("SELECT a.id_milstone,a.id_project,a.nama_milstone, 
								a.start_plan_unit1,a.start_actual_unit1, a.finish_plan_unit1,a.finish_actual_unit1,
								a.start_plan_unit2,a.start_actual_unit2, a.finish_plan_unit2,a.finish_actual_unit2,
								a.start_plan_unit3,a.start_actual_unit3, a.finish_plan_unit3,a.finish_actual_unit3,
								a.start_plan_unit4,a.start_actual_unit4, a.finish_plan_unit4,a.finish_actual_unit4,
								a.start_plan_unit5,a.start_actual_unit5, a.finish_plan_unit5,a.finish_actual_unit5
                               FROM milstone a
                               WHERE a.id_milstone =$id_milstone");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
    function tampil_milstone($id_project) {
        $get = $this->db->query("SELECT a.id_project,a.id_milstone,a.nama_milstone, 
								a.start_plan_unit1,a.start_actual_unit1, a.finish_plan_unit1,a.finish_actual_unit1,
								a.start_plan_unit2,a.start_actual_unit2, a.finish_plan_unit2,a.finish_actual_unit2,
								a.start_plan_unit3,a.start_actual_unit3, a.finish_plan_unit3,a.finish_actual_unit3,
								a.start_plan_unit4,a.start_actual_unit4, a.finish_plan_unit4,a.finish_actual_unit4,
								a.start_plan_unit5,a.start_actual_unit5, a.finish_plan_unit5,a.finish_actual_unit5
                               FROM milstone a where a.id_project = $id_project ");
        return $get;
    }
	
    
    function update_milstone($data, $id_milstone) {
        $update = $this->db->update('milstone', $data, array('id_milstone' => $id_milstone));
		
        return $update;
    }
	
    function delete_milstone($id) {
        $delete = $this->db->delete('milstone', array('id_milstone' => $id));
        return $delete;
    }
	
    public function tambah_data_milstone($data) {
        $input = $this->db->insert('milstone', $data);
        return $input;
    }
	
     //Kontrak Utama
    function dapat_kontrak_utama($id_kontrak_utama) {
        $get = $this->db->query("SELECT *
                               FROM kontrak_utama a
                               WHERE a.id_kontrak_utama =$id_kontrak_utama");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    function tampil_kontrak_utama($id_project) {
        $get = $this->db->query("SELECT *
                               FROM kontrak_utama a where a.id_project = $id_project ");
        return $get;
    }
	
	
    public function tambah_data_kontrak_utama($data) {
        $input = $this->db->insert('kontrak_utama', $data);
        return $input;
    }
	
    function update_kontrak_utama($data, $id_kontrak_utama) {
        $update = $this->db->update('kontrak_utama', $data, array('id_kontrak_utama' => $id_kontrak_utama));
		
        return $update;
    }

    function delete_kontrak_utama($id) {
        $delete = $this->db->delete('kontrak_utama', array('id_kontrak_utama' => $id));
        return $delete;
    }
	  
	  //Kontrak Supervisi
    function dapat_kontrak_supervisi($id_kontrak_supervisi) {
        $get = $this->db->query("SELECT *
                               FROM kontrak_supervisi a
                               WHERE a.id_kontrak_supervisi =$id_kontrak_supervisi");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    function tampil_kontrak_supervisi($id_project) {
        $get = $this->db->query("SELECT *
                               FROM kontrak_supervisi a where a.id_project = $id_project ");
        return $get;
    }
	
	
    public function tambah_data_kontrak_supervisi($data) {
        $input = $this->db->insert('kontrak_supervisi', $data);
        return $input;
    }
	
    function update_kontrak_supervisi($data, $id_kontrak_supervisi) {
        $update = $this->db->update('kontrak_supervisi', $data, array('id_kontrak_supervisi' => $id_kontrak_supervisi));
		
        return $update;
    }

    function delete_kontrak_supervisi($id) {
        $delete = $this->db->delete('kontrak_supervisi', array('id_kontrak_supervisi' => $id));
        return $delete;
    }
	
	  
	  //Kontrak Engineering
    function dapat_kontrak_engineering($id_kontrak_engineering) {
        $get = $this->db->query("SELECT *
                               FROM kontrak_engineering a
                               WHERE a.id_kontrak_engineering =$id_kontrak_engineering");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    function tampil_kontrak_engineering($id_project) {
        $get = $this->db->query("SELECT *
                               FROM kontrak_engineering a where a.id_project = $id_project ");
        return $get;
    }
	
	
    public function tambah_data_kontrak_engineering($data) {
        $input = $this->db->insert('kontrak_engineering', $data);
        return $input;
    }
	
    function update_kontrak_engineering($data, $id_kontrak_engineering) {
        $update = $this->db->update('kontrak_engineering', $data, array('id_kontrak_engineering' => $id_kontrak_engineering));
		
        return $update;
    }

    function delete_kontrak_engineering($id) {
        $delete = $this->db->delete('kontrak_engineering', array('id_kontrak_engineering' => $id));
        return $delete;
    }
	 
	  //Kontrak Lokal
    function dapat_kontrak_lokal($id_kontrak_lokal) {
        $get = $this->db->query("SELECT *
                               FROM kontrak_lokal a
                               WHERE a.id_kontrak_lokal =$id_kontrak_lokal");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    function tampil_kontrak_lokal($id_project) {
        $get = $this->db->query("SELECT *
                               FROM kontrak_lokal a where a.id_project = $id_project ");
        return $get;
    }
	
	
    public function tambah_data_kontrak_lokal($data) {
        $input = $this->db->insert('kontrak_lokal', $data);
        return $input;
    }
	
    function update_kontrak_lokal($data, $id_kontrak_lokal) {
        $update = $this->db->update('kontrak_lokal', $data, array('id_kontrak_lokal' => $id_kontrak_lokal));
		
        return $update;
    }

    function delete_kontrak_lokal($id) {
        $delete = $this->db->delete('kontrak_lokal', array('id_kontrak_lokal' => $id));
        return $delete;
    }
	
	  //progress
    function dapat_progress($id_progress) {
        $get = $this->db->query("SELECT *
                               FROM progress a
                               WHERE a.id_progress =$id_progress");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	function tampil_progress($id_project) {
        $get = $this->db->query("SELECT 
								  * 
								FROM
								  progress a 
								WHERE a.id_project = $id_project
								ORDER BY tahun * 1 DESC,
								  bulan * 1 DESC");
        return $get;
    }
	
	
    public function tambah_data_progress($data) {
        $input = $this->db->insert('progress', $data);
        return $input;
    }
	
    function update_progress($data, $id_progress) {
        $update = $this->db->update('progress', $data, array('id_progress' => $id_progress));
		
        return $update;
    }

    function delete_progress($id) {
        $delete = $this->db->delete('progress', array('id_progress' => $id));
        return $delete;
    }
	
	 //Issue
    function dapat_issue($id_issue) {
        $get = $this->db->query("SELECT *
                               FROM issue a
                               WHERE a.id_issue =$id_issue");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	function tampil_issue($id_project) {
        $get = $this->db->query("SELECT a.id_project,
		(select nama_project from project where id_project = a.id_project) as nama_project,
		
		a.id_issue,a.issue_description, a.status, a.target_resolved_date,a.action
                               FROM issue a where a.id_project = $id_project ");
        return $get;
    }
	
	
    public function tambah_data_issue($data) {
        $input = $this->db->insert('issue', $data);
        return $input;
    }
	
    function update_issue($data, $id_issue) {
        $update = $this->db->update('issue', $data, array('id_issue' => $id_issue));
		
        return $update;
    }

    function delete_issue($id) {
        $delete = $this->db->delete('issue', array('id_issue' => $id));
        return $delete;
    }
	
	//Daily Activity
    function dapat_daily_activity($id_daily_activity) {
        $get = $this->db->query("SELECT *
                               FROM daily_activity a
                               WHERE a.id_daily_activity =$id_daily_activity");
        if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
    
	function tampil_daily_activity($id_project) {
        $get = $this->db->query("SELECT a.id_project,
		(select nama_project from project where id_project = a.id_project) as nama_project,
		
		a.id_daily_activity,a.date_activity, a.status, a.milstone, a.pekerjaan, a.kendala, a.tindak_lanjut
                               FROM daily_activity a where a.id_project = $id_project order by id_daily_activity desc");
        return $get;
    }
	
	
    public function tambah_data_daily_activity($data) {
        $input = $this->db->insert('daily_activity', $data);
        return $input;
    }
	
    function update_daily_activity($data, $id_daily_activity) {
        $update = $this->db->update('daily_activity', $data, array('id_daily_activity' => $id_daily_activity));
		
        return $update;
    }

    function delete_daily_activity($id) {
        $delete = $this->db->delete('daily_activity', array('id_daily_activity' => $id));
        return $delete;
    }
	
	  
	function dapat_status($status) {
        $get = $this->db->query("SELECT 
								  status 
								FROM
								  user a
								WHERE a.status =$status LIMIT 1");
         if ($get->num_rows() == 1) {
            return $get->row_array();
        }
    }
	
	
	//Cek Target
	function cek_target() {
        $get = $this->db->query("SELECT 
  a.id_project,
  a.nama_milstone,
  a.start_plan_unit1,
  a.finish_plan_unit1,
  a.start_actual_unit1,
  a.finish_actual_unit1,
  a.start_plan_unit2,
  a.finish_plan_unit2,
  a.start_actual_unit2,
  a.finish_actual_unit2,
  (SELECT nama_project FROM project WHERE id_project = a.id_project) AS nama_project,
  (SELECT 
    b.email 
  FROM
    USER b 
  WHERE b.id_upp = 
    (SELECT 
      c.id_upp 
    FROM
      project c 
    WHERE c.id_project = a.id_project) ) as email
FROM
  milstone a 
ORDER BY a.id_project");
        return $get;
    }
	
	function get_allproject($program_project,$kode_project,$provinsi,$ruptl) {
		$this->db->select('*'); //memeilih semua field
		$this->db->from('project'); //memeilih tabel
		if($program_project !="")
		{
		$this->db->where("program_project",$program_project);
		}
		
		if($kode_project !="")
		{
		$this->db->where("kode_project",$kode_project);
		}
		
		if($provinsi !="")
		{
		$this->db->where("provinsi",$provinsi);
		}
		
		if($ruptl !="")
		{
		$this->db->where("ruptl",$ruptl);
		}
		$query = $this->db->get();
		//print_r($this->db->last_query()); exit;
		
		return $query;
	
    }
	
}
