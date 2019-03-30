<?php 
class Admin_controller extends CI_controller{

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
                       	$this->load->view('feedback/admin/admin2');
					
					
                }
                else
                {
					   $username=$this->input->post('username');
					   $password=$this->input->post('password');
					  $this->load->model('admin_model');
					  $login_id=$this->admin_model->index($username, $password);
					 if( $login_id )
					 	
					 {	$this->load->library('session');
					    $this->session->set_userdata('user_id',$login_id);
					     return redirect('admin_controller/dashboard');
					    
					       
					 }
					 else
					 {
					 	$this->session->set_flashdata('login_failed','invalid username & password');
				         return redirect('main2_controller/admin');
                     }
                 }

}
public function dashboard()
{
	$this->load->view('feedback/admin/dashboard');
}
public function list_subject()
{
	$this->load->model('admin_model');
    $sub['h']=$this->admin_model->sub_model();
	$this->load->view('feedback/admin/subjects',$sub);
}
public function list_teacher()
{
	$this->load->model('admin_model');
    $teachers['c']=$this->admin_model->faculty_model();
	$this->load->view('feedback/admin/listofteacher',$teachers);
}
public function faculty_feedback()
{
	$this->load->model('addfaculty_model');
    $feedteachers['b']=$this->addfaculty_model->faculty_model2();
	$this->load->view('feedback/admin/faculty_feedback',$feedteachers);
}
public function infras_feedback()
{
	$this->load->model('admin_model');
    $infra['a']=$this->admin_model->infra_model();
	$this->load->view('feedback/admin/infrastructure_feedback',$infra);
}
public function reg_student()
{
	$this->load->model('admin_model');
    $reg['d']=$this->admin_model->regstudent_model();
	$this->load->view('feedback/admin/registered_student',$reg);
}
public function add_teacher()
{
	$this->load->model('admin_model');
    $reg['d']=$this->admin_model->regstudent_model();
	$this->load->view('feedback/admin/add_faculty',$reg);
}
public function add_subject()
{
	$this->load->model('admin_model');
    $reg['d']=$this->admin_model->regstudent_model();
	$this->load->view('feedback/admin/add_sub',$reg);
}

public function notification()
{
   $this->load->model('admin_model');
   $noti['a']=$this->admin_model->notification_model();
	$this->load->view('feedback/admin/notification',$noti);


}
public function add_notification()
{
	$this->load->view('feedback/admin/add_notification');
}

public function submit_notification()
{
      $post = $this->input->post();
                 unset($post['submit']);
                $this->load->model('admin_model');
                  
                  if($this->admin_model->add_notification_model($post))
                  {
                           //flash message sucessfuly
                    $this->load->library('session');
                    $this->session->set_flashdata('login_failed','sucessfully submitted');
               return redirect('admin_controller/add_notification');

                  }
                  else
                  {
                           //unsucesssfull
                    $this->session->set_flashdata('login_failed','unsucesssfully something went worng try agin');
                      return redirect('admin_controller/add_notification');
}
}
public function delete_notification()
{
    
}


     public function admin_logout()
	{
        $this->session->unset_userdata('user_id');
        return redirect('main2_controller/admin');

	}
	public function admission()
	{
		$this->load->model('admin_model');
    $admission['a']=$this->admin_model->admission_model();

		$this->load->view('feedback/admin/list_admission',$admission);
	}

}

?>