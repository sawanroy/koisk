<?php 
class Main2_controller extends CI_controller{

public function index()
  {
       $this->load->view('feedback/index');

  }
public function register()
  { 
 
     $this->load->view('feedback/register');

  }
  public function feedback()
  { 
      $semesterss=$this->input->post('semester');
      $branchss=$this->input->post('branch');
      $this->load->model('login_model');
    $lists['h']=$this->login_model->options_subjects($semesterss,$branchss);
       $tech['n']=$this->login_model->option_teacher();
    $data=array_merge($lists,$tech);
    $this->load->view('feedback/account/user_account',$data);
  }
  public function login()
  { 
 
     $this->load->view('feedback/login2');

  }
  public function panel_user()
  {
    $this->load->view('feedback/login');
  }

  public function infra()
  { 
 
     $this->load->view('feedback/infrastructure2');

  }
  public function account()
  {
    $this->load->view('feedback/feedback');
  }
public function admin()
{

  $this->load->view('feedback/admin/admin2');
}


}


?>