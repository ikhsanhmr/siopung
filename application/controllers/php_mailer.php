
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 

class Php_mailer extends CI_Controller {
	public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'date_helper', 'tgl_indonesia_helper'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model(array('pmis_model'));
       
    }
	
	
	function test_mail(){
		$cek_target = $this->pmis_model->cek_target();
		
		//print_r ($cek_target->result_array()).'<br>';
		//$start_plan_unit1=$cek_target['start_plan_unit1'];
		/* 
		$finish_plan_unit1=$cek_target['finish_plan_unit1'];
		$start_actual_unit1=$cek_target['start_actual_unit1'];
		$finish_actual_unit1=$cek_target['finish_actual_unit1'];
		
		$start_plan_unit2=$cek_target['start_plan_unit2'];
		$finish_plan_unit2=$cek_target['finish_plan_unit2'];
		$start_actual_unit2=$cek_target['start_actual_unit2'];
		$finish_actual_unit2=$cek_target['finish_actual_unit2'];
		  */
		
		
		foreach($cek_target->result_array() AS $row) {
			//start_plan_unit1
			$awal = new DateTime($row['start_plan_unit1']);
			$akhir = new DateTime(); // Waktu sekarang
			$diff  = $awal->diff($akhir);
			/*
			echo 'Selisih waktu: ';
			echo $diff->y . ' tahun, ';
			echo $diff->m . ' bulan, ';
			echo $diff->d . ' hari, ';
			echo $diff->h . ' jam, ';
			echo $diff->i . ' menit, ';
			echo $diff->s . ' detik </br>';
			*/
				// start 7  hari
				if ($diff->d <= 7) {
					$nama_milstone =  $row['nama_milstone'];
					$nama_project =  $row['nama_project'];
					$email =  $row['email'];
					//echo $diff->d . ' hari, ';
					
					   // load library email

						$this->load->library('PHPMailerAutoload');

						$mail = new PHPMailer();

						$mail->SMTPDebug = 2;

						$mail->Debugoutput = 'html';

						

						// set smtp

						$mail->isSMTP();

						$mail->Host = 'mail.plnuipkitsum.com';

						$mail->Port = '25';

						$mail->SMTPAuth = true;

						$mail->Username = 'admin@plnuipkitsum.com';

						$mail->Password = 'K@rtini23';

						//$mail->WordWrap = 50;  

						// set email content

						$mail->setFrom('admin@plnuipkitsum.com', 'ADMIN PMIS');
						
						// Menambahkan cc atau bcc 
						//$mail->addCC('ikhsanhmr@gmail.com');
						//$mail->addCC('dedi.khairunas@gmail.com');

						$mail->addAddress(''.$email.'');
						//$mail->addAddress('hanifhapln27@gmail.com');
						//$mail->addAddress('madaka.fariz@gmail.com');
						//$mail->addAddress('enggalfurniaji87@gmail.com');
						//$mail->addAddress('johanes.alexanderz@gmail.com');
						//$mail->addAddress('fadilgooners@gmail.com');
						//$mail->addAddress('imamfirdaus21.if@gmail.com');
						//$mail->addAddress('alfineutron@gmail.com');
						//$mail->addAddress('indra.widiz86.iw@gmail.com');

						$mail->Subject = 'Notifikasi Pemberitahuan Aplikasi PMIS';

						$mail->Body = 'Yth. Admin PMIS di Unit,
						
Untuk project '.$nama_project.' sudah berada pada tahap '.$nama_milstone.' ,deadline waktu anda tinggal 7 hari lagi, Harap segera Lengkapi data Milstone pada setiap project di unit anda.
						
Demikian disampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih';

							try{
								$mail->Send();
								echo "Success!";
							} catch(Exception $e){
								//Something went bad
								echo "Mailer Error: " . $mail->ErrorInfo;
							}  
				} 
				// end 7 hari
				
				// start 30 hari
				if ($diff->d <= 30) {
					//echo $row['email'];
					//echo $diff->d . ' hari, ';
					$nama_milstone =  $row['nama_milstone'];
					$nama_project =  $row['nama_project'];
						$email =  $row['email'];
					   // load library email

						$this->load->library('PHPMailerAutoload');

						

						$mail = new PHPMailer();

						$mail->SMTPDebug = 2;

						$mail->Debugoutput = 'html';

						

						// set smtp

						$mail->isSMTP();

						$mail->Host = 'mail.plnuipkitsum.com';

						$mail->Port = '25';

						$mail->SMTPAuth = true;

						$mail->Username = 'admin@plnuipkitsum.com';

						$mail->Password = 'K@rtini23';

						//$mail->WordWrap = 50;  

						// set email content

						$mail->setFrom('admin@plnuipkitsum.com', 'ADMIN PMIS');
						
						// Menambahkan cc atau bcc 
						//$mail->addCC('ikhsanhmr@gmail.com');
						//$mail->addCC('dedi.khairunas@gmail.com');

						$mail->addAddress(''.$email.'');
						
						
						//$mail->addAddress('hanifhapln27@gmail.com');
						//$mail->addAddress('madaka.fariz@gmail.com');
						//$mail->addAddress('enggalfurniaji87@gmail.com');
						//$mail->addAddress('johanes.alexanderz@gmail.com');
						//$mail->addAddress('fadilgooners@gmail.com');
						//$mail->addAddress('imamfirdaus21.if@gmail.com');
						//$mail->addAddress('alfineutron@gmail.com');
						//$mail->addAddress('indra.widiz86.iw@gmail.com');

						$mail->Subject = 'Notifikasi Pemberitahuan Aplikasi PMIS';

						$mail->Body = 'Yth. Admin PMIS di Unit,
						
Untuk project '.$nama_project.' sudah berada pada tahap '.$nama_milstone.' , deadline waktu anda tinggal 30 hari lagi, Harap segera Lengkapi data Milstone pada setiap project di unit anda.
						
Demikian disampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih';

									
							try{
								$mail->Send();
								echo "Success!";
							} catch(Exception $e){
								//Something went bad
								echo "Mailer Error: " . $mail->ErrorInfo;
							}
								  
				} 
				// end 30 hari
				
				
				
				
		}
		
		
		
	 

	}

}

