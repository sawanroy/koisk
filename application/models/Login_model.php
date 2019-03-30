<?php 
class Login_model extends CI_model{

	public function index($username,$password)
     {
          $q = $this->db->where(['roll'=>$username,'dob'=>$password])->get('users');

          $login_id=$q->row();
          return $login_id;
         



	}
     public function options_subjects($semesterss,$branchss)
     {
          return $this->db->get_where('subjects',['semester'=>$semesterss,'branch'=>$branchss]);
        
     }

    public function option_teacher()
     {
          $query = $this->db->get('teachers');
          return $query;
     }  
}

?>