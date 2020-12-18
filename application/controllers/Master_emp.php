<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Master_emp extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_emp_model');
    } 

    /*
     * Listing of master_emps
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('master_emp/index?');
        $config['total_rows'] = $this->Master_emp_model->get_all_master_emps_count();
        $this->pagination->initialize($config);

        $data['master_emps'] = $this->Master_emp_model->get_all_master_emps($params);
        
        $data['_view'] = 'master_emp/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Charting of master_emp
     */
    function chart()
    {  
        $data['chart_emps'] = $this->Master_emp_model->chart_dept_master_emps();
        
        $data['_view'] = 'master_emp/chart';    
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new master_emp
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('me_fname','Fname','required|min_length[2]|max_length[100]');
		$this->form_validation->set_rules('me_lname','Lname','required|min_length[2]|max_length[100]');
		$this->form_validation->set_rules('me_email','Email','valid_email|min_length[2]|max_length[100]');
		$this->form_validation->set_rules('me_mobile','Mobile','required|integer|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('me_salary','Salary','required|integer|min_length[2]|max_length[10]');
		$this->form_validation->set_rules('me_dept_id','Dept','required');
		$this->form_validation->set_rules('me_country','Country','required');
		$this->form_validation->set_rules('me_state','State','required');
		$this->form_validation->set_rules('me_city','City','required');
		$this->form_validation->set_rules('me_company','Company','min_length[2]|max_length[100]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'me_gender' => $this->input->post('me_gender'),
				'me_dept_id' => $this->input->post('me_dept_id'),
				'me_country' => $this->input->post('me_country'),
				'me_state' => $this->input->post('me_state'),
				'me_city' => $this->input->post('me_city'),
				'me_fname' => $this->input->post('me_fname'),
				'me_lname' => $this->input->post('me_lname'),
				'me_email' => $this->input->post('me_email'),
				'me_mobile' => $this->input->post('me_mobile'),
				'me_salary' => $this->input->post('me_salary'),
				'me_company' => $this->input->post('me_company'),
            );
            
            $master_emp_id = $this->Master_emp_model->add_master_emp($params);
            redirect('master_emp/index');
        }
        else
        {            
            $data['_view'] = 'master_emp/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a master_emp
     */
    function edit($me_id)
    {   
        // check if the master_emp exists before trying to edit it
        $data['master_emp'] = $this->Master_emp_model->get_master_emp($me_id);
        
        if(isset($data['master_emp']['me_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('me_fname','Me Fname','required|min_length[2]|max_length[100]');
			$this->form_validation->set_rules('me_lname','Me Lname','required|min_length[2]|max_length[100]');
			$this->form_validation->set_rules('me_email','Me Email','valid_email');
			$this->form_validation->set_rules('me_mobile','Me Mobile','integer');
			$this->form_validation->set_rules('me_salary','Me Salary','integer');
			$this->form_validation->set_rules('me_dept_id','Me Dept Id','required');
			$this->form_validation->set_rules('me_country','Me Country','required');
			$this->form_validation->set_rules('me_state','Me State','required');
			$this->form_validation->set_rules('me_city','Me City','required');
			$this->form_validation->set_rules('me_company','Me Company','min_length[2]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'me_gender' => $this->input->post('me_gender'),
					'me_dept_id' => $this->input->post('me_dept_id'),
					'me_country' => $this->input->post('me_country'),
					'me_state' => $this->input->post('me_state'),
					'me_city' => $this->input->post('me_city'),
					'me_fname' => $this->input->post('me_fname'),
					'me_lname' => $this->input->post('me_lname'),
					'me_email' => $this->input->post('me_email'),
					'me_mobile' => $this->input->post('me_mobile'),
					'me_salary' => $this->input->post('me_salary'),
					'me_company' => $this->input->post('me_company'),
                );

                $this->Master_emp_model->update_master_emp($me_id,$params);            
                redirect('master_emp/index');
            }
            else
            {
                $data['_view'] = 'master_emp/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The master_emp you are trying to edit does not exist.');
    } 

    /*
     * Deleting master_emp
     */
    function remove($me_id)
    {
        $master_emp = $this->Master_emp_model->get_master_emp($me_id);

        // check if the master_emp exists before trying to delete it
        if(isset($master_emp['me_id']))
        {
            $this->Master_emp_model->delete_master_emp($me_id);
            redirect('master_emp/index');
        }
        else
            show_error('The master_emp you are trying to delete does not exist.');
    }
    
}
