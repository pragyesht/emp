<?php  


class Excel extends CI_Controller{
	function __construct()
    {
        parent::__construct();
    } 


	function index()
    {
	   	 //excel.php  
		 header('Content-Type: application/vnd.ms-excel');  
		 header('Content-disposition: attachment; filename='.rand().'.xls');  
		 echo $_GET["data"];  
	}

	function emp()
	{
		header('Content-Type: application/vnd.ms-excel');  
		header('Content-disposition: attachment; filename='.rand().'.xls');  


		$this->load->model('Master_emp_model');

		$params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('master_emp/index?');
        $config['total_rows'] = $this->Master_emp_model->get_all_master_emps_count();
        $this->pagination->initialize($config);

        $data['master_emps'] = $this->Master_emp_model->get_all_master_emps($params);


        echo '<table class="table table-striped">
                    <tr>
						<th>Sr.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>City</th>
						<th>Dept</th> 
						<th>Country</th>
						<th>State</th>
						
                    </tr>';
                  	$i=0; foreach($data['master_emps'] as $m){ $i++;
                    echo '<tr>
						<td>'. $i. '</td>
						<td>'. $m['me_fname']. ' '. $m['me_lname']. '</td>
						<td>'. $m['me_email'] . '</td>
						<td>'. $m['me_mobile'] . '</td>
						<td>'. $m['me_city']. '</td>
						<td>'. $m['me_dept_id'] . '</td>
						<td>'. $m['me_country']. '</td>
						<td>'. $m['me_state']. '</td>
						
                    </tr>';
                    } 
                echo '</table>';



    	
		

	}
}

 ?>  