<?php 
class Login_controller extends CI_controller{

     public function index()
     {

     	 $this->load->library('form_validation');
	    $this->form_validation->set_rules(
        'username', 'username',
        'required|min_length[5]|max_length[12]'
);
$this->form_validation->set_rules('password', 'password', 'required');
	    if ($this->form_validation->run() == FALSE)
                {
                       	$this->load->view('feedback/login2.php');
					
					
                }
                else
                {
					   $username=$this->input->post('username');
					   $password=$this->input->post('password');
					  $this->load->model('login_model');
					  $login_id=$this->login_model->index($username, $password);
					 if( $login_id )
					 {	
             
					 	$data=array();

					 		$data['id']=$login_id->sno;
					 		$data['name']=$login_id->firstname;
					 		$data['last']=$login_id->lastname;
					 		$data['Branch']=$login_id->branch;
					 		$data['semester']=$login_id->semester;
					 		$data['roll']=$login_id->roll;
					 		
					 		
                            
					    $this->session->set_userdata($data);
					     return redirect('main2_controller/panel_user');
					    
					       
					 }
					 else
					 {
					 	$this->session->set_flashdata('login_failed','invalid username & password');
				         return redirect('main2_controller/login');
					 }
				
                }

     }

     public function login_logout()
	{
        $this->session->unset_userdata('user_id');
        return redirect('main2_controller/login');

	}

     }


?>