<?php



class Main_modal extends CI_Model {

	

	function __construct(){

        parent::__construct();

         $this->load->helper('url'); 

    }



	public function createData($data,$table){
		$this->db->set($data);
		$insertData = $this->db->insert($table);
		if($insertData){
			return TRUE;
		}else{
			return FALSE;
		}
	}
    

    public function singleRowdata($where_data,$table){

    	$this->db->where($where_data);

    	$query=$this->db->get($table);

    	return $query->row();

    }





 

	public function insert($table,$data)

	{   $this->db->insert($table, $data);

       $insert_id = $this->db->insert_id();

       /*  echo $this->db->last_query();exit();*/

		return  $insert_id;

	    

	}   

		public function selectDataById($table,$wheredata){

		$this->db->select('*');

		$this->db->from($table);

		$this->db->where($wheredata);

	    $query = $this->db->get();

	   return $query->row();
	}

	   function count_row($table,$where){
			$this->db->where($where);
			$data = $this->db->get($table);	
			$num = $data->num_rows();		
			if($num){
				return $num;
				}else{
				return false;
			}
		}


		 public function get_user_likes($user_id=''){
        $sql      = "SELECT `to_user_id` FROM `tbl_like_unlike` WHERE user_id= ".$user_id."";
       return $this->db->query($sql)->result();
    }


	



	public function selectAllById($table,$wheredata){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($wheredata);
		$query = $this->db->get();
		return $query->result_array();
	}

	



	public function updateData($table,$data,$wheredata){

		$this->db->where($wheredata);

		$updateData=$this->db->update($table,$data);

		// echo $this->db->last_query();

		if($updateData){

			return $updateData;

		}else{

			return false;

		}

	}





	public function update($wheredata,$table,$data){

		$query = $this->db->where($wheredata);

		$query = $this->db->update($table,$data);

		return $query;

	

	}


  public function userSearch($from='',$to='',$city='',$profile_type='',$user_id=''){
       //  $this->db->where('user_id !=',$user_id);
        $this->db->select('u.*, ct.city_name');
      
        $this->db->from('user u');
        $this->db->join('cities ct',  'u.city = ct.city_id');
             
       	
        if($from!='')
        {
	       $this->db->where('u.age >=',$from);
        }
        if($to!='')
        {
	        $this->db->where('u.age <=',$to);
        }
        
        if($city!='')
        {
	        $this->db->where('u.city',$city);
        }
        
        if($profile_type==1)
        {
	        $this->db->order_by('u.create_date_time','desc');
        }
        
        if($profile_type==2)
        {
	        $this->db->where('u.user_status',0);
        }

	    /*$result = $this->db->get('user');*/
	    
	   /* if ($result->num_rows() > 0) {
	        return $result->result();
	    }
	    else
	        return FALSE;*/
	   return $this->db->get()->result();
    }



	public function select($table,$order_by=""){

		$this->db->select('*');

		$this->db->order_by($order_by);

		$this->db->from($table);

		$query = $this->db->get();

		return $query->result_array();

	}





	public function getjoinUserCity(){

		$this->db->select('*');

		$this->db->from('user u');

		$this->db->order_by('u.user_id','DESC');

		$this->db->join('cities c','u.user_id=u.city_id');

		$query = $this->db->get();

        return $query->result_array();



		

    }



    // SELECT * FROM `user` `u` JOIN `cities` `c` ON 2 =`u`.`city_id` ORDER BY `u`.`user_id` DESC

    // SELECT * FROM `user` `u` JOIN `cities` `c` ON `u`.`user_id` =`u`.`city_id` ORDER BY `u`.`user_id` DESC





    public function searchData($wheredata){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($wheredata);
		$this->db->like($wheredata);
		return $this->db->get()->result_array();
    }

     public function searchDataById($wheredata){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like($wheredata);
		return $this->db->get()->result_array();
    }





    public function searchAllData($wheredata,$gender){

		$this->db->select('*');

		$this->db->from('user');

		$this->db->where($wheredata,$gender);

		return $this->db->get()->result_array();

    }

     public function createData1(){
		$this->db->select('*');
		$this->db->from('favourite u');
		$this->db->join('user c','u.fvrtUser_id=c.fvrtUser_id');
		
		$query = $this->db->get();
        return $query->result_array();

		
    }

     public function createData12(){
		$this->db->select('*');
		$this->db->from('favourite_list');
		$query = $this->db->get();
        return $query->result_array();

		
    }

    
    public function deleterec($wheredata,$tbl){
		$query = $this->db->where($wheredata);
		$query = $this->db->delete($tbl);
		return $query;
	
	}

	public function like_count($user_id='',$entity_type='', $status=''){
        $this->db->where('to_user_id', $user_id);       
        $this->db->where('status', $status);
        return $count = $this->db->count_all_results('tbl_notification');
    } 


   public function get_row($tableName, $colName, $id){
	    $this->db->where($colName, $id);
	    $result = $this->db->get($tableName);
	    if ($result->num_rows() > 0) {
	        return $result->row();
	    }
	    else
	        return FALSE;
	}


	public function add($tableName, $data) {
	    $this->db->insert($tableName, $data);
	  
	    return $this->db->insert_id();
	}


		public function deleteMulti($tableName, $wh) {
	    $this->db->where($wh);
	    $this->db->delete($tableName);
	    return TRUE;
	}

		public function get_single_row($tableName, $dataget='', $returnType = '',  $orderby='', $orderformat ='asc'){
		if($dataget != ''){					
			foreach ($dataget as $field => $value)					
				$this->db->where($field, $value);
		}
		if ($orderby != ''){
			$this->db->order_by($orderby, $orderformat);
		}
		$result = $this->db->get($tableName);
		if ($result->num_rows() > 0) {	
		$result->row();	
			if ($returnType == 'array')					
				return $result->row_array();
			else					
				return $result->row();
		}		
			else			
				return FALSE;		
	}

	public function get_row_array($tableName, $array){
	    $this->db->where($array);
	    $result = $this->db->get($tableName);
	    if ($result->num_rows() > 0) {
	        return $result->row();
	    }
	    else
	        return FALSE;
	}	


      public function single_user_data($user_id=''){
        $this->db->select('u.*, ct.city_name');
      
        $this->db->from('user u');
        $this->db->join('cities ct',  'u.city = ct.city_id');
             
       	if($user_id)
		{
			$this->db->where('u.user_id', $user_id);	
		}

        return $this->db->get()->row();
    }
    
    
    	public function getAll($table,$order_by=""){

		$this->db->select('*');

		$this->db->order_by($order_by);

		$this->db->from($table);

		$query = $this->db->get();

		return $query->result_array();

	}

    
    public function selectAllByIds($table,$wheredata,$order_by=""){
		$this->db->select('*');
		$this->db->order_by($order_by);
		$this->db->from($table);
		$this->db->where($wheredata);
		// echo $this->db->last_query();exit();
	    $query = $this->db->get();
	   return $query->result_array();

	}





}

