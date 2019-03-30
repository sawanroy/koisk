<?php 
class Main_controller extends CI_controller{

	public function index()
	{
		$this->load->model('admin_model');
   $noti['a']=$this->admin_model->notification_model();
		$this->load->view('index',$noti);
	}
	 public function map()
	 {
	 	$this->load->view('maps');
	 }
	 public function addmission()
	 {
	 	$this->load->view('addmission');
	 }
	 public function accounts()
	 {
	 	$this->load->view('AccountHall');
	 }
	 public function principal()
	 {
	 	$this->load->view('Principaloffice');
	 }
	 
	 public function finance()
	 {
	 	$this->load->view('Financecontrol');
	 }

	 public function Library()
	 {
	 	$this->load->view('Library');
	 }

	 public function meetingroom()
	 {
	 	$this->load->view('Meetingroom');
	 }
	 public function registar()
	 {
	 	$this->load->view('registaroffice');
	 }

	 public function advertise()
	 {
	 	$this->load->view('sub set/Advertising/index');
	 }

	 public function information()
	 {
	 	$this->load->view('sub set/Information kiosk/index');
	 }

	 public function interctive()
	 {
	 	$this->load->view('sub set/Interactive kiosk/index');
	 }

	 public function internet()
	 {
	 	$this->load->view('sub set/internet kiosk/index');
	 }
     
     public function pdf()
     {
     	$this->load->view('pdfview');
     }

     public function admission()
     {
       $post = $this->input->post();
                 unset($post['submit']);
                 $this->load->model('res_model','cmt');
                  
                  if($this->cmt->admission_model($post))
                  {
                           //flash message sucessfuly
                         //flash message sucessfuly
                  	$this->load->library('session');
                    $this->session->set_flashdata('login_failed','Thank you submit your query');
               return redirect('main_controller/index');

                  }
                  else
                  {
                           //unsucesssfull
                  $this->session->set_flashdata('login_failed','unsucesssfully something went worng try agin');
                      return redirect('main_controller/index');

                  }
     }

     public function advertisement()
     {
     	$this->load->view('sub set/Advertising/advertise/hitkarini');
     }
	public function tourism()
     {
     	$this->load->view('sub set/Advertising/advertise/tourism');
     }

     public function banking()
     {
     	$this->load->view('sub set/Advertising/advertise/banking');
     }
} 
 

?>