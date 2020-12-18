<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class Master_emp_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get master_emp by me_id
     */
    function get_master_emp($me_id)
    {
        return $this->db->get_where('master_emp',array('me_id'=>$me_id))->row_array();
    }
    
    /*
     * Get all master_emps count
     */
    function get_all_master_emps_count()
    {
        $this->db->from('master_emp');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all master_emps
     */
    function get_all_master_emps($params = array())
    {
        $this->db->order_by('me_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('master_emp')->result_array();
    }

    /*
     * Get sum department master_emps
     */
    function chart_dept_master_emps()
    {
        $this->db->select('me_dept_id');
        $this->db->select_sum('me_salary');
        $this->db->group_by('me_dept_id');
        return $this->db->get('master_emp')->result_array();
    }
        
    /*
     * function to add new master_emp
     */
    function add_master_emp($params)
    {
        $this->db->insert('master_emp',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update master_emp
     */
    function update_master_emp($me_id,$params)
    {
        $this->db->where('me_id',$me_id);
        return $this->db->update('master_emp',$params);
    }
    
    /*
     * function to delete master_emp
     */
    function delete_master_emp($me_id)
    {
        return $this->db->delete('master_emp',array('me_id'=>$me_id));
    }


}
