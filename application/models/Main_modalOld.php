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

   	function getWhere($table,$where){	
			//$this->db->order_by("id", "desc"); 
			$this->db->where($where);
			$getdata = $this->db->get($table);		
			$num = $getdata->num_rows();
			if($num> 0){ 
				$arr=$getdata->result();
				foreach ($arr as $rows)
				{
					$data[] = $rows;
				}
				$getdata->free_result();
				return $data;
				}else{ 
				return false;
			}		
		}
		

	public function createCountData(){

		// $this->db->like($id);

	    $this->db->from('comment_list');

	    // $this->db->where('id');

	    $result= $this->db->count_all_results();

	    echo $this->db->last_query();



	    echo "count:".$result;

	}

    

    public function singleRowdata($where_data,$table){

    	$this->db->where($where_data);

    	$query=$this->db->get($table);
        // return $this->db->insert_id();

    	return $query->row();

    }

    public function GetsingleRowdata($where_data,$table){

    	$this->db->where($where_data);

    	$query=$this->db->get($table);
        // return $this->db->insert_id();
        return $query->row();

    	

    }





 

	public function insert($table,$data)

	{   $this->db->insert($table, $data);

       $insert_id = $this->db->insert_id();

       /*  echo $this->db->last_query();exit();*/

		return  $insert_id;

	    

	}   

	



	public function selectAllById($table,$wheredata){

		$this->db->select('*');

		$this->db->from($table);

		$this->db->where($wheredata);

	    $query = $this->db->get();

	   return $query->result_array();



	}



	public function selectDataById($table,$wheredata){

		$this->db->select('*');

		$this->db->from($table);

		$this->db->where($wheredata);

	    $query = $this->db->get();

	   return $query->row();
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





	public function select($table,$order_by=""){

		$this->db->select('*');

		$this->db->order_by($order_by);

		$this->db->from($table);

		$query = $this->db->get();

		return $query->result_array();

	}



	// public function searchCityByAlphabetic($table,$city_name=""){

	// 	$this->db->select('*');

	// 	$this->db->order_by($city_name);

	// 	$this->db->from($table);

	// 	$query = $this->db->get();

	// 	return $query->result_array();

	// }

	public function getAll($table,$order_by=""){

		$this->db->select('*');

		$this->db->order_by($order_by);

		$this->db->from($table);

		$query = $this->db->get();

		return $query->result_array();

	}



	// public function selectandCount($table,$id=""){

	// 	// $this->db->select('*');

	// 	$this->db->count($id);

	// 	$this->db->from($table);

	// 	$query = $this->db->get();

	// 	return $query->result_array();

	// }





	public function getjoinUserCity(){

		$this->db->select('*');

		$this->db->from('user u');

		$this->db->order_by('u.user_id','DESC');

		$this->db->join('cities c','u.user_id=u.city_id');

		$query = $this->db->get();

        return $query->result_array();



		

    }





    public function searchData($wheredata){

		$this->db->select('*');

		$this->db->from('user');

		$this->db->where($wheredata);

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

		$this->db->from('favourite_list u');

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



    public function createData13(){
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







	// public function selectAllDataByJoin(){

	// 	$post_id=$this->input->post('post_id');

	// 	$result = $this->db->query("select comment_list.id,comment_list.user_id,comment_list.comment,comment_list.status,post_list.post_id,user.user_name,user.user_img, user.user_email,user.mobile,user.location,user.created_date,post_list.post_img,post_list.post_question,post_list.date from comment_list,post_list,user where comment_list.user_id=user.user_id and comment_list.post_id='$post_id'")->result_array();

	// 	return $result;

	

	// }



	public function record_count()

  	{  

      $user_id=$this->input->post('user_id');

	  $resultcount= $this->db->query("SELECT COUNT(*) AS `total count` FROM tbl_vitistors WHERE `to_user_id`='$user_id'")->result();



	  return $resultcount;

 	 }


 	 public function block_count()

  	{  

      $user_id=$this->input->post('user_id');

	  $resultcount= $this->db->query("SELECT COUNT(*) AS `total count` FROM tbl_block WHERE `to_user_id`='$user_id'")->result();



	  return $resultcount;

 	 }




 	 public function record_countONpostId()

  	{  



	  $resultcount= $this->db->query("SELECT COUNT(*) AS `total count` FROM post_list WHERE `post_id`")->result();



	  return $resultcount;

  

   

 	 }



 	 // public function Comment_countONpostId()

  	// {  



	  // $resultcount= $this->db->query("SELECT COUNT(*) AS `total comment` FROM  comment_list WHERE `post_id`")->result();



	  // return $resultcount;

  

   

 	 // }



 	 public function countData(){

 	 	$query = $this->db->query('SELECT * FROM like_on_post');

		echo $query->num_rows();

 	 }





 	public function get_data(){

	    // $query=$this->db->query("SELECT *FROM posts ORDER BY st.id ASC");

	    // return $query->result_array();

	    if($_POST['type'] == 1){

        	$like_num = ($postLike + 1);

	        $upData = array(

	            'status' => $like_num

	        );

        	$return_count = $like_num;

	    }else{

	        $dislike_num = ($postDislike + 1);

	        $upData = array(

	            'status' => $dislike_num

	        );

	        $return_count = $dislike_num;

    	}





	}






	function saverecords($n,$e,$image_name)

 {

 	$query="insert into post_list (user_id,post_question,post_img) values ('$n','$e','$image_name')";

 	$this->db->query($query);

 }







    // public function nearBy($lat,$lng){

    //   $this->db->select("*, ( 3959 * acos( cos( radians('$lat') ) * cos( radians(lat) ) * cos( radians(lng) - radians('$lng') ) + sin( radians('$lat') ) * sin( radians(lat) ) ) ) AS distance from  user HAVING distance < 20  ORDER BY distance asc");                         

       

    //   return $this->db->get()->result_array();

    // }


     public function selectAllByIds($table,$wheredata,$order_by=""){
		$this->db->select('*');
		$this->db->order_by($order_by);
		$this->db->from($table);
		$this->db->where($wheredata);
		// echo $this->db->last_query();exit();
	    $query = $this->db->get();
	   return $query->result_array();

	}


	public function getCityWhereLike($city_name, $search)
    {

        $sql = "
            SELECT * FROM cities
            WHERE city_name LIKE '%$search%'
            ORDER BY `cities`.`city_id`
        ";

        $query = $this->db->query($sql);
        return $query->result();
    }


    public function getCity(){
      $query="SELECT * FROM cities";
      $this->db->query($query);
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
		
		
		function count_row11($status='',$table){
			$this->db->where($status,0);
			$data = $this->db->get($table);	
			$num = $data->num_rows();		
			if($num){
				return $num;
				}else{
				return false;
			}
		}


    

}

