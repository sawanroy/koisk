<?php
class Reg_controller extends CI_controller{

	public function index()
	{
          $post = $this->input->post();
                 unset($post['submit']);
                 $this->load->model('res_model','cmt');
                  
                  if($this->cmt->index($post))
                  {
                           //flash message sucessfuly
                  	$this->load->library('session');
                    $this->session->set_flashdata('login_failed','sucessfully registered');
               return redirect('main2_controller/index');
                  }
                  else
                  {
                           //unsucesssfull
                 $this->session->set_flashdata('login_failed','unsucesssfully something went worng try agin');
                      return redirect('main2_controller/index');

                  }
                 

	}
	

} 


?>